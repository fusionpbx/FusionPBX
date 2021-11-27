<?php

	//application details
		$apps[$x]['name'] = "Default Settings";
		$apps[$x]['uuid'] = "2c2453c0-1bea-4475-9f44-4d969650de09";
		$apps[$x]['category'] = "Core";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Default settings that apply to all domains.";
		$apps[$x]['description']['en-gb'] = "Default settings that apply to all domains.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Grundlegende Einstellungen die für alle Domänen gültig sind.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Grundlegende Einstellungen die für alle Domänen gültig sind.";
		$apps[$x]['description']['es-cl'] = "Configuraciones predeterminadas que aplican a todos los dominios.";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Configurations par défaut applicable à tous les domaines";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "Configurações Padrão aplicáveis à todos os domínios";
		$apps[$x]['description']['pt-pt'] = "Configurações padrão que se aplicam a todos os domínios.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "Настройки по умолчанию для всех доменов";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "834b2739-9e99-4345-9b0b-7ec3ca332b67";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//default settings
		$y = 0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3bcb4912-e34c-45b0-8612-662783ee8d1b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "server";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "temp";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "dir";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = sys_get_temp_dir();
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "f1a7c2d4-ba3c-49c8-9146-e40eb8873030";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "template";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "name";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "default";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "da9aa071-5dd8-4955-b5a6-d3c60ce7d78a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "menu";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "uuid";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "b4750c3f-2a86-b00d-b7d0-345c14eca286";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "500f7a88-e288-4a80-9f0a-b696f9f33cd6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "language";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "code";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "en-us";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c55b28df-0eba-4e8f-a13b-022d5dfd8d22";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "time_zone";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "name";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "UTC";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cee8b1af-8b02-47e4-aa8e-267b18b69b67";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "cidr";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cb55e6ac-9bb0-4714-b68f-82b39a3b9ec2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "country";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "code";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "us";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c338e26c-0dd5-4ad5-a055-82e2c5ed3f6f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "bridge";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "loopback";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "outbound,loopback,lcr";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "48874632-421d-4829-a6b7-0695c589d85f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "paging";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "100";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Set the maximum number of records displayed per page. (Default: 50)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "113c90a3-5778-4b4a-8f71-44c790601eca";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "domain";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "time_format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "24h";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Toggle between 24 hour and 12 hour time formats. Default is 24hr when disabled.";		
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9f4a1209-72ba-435b-90e1-4cba48d74509";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "method";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "smtp";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Options: smtp, sendmail, mail, qmail";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b7a0f80d-b704-4fcf-9b66-e96e0604951e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "address_type";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "add_address";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Options: add_address, add_bcc";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "97a2410b-cfc8-4194-9172-dd5b0acfa9f3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_auth";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8efff742-eea4-493d-abeb-064457586e26";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_port";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "use non-default port if enabled and non-zero";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "16f40b7b-293d-4308-81f4-772e0ea4c536";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_from";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2976da3a-d8e5-4e25-9f16-463dfa256f4d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_from_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "82bfc038-5e8d-427e-9773-0eb31bc3a6c3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_hostname";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Define the local hostname to be used when sending mail.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0bd788c1-3262-4336-92f4-ef7869062380";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_host";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "49e778a6-22a7-418f-84b9-bfa27e38f2e5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_username";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8a5ae059-9bf3-4d6d-ae92-b6cb39766d0a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_password";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "fd7441d5-d348-4660-8c0b-6413220c680d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_secure";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "tls";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e1c17089-1e75-4e46-9e59-4748bb6a6cec";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "email";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_validate_certificate";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "set to false to ignore SSL certificate warnings e.g. for self-signed certificates";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8a07ab78-f386-482c-85dd-7ce8127597d6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "login";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "password_reset_key";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = base64_encode(openssl_random_pseudo_bytes(32));
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Display a Reset Password link on the login box (requires smtp_host be defined).";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a21a002c-c065-411c-ae56-3d33a09f64b4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "login";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "password_reset_domain";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Set the domain to use in the Password Reset link sent via email.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "962ac32c-74ce-4cce-b1d9-89f4d921493d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "login";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "domain_name_visible";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Displays a domain input or select box (if domain_name array defined) on the login box.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "796508ee-894d-4566-bb7f-e1269a6e0e26";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "login";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "domain_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "pbx1.yourdomain.com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Domain select option displayed on the login box.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "85d79c4e-4689-4d8e-b87d-5edd5b1574b1";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cache";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "method";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "file";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Cache methods file or memcache.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7b644bfb-124f-4212-9541-1ca564be9d79";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "cache";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "location";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "/var/cache/fusionpbx";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Location for the file cache.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "31b60c5f-e501-4982-893b-b56ef4ef5b56";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "log";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable logging true or false.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "81008738-aec1-4535-b451-29c25f213694";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "log";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "type";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "syslog";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Options: syslog, file";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_default_settings";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "app_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_category";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the category.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_subcategory";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the subcategory.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_value";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the value.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "boolean";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['toggle'] = ['true','false'];
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_languages";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "language_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "language";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The language name/title.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "code";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The language code.";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_countries";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "country_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "country";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The country name/title.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "iso_a2";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The 2-letter ISO abbreviation.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "iso_a3";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The 3-letter ISO abbreviation.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "num";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The numerical code.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "country_code";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "calling_code";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The calling code.";

?>
