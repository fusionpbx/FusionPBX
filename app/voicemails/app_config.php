<?php

	//application details
		$apps[$x]['name'] = "Voicemail";
		$apps[$x]['uuid'] = "b523c2d2-64cd-46f1-9520-ca4b4098e044";
		$apps[$x]['category'] = "";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "";
		$apps[$x]['description']['fr-fr'] = "";

	//destination details
		$y=0;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "voicemails";
		$apps[$x]['destinations'][$y]['name'] = "voicemails";
		$apps[$x]['destinations'][$y]['where'] = "where domain_uuid = '\${domain_uuid}' and voicemail_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "voicemail_id asc ";
		$apps[$x]['destinations'][$y]['field']['destination'] = "voicemail_id";
		$apps[$x]['destinations'][$y]['field']['description'] = "voicemail_description";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:*99\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer *99\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${description}";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "0347f82a-62a0-49d0-bacd-511d080c46d5";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "0347f82a-62a0-49d0-bacd-511d080c46d5";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_sms_edit";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_transcription_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";		
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";		
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_view";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";		
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";		
		$y++;

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '1cf61dea-42b5-4799-b9fa-f2c3bd29e933';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'voicemail_file';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'attach';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Define whether to attach voicemail files to email notifications, or only include a link.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '4723fe3b-e7ec-409e-a4a8-15ae274253fb';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'keep_local';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Define whether to keep voicemail files on the local system after sending attached via email.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '9a4879c0-87ac-42e5-99f2-2ca2c77dbd98';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'storage_type';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'base64';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Define which storage type (base_64 stores in the database).';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '690a36a8-b6d3-47ea-8780-1af609c1966c';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'message_max_length';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '300';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Maximum length of a voicemail (in seconds).';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'bfe802b1-fcad-41a3-9da2-6b0efdb0c05f';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_length';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '8';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'The default length of characters in a voicemail password.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'b127ca03-c682-4d71-b412-4e50f1aca339';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'greeting_max_length';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '90';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Maximum length of a voicemail greeting (in seconds).';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'dd09f9d8-6662-4270-9dac-b87191b77012';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'display_domain_name';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable display of @domain_name after voicemail_id when rendering emails.';

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemails";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the voicemail id.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_password";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the voicemail password.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "greeting_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the greeting id.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_alternate_greet_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Used to provide an alternate id for the voicemail announcement.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_mail_to";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the email address to send voicemail to.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_sms_to";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the sms did to send voicemail to.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_transcription_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "If voicemail transcription is enabled for this user";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_attach_file";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Choose whether to attach the file to the email.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_file";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select a listening option to include with the email notification.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_local_after_email";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Choose to keep the voicemail file after sending the email.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select to enable or disable this voicemail.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the description.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_name_base64";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_tutorial";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;		

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemail_messages";
		$apps[$x]['db'][$y]['table']['parent'] = "v_voicemails";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_message_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "created_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Created epoch";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "read_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Read epoch";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Caller ID Name";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Caller ID Number";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_length";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail message length.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_status";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail message status";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_priority";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail message priority.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_intro_base64";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail intro encoded in base64.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_base64";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail file encoded in base64.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_transcription";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail transcription.";
		$z++;

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemail_destinations";
		$apps[$x]['db'][$y]['table']['parent'] = "v_voicemails";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_destination_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_voicemails";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "voicemail_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid_copy";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_voicemails";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "voicemail_uuid";
		$z++;

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemail_options";
		$apps[$x]['db'][$y]['table']['parent'] = "v_voicemails";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_option_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_voicemails";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "voicemail_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_digits";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_action";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_param";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;

?>
