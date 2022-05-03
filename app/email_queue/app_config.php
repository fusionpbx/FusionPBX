<?php

	//application details
		$apps[$x]['name'] = 'Email Queue';
		$apps[$x]['uuid'] = '5befdf60-a242-445f-91b3-2e9ee3e0ddf7';
		$apps[$x]['category'] = 'system';
		$apps[$x]['subcategory'] = 'email';
		$apps[$x]['version'] = '2.10';
		$apps[$x]['license'] = 'Member';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en-us'] = '';

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "35c40afc-8b08-45f1-a96c-2f8a5352cd2d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable or disable the email queue.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "237efdc4-ba71-4c8f-8040-28d0e3a3d6bf";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "limit";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "30";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Limit the records to process at one time.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c4905655-2d67-4eda-9df0-029931c12c6f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "interval";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "120";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "How often to process the email queue. Default 120 seconds.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d945ed66-39c1-44eb-b596-49c9399d8018";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "retry_limit";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Number of tries to send an email before giving up.";
		$y++;
		//$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a9eb5a16-e018-4a83-975e-eee2ed31f923";
		//$apps[$x]['default_settings'][$y]['default_setting_category'] = "email_queue";
		//$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "retry_interval";
		//$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		//$apps[$x]['default_settings'][$y]['default_setting_value'] = "300";
		//$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		//$apps[$x]['default_settings'][$y]['default_setting_description'] = "Time in seconds to wait before trying to email again. Default 300 seconds";

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_add';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_edit';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_delete';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_all';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_attachment_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_attachment_add';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_attachment_edit';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_attachment_delete';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'email_queue_attachment_all';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;

	//email queue
		$y = 0;
		$apps[$x]['db'][$y]['table']['name'] = 'v_email_queue';
		$apps[$x]['db'][$y]['table']['parent'] = '';
		$z = 0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_queue_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'hostname';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'false';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_from';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_to';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_subject';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_body';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_status';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_retry_count';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'false';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_action_before';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_action_after';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_transcription';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = 'email_debug';
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = 'email_substatus';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		//$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'true';
		$z++;

	//attachments
		$y = 6;
		$apps[$x]['db'][$y]['table']['name'] = 'v_email_queue_attachments';
		$apps[$x]['db'][$y]['table']['parent'] = 'v_email_queue';
		$z = 0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_queue_attachment_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_queue_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_email_queue';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'email_queue_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_attachment_type';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_attachment_path';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_attachment_name';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'email_attachment_base64';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$z++;

?>
