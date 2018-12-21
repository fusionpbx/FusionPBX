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
	Portions created by the Initial Developer are Copyright (C) 2016-2018
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
*/

//includes
	require_once "root.php";
	require_once "resources/require.php";
	require_once "resources/check_auth.php";

//check permissions
	if (!permission_exists('message_view')) {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get();

//get number of messages to load
	$number = preg_replace('{[\D]}', '', $_GET['number']);

//set refresh flag
	$refresh = $_GET['refresh'] == 'true' ? true : false;

//get messages
	$since = date("Y-m-d H:i:s", strtotime("-24 hours"));
	$sql = "select * from v_messages ";
	$sql .= "where user_uuid = '".$_SESSION['user_uuid']."' ";
	$sql .= "and (domain_uuid = '".$domain_uuid."' or domain_uuid is null) ";
	//$sql .= "and message_date >= '".$since."' ";
	$sql .= "and (message_from like '%".$number."' or message_to like '%".$number."') ";
	$sql .= "order by message_date asc ";
	$prep_statement = $db->prepare(check_sql($sql));
	$prep_statement->execute();
	$messages = $prep_statement->fetchAll(PDO::FETCH_NAMED);
	unset ($prep_statement, $sql);

//get media (if any)
	$sql = "select message_uuid, message_media_uuid, message_media_type, length(message_media_content) as message_media_size from v_message_media ";
	$sql .= "where user_uuid = '".$_SESSION['user_uuid']."' ";
	$sql .= "and (domain_uuid = '".$domain_uuid."' or domain_uuid is null) ";
	$sql .= "and message_uuid in ( ";
	foreach ($messages as $message) {
		$message_uuids[] = "'".$message['message_uuid']."'";
	}
	$sql .= implode(',', $message_uuids);
	$sql .= ") ";
	$sql .= "and message_media_type <> 'txt' ";
	$prep_statement = $db->prepare(check_sql($sql));
	$prep_statement->execute();
	$rows = $prep_statement->fetchAll(PDO::FETCH_NAMED);
	unset ($prep_statement, $sql);

//prep media array
	if (is_array($rows) && sizeof($rows) != 0) {
		$x = 0;
		foreach ($rows as $row) {
			$message_media[$row['message_uuid']][$x]['uuid'] = $row['message_media_uuid'];
			$message_media[$row['message_uuid']][$x]['type'] = $row['message_media_type'];
			$message_media[$row['message_uuid']][$x]['size'] = $row['message_media_size'];
			$x++;
		}
	}

//css styles
	echo "<style>\n";
	echo "	.message-bubble {\n";
	echo "		display: block;\n";
	echo "		padding: 10px;\n";
	echo "		border: 1px solid;\n";
	echo "		margin-bottom: 10px;\n";
	echo "	}\n";

	echo "	.message-bubble-em {\n";
	echo "		margin-right: 10%;\n";
	echo "		border-radius: 0px 20px 20px 20px;\n";
	echo "		border-color: #cffec7;\n";
	echo "		background-color: #ecffe9;\n";
	echo "	}\n";

	echo "	.message-bubble-me {\n";
	echo "		margin-left: 10%;\n";
	echo "		border-radius: 20px 20px 0px 20px;\n";
	echo "		border-color: #cbf0ff;\n";
	echo "		background-color: #e5f7ff;\n";
	echo "	}\n";

	echo "	.message-bubble-when {\n";
	echo "		font-size: 65%;\n";
	echo "		line-height: 60%;\n";
	echo "	}\n";

	echo "	.message-media-link-em {\n";
	echo "		display: block;\n";
	echo "		position: inline;\n";
	echo "		margin: 5px 10px;\n";
	echo "		padding: 8px;\n";
	echo "		background: #cffec7;\n";
	echo "		border-radius: 7px;\n";
	echo "		text-align: center;\n";
	echo "	}\n";

	echo "	.message-media-link-me {\n";
	echo "		display: block;\n";
	echo "		position: inline;\n";
	echo "		margin: 5px 10px;\n";
	echo "		padding: 8px;\n";
	echo "		background: #cbf0ff;\n";
	echo "		border-radius: 7px;\n";
	echo "		text-align: center;\n";
	echo "	}\n";

	echo "</style>\n";

	if (!$refresh) {
		echo "<div id='thread_messages' style='max-height: 400px; overflow: auto;'>\n";
	}

	//output messages
		if (is_array($messages) && sizeof($messages) != 0) {
			foreach ($messages as $message) {
				//parse from message
				if ($message['message_direction'] == 'inbound') {
					$message_from = $message['message_to'];
					$media_source = format_phone($message['message_from']);
				}
				if ($message['message_direction'] == 'outbound') {
					$media_source = format_phone($message['message_to']);
				}

				//message bubble
				echo "<span class='message-bubble message-bubble-".($message['message_direction'] == 'inbound' ? 'em' : 'me')."'>";
				if ($message['message_text'] != '') {
					echo str_replace("\n",'<br />',$message['message_text'])."<br />\n";
				}
				if (is_array($message_media[$message['message_uuid']]) && sizeof($message_media[$message['message_uuid']]) != 0) {

					foreach ($message_media[$message['message_uuid']] as $media) {
						if ($media['type'] != 'txt') {
							if ($media['type'] == 'jpg' || $media['type'] == 'jpeg' || $media['type'] == 'gif' || $media['type'] == 'png') {
								echo "<a href='#' onclick=\"display_media('".$media['uuid']."','".$media_source."');\" class='message-media-link-".($message['message_direction'] == 'inbound' ? 'em' : 'me')."'>";
							}
							else {
								echo "<a href='message_media.php?id=".$media['uuid']."&src=".$media_source."&action=download' class='message-media-link-".($message['message_direction'] == 'inbound' ? 'em' : 'me')."'>";
							}
							echo "<img src='resources/images/attachment.png' style='width: 16px; height: 16px; border: none; margin-right: 10px;'>";
							echo "<span style='font-size: 85%;'>".strtoupper($media['type']).' &middot; '.strtoupper(byte_convert($media['size']))."</span>";
							echo "</a>\n";
						}
					}
				}
				echo "<span class='message-bubble-when'>".format_when_local($message['message_date'])."</span>\n";
				echo "</span>\n";
			}
			echo "	<span id='thread_bottom'></span>\n";
		}

	if (!$refresh) {
		echo "</div>\n";

		if (permission_exists('message_add')) {
			//output input form
			echo "<form id='message_compose'>\n";
			echo "<input type='hidden' name='message_type' value='sms'>\n";
			echo "<input type='hidden' name='message_from' value='".$message_from."'>\n";
			echo "<input type='hidden' name='message_to' value='".$number."'>\n";
			echo "<textarea class='formfld' id='message_text' name='message_text' style='width: 100%; max-width: 100%; height: 40px; border: 1px solid #cbcbcb; resize: vertical; padding: 5px 8px; margin-top: 10px;' placeholder=\"".$text['description-enter_response']."\"></textarea>";
			echo "<span style='position: relative;'>\n";
			echo "	<center>\n";
			echo "		<input type='reset' class='btn' style='float: left; margin-top: 15px;' value='".$text['button-clear']."' onclick=\"$('#message_text').focus();\">\n";
			echo "		<span id='thread_refresh_state'><img src='resources/images/refresh_active.gif' style='width: 16px; height: 16px; border: none; margin-top: 3px; cursor: pointer;' onclick=\"refresh_thread_stop('".$number."');\" alt=\"".$text['label-refresh_pause']."\" title=\"".$text['label-refresh_pause']."\"></span> ";
			echo "		<input type='submit' class='btn' style='float: right; margin-top: 15px;' value='".$text['button-send']."' title=\"".$text['label-ctrl_enter']."\">\n";
			echo "	</center>\n";
			echo "</span>\n";
			echo "</form>\n";

		//js to load messages for clicked number
			echo "<script>\n";
			//define form submit function
			echo "	$('#message_compose').submit(function(event) {\n";
			echo "		event.preventDefault();\n";
			echo "		$.ajax({\n";
			echo "			url: 'message_send.php',\n";
			echo "			type: 'POST',\n";
			echo "			data: $('#message_compose').serialize(),\n";
			echo "			success: function(){\n";
			echo "					document.getElementById('message_compose').reset();\n";
			echo "					if ($('#message_new_layer').is(':hidden')) {\n";
			echo "						$('#message_text').focus();\n";
			echo "					}\n";
			echo "					refresh_thread('".$number."','true');\n";
			echo "				}\n";
			echo "		});\n";
			echo "	});\n";
			//enable ctrl+enter to send
			echo "	$('#message_text').keydown(function (event) {\n";
			echo "		if ((event.keyCode == 10 || event.keyCode == 13) && event.ctrlKey) {\n";
			echo "			$('#message_compose').submit();\n";
			echo "		}\n";
			echo "	});\n";

			echo "</script>\n";
		}
	}



?>