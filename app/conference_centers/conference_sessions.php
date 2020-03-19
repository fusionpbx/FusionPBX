<?php
/*
	FusionPBX
	Version: MPL 1.1

	The contents of this file are subject to the Mozilla Public License Version
	1.1 (the "License"); you may not use this file except in compliance with
	the License. You may obtain a copy of the License at
	http://www.mozilla.org/MPL/

	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.

	The Original Code is FusionPBX

	The Initial Developer of the Original Code is
	Mark J Crane <markjcrane@fusionpbx.com>
	Copyright (C) 2008-2019 All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
*/

//includes
	require_once "root.php";
	require_once "resources/require.php";
	require_once "resources/check_auth.php";
	require_once "resources/paging.php";

//check permissions
	if (permission_exists('conference_session_view')) {
		//access granted
	}
	else {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get();

//set variables from the http values
	$meeting_uuid = $_GET["id"];
	$order_by = $_GET["order_by"] != '' ? $_GET["order_by"] : 'start_epoch';
	$order = $_GET["order"] != '' ? $_GET["order"] : 'desc';

//add meeting_uuid to a session variable
	if (is_uuid($meeting_uuid)) {
		$_SESSION['meeting']['uuid'] = $meeting_uuid;
	}

//prepare to page the results
	$sql = "select count(*) from v_conference_sessions ";
	$sql .= "where domain_uuid = :domain_uuid ";
	$sql .= "and meeting_uuid = :meeting_uuid ";
	$parameters['domain_uuid'] = $_SESSION['domain_uuid'];
	$parameters['meeting_uuid'] = $_SESSION['meeting']['uuid'];
	$database = new database;
	$num_rows = $database->select($sql, $parameters, 'column');
	unset($sql, $parameters);

//prepare to page the results
	$rows_per_page = ($_SESSION['domain']['paging']['numeric'] != '') ? $_SESSION['domain']['paging']['numeric'] : 50;
	$param = '';
	if (isset($_GET['page'])) {
		$page = is_numeric($_GET['page']) ? $_GET['page'] : 0;
		list($paging_controls, $rows_per_page) = paging($num_rows, $param, $rows_per_page);
		list($paging_controls_mini, $rows_per_page) = paging($num_rows, $param, $rows_per_page, true);
		$offset = $rows_per_page * $page;
	}

//get the list
	$sql = "select * from v_conference_sessions ";
	$sql .= "where domain_uuid = :domain_uuid ";
	$sql .= "and meeting_uuid = :meeting_uuid ";
	$sql .= order_by($order_by, $order);
	$sql .= limit_offset($rows_per_page, $offset);
	$parameters['domain_uuid'] = $_SESSION['domain_uuid'];
	$parameters['meeting_uuid'] = $_SESSION['meeting']['uuid'];
	$database = new database;
	$conference_sessions = $database->select($sql, $parameters, 'all');
	unset($sql, $parameters);

//includes the header
	require_once "resources/header.php";

//styles
	echo "\n";
	echo "<style>\n";
	echo "audio {\n";
	echo "	width:320px;\n";
	echo "	height: 28px;\n";
	echo "	-moz-border-radius:3px;\n";
	echo "	-webkit-border-radius:3px;\n";
	echo "	border-radius:3px;\n";
	echo "	overflow:hidden;\n";
	echo "	display: block;\n";
	echo "}\n";
	echo "</style>\n";
	echo "\n";

//show the content
	echo "<div class='action_bar' id='action_bar'>\n";
	echo "	<div class='heading'><b>".$text['title-conference_sessions']." (".$num_rows.")</b></div>\n";
	echo "	<div class='actions'>\n";
	echo button::create(['type'=>'button','label'=>$text['button-back'],'icon'=>$_SESSION['theme']['button_icon_back'],'id'=>'btn_back','link'=>'conference_rooms.php']);
	if ($paging_controls_mini != '') {
		echo 	"<span style='margin-left: 15px;'>".$paging_controls_mini."</span>\n";
	}
	echo "	</div>\n";
	echo "	<div style='clear: both;'></div>\n";
	echo "</div>\n";

	echo $text['description-conference_sessions']."\n";
	echo "<br /><br />\n";

	echo "<table class='list'>\n";
	echo "<tr class='list-header'>\n";
	echo th_order_by('start_epoch', $text['label-start'], $order_by, $order);
	echo th_order_by('end_epoch', $text['label-end'], $order_by, $order);
	echo "<th>".$text['label-time']."</th>\n";
	echo th_order_by('profile', $text['label-profile'], $order_by, $order);
	//echo th_order_by('recording', $text['label-recording'], $order_by, $order);
	echo "<th>".$text['label-tools']."</th>\n";
	if ($_SESSION['theme']['list_row_edit_button']['boolean'] == 'true') {
		echo "	<td class='action-button'>&nbsp;</td>\n";
	}
	echo "</tr>\n";

	if (is_array($conference_sessions) && sizeof($conference_sessions) != 0) {
		foreach($conference_sessions as $row) {
			$tmp_year = date("Y", $row['start_epoch']);
			$tmp_month = date("M", $row['start_epoch']);
			$tmp_day = date("d", $row['start_epoch']);

			if (defined('TIME_24HR') && TIME_24HR == 1) {
				$start_date = date("j M Y H:i:s", $row['start_epoch']);
				$end_date = date("j M Y H:i:s", $row['end_epoch']);
			} else {
				$start_date = date("j M Y h:i:sa", $row['start_epoch']);
				$end_date = date("j M Y h:i:sa", $row['end_epoch']);
			}
			$time_difference = '';
			if (strlen($row['end_epoch']) > 0) {
				$time_difference = $row['end_epoch'] - $row['start_epoch'];
				$time_difference = gmdate("G:i:s", $time_difference);
			}

			if (strlen( $row['start_epoch']) > 0) {
				$list_row_url = "conference_session_details.php?uuid=".urlencode($row['conference_session_uuid']);
				echo "<tr class='list-row' href='".$list_row_url."'>\n";
				echo "	<td><a href='".$list_row_url."'>".$start_date."</a>&nbsp;</td>\n";
				echo "	<td>".$end_date."&nbsp;</td>\n";
				echo "	<td>".$time_difference."&nbsp;</td>\n";
				echo "	<td>".escape($row['profile'])."&nbsp;</td>\n";
				$tmp_dir = $_SESSION['switch']['recordings']['dir'].'/'.$_SESSION['domain_name'].'/archive/'.$tmp_year.'/'.$tmp_month.'/'.$tmp_day;
				$tmp_name = '';
				if (file_exists($tmp_dir.'/'.$row['conference_session_uuid'].'.mp3')) {
					$tmp_name = $row['conference_session_uuid'].".mp3";
				}
				elseif (file_exists($tmp_dir.'/'.$row['conference_session_uuid'].'.wav')) {
					$tmp_name = $row['conference_session_uuid'].".wav";
				}
				echo "	<td class='button no-link'>\n";
				if (strlen($tmp_name) > 0 && file_exists($tmp_dir.'/'.$tmp_name)) {
					echo "<table border='0' cellpadding='0' cellspacing='0'>\n";
					echo "<tr>\n";
					echo "<td>\n";
					echo button::create(['type'=>'button','label'=>$text['button-download'],'icon'=>$_SESSION['theme']['button_icon_download'],'style'=>'margin-right: 15px;','link'=>'download.php?id='.urlencode($row['conference_session_uuid'])]);
					echo "</td>\n";
					if (permission_exists('conference_session_play')) {
						echo "<td>\n";
						echo "	<audio controls=\"controls\">\n";
  						echo "		<source src=\"download.php?id=".escape($row['conference_session_uuid'])."\" type=\"audio/x-wav\">\n";
						echo "	</audio>\n";
						//echo "		<a href=\"javascript:void(0);\" onclick=\"window.open('".PROJECT_PATH."/app/recordings/recording_play.php?a=download&type=moh&filename=".urlencode('archive/'.$tmp_year.'/'.$tmp_month.'/'.$tmp_day.'/'.$tmp_name)."', 'play',' width=420,height=150,menubar=no,status=no,toolbar=no')\">\n";
						//echo "			".$text['label-play']."\n";
						//echo "		</a>\n";
						echo "</td>\n";
					}
					echo "</tr>\n";
					echo "</table>\n";
				}
				echo "	</td>\n";
				if ($_SESSION['theme']['list_row_edit_button']['boolean'] == 'true') {
					echo "	<td class='action-button'>\n";
					echo button::create(['type'=>'button','title'=>$text['button-view'],'icon'=>$_SESSION['theme']['button_icon_view'],'link'=>$list_row_url]);
					echo "	</td>\n";
				}
				echo "</tr>\n";

			}
		}
		unset($result);
	}

	echo "</table>\n";
	echo "<br />\n";
	echo "<div align='center'>".$paging_controls."</div>\n";

//include the footer
	require_once "resources/footer.php";

?>