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
	Portions created by the Initial Developer are Copyright (C) 2008-2017
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
*/

//process this only one time
	if ($domains_processed == 1) {
		//set domains with enabled status of empty or null to true
			$sql = "update v_domains set domain_enabled = 'true' where domain_enabled = '' or domain_enabled is null";
			$db->exec(check_sql($sql));
			unset($sql);

		//update any domains set to legacy languages
			$language = new text;
			foreach ($language->legacy_map as $language_code => $legacy_code) {
				if(strlen($legacy_code) == 5)
					continue;
				$sql = "update v_domain_settings set domain_setting_value = '$language_code' where domain_setting_value = '$legacy_code' and domain_setting_name = 'code' and domain_setting_subcategory = 'language' and domain_setting_category = 'domain'";
				$db->exec(check_sql($sql));
				unset($sql);
			}

		//migrate old domain_settings
			$sql = "update v_domain_settings ";
			$sql .= "set domain_setting_value = '#fafafa' ";
			$sql .= "where domain_setting_subcategory = 'message_default_color' ";
			$sql .= "and domain_setting_value = '#ccffcc' ";
			$prep_statement = $db->prepare(check_sql($sql));
			if ($prep_statement) {
				$prep_statement->execute();
			}
			$sql = "update v_domain_settings ";
			$sql .= "set domain_setting_value = '#666' ";
			$sql .= "where domain_setting_subcategory = 'message_default_background_color' ";
			$sql .= "and domain_setting_value = '#004200' ";
			$prep_statement = $db->prepare(check_sql($sql));
			if ($prep_statement) {
				$prep_statement->execute();
			}
			unset($prep_statement, $sql);
			
		//domain settings - change the type from var to text
			$sql = "select * from v_domain_settings ";
			$sql .= "where domain_setting_name = 'var' ";
			$prep_statement = $db->prepare(check_sql($sql));
			$prep_statement->execute();
			$result = $prep_statement->fetchAll(PDO::FETCH_NAMED);
			foreach ($result as &$row) {
				$sql = "select * from v_domain_settings ";
				$sql .= "where domain_setting_name = 'text' ";
				$sql .= "and domain_setting_category = '".check_str($row['domain_setting_category'])."' ";
				$sql .= "and domain_setting_subcategory = '".check_str($row['domain_setting_subcategory'])."' ";
				$sql .= "and domain_uuid = '".check_str($row['domain_uuid'])."' ";
				$prep_statement = $db->prepare(check_sql($sql));
				$prep_statement->execute();
				$e_row = $prep_statement->fetch(PDO::FETCH_NAMED);
				$sql = "update v_domain_settings ";
				$sql .= "set domain_setting_name = 'text' ";
				if($e_row) {
					//copy the description from the probbably newer field
						$sql .= ", domain_setting_description = '".check_str($e_row['domain_setting_description'])."' ";
					//delete the probbably newer field if it is empty
						if($e_row['domain_setting_value'] == ""){
							$d_sql = "delete from v_domain_settings ";
							$d_sql .= "where domain_setting_name = 'text' ";
							$d_sql .= "and domain_setting_category = '".check_str($row['domain_setting_category'])."' ";
							$d_sql .= "and domain_setting_subcategory = '".check_str($row['domain_setting_subcategory'])."' ";
							$d_sql .= "and domain_uuid = '".check_str($row['domain_uuid'])."' ";
							$d_sql .= "and domain_setting_value = '' ";
							$db->exec(check_sql($d_sql));
							unset($d_sql);
						}
				}
				$sql .= "where domain_setting_name = 'var' ";
				$sql .= "and domain_setting_category = '".check_str($row['domain_setting_category'])."' ";
				$sql .= "and domain_setting_subcategory = '".check_str($row['domain_setting_subcategory'])."' ";
				$sql .= "and domain_uuid = '".check_str($row['domain_uuid'])."' ";
				$db->exec(check_sql($sql));
				unset($e_row);
			}
			unset($sql, $prep_statement, $result);
  
	}
?>
