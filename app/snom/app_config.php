<?php

	//application details
		$apps[$x]['name'] = "Snom";
		$apps[$x]['uuid'] = "91d9c209-1eca-46ca-8441-2a6bba386f53";
		$apps[$x]['category'] = "Vendor";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "";
		$apps[$x]['description']['en-gb'] = "";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "13d07ee4-e887-4993-94ba-e0f9ce044eaf";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_time_zone";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "USA-7";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "https://service.snom.com/display/wiki/timezone";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945982a-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_url";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://server.yourdomain.com/app/snom/resources/firmware";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Base URL for Snom Firmware. Download from https://service.snom.com/display/wiki/Deskphones+Firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "99459d0c-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d785";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD785-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D785 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "99459ea6-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d765";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD765-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D765 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "99459fe6-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d745";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD745-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D745 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945a126-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d735";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD735-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D735 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945a5f4-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d725";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD725-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D725 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945abe4-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d717";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD717-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D717 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945b058-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d7175";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD715-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D715 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945b6f2-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d712";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD712-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D712 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945b846-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d385";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD385-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D385 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945b97c-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d375";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD375-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D375 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945baa8-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d345";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD345-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D345 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945bca6-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d315";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD315-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D315 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9945bdfa-f366-11e9-a713-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_d120";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomD120-10.1.42.14.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the D120 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0435781d-19e7-4a37-bcd2-c2e568867863";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_pa1";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomPA1-8.7.5.75.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the PA1 firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9b64afb4-f367-11e9-81b4-2a2ae2dbcce4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_uxm";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "snomUXM-2.1.1.bin";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Filename of the Expansion Module firmware. Download from https://service.snom.com/display/wiki/How+to+update+firmware+on+a+D3%2C+D7+Expansion+Module+-+UXM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d9ea738d-33a7-4bad-9768-fb4b1d1e7e8c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_update_policy";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "auto_update";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "valid options are: auto_update, ask_for_update, settings_only, never_update. default is auto_update.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "dd68783e-fbdb-423c-bf5f-7c32939e7979";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_provision_url";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Use if provisioning url is different than the subdomain name url.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be18017c-0d34-46b5-bf9c-5cb49c71e583";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_amp_gain";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable or disable the amplifier gain. valid values: 0,1";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4f5598a9-ee23-44da-a85b-ae2a51f25426";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_speaker_volume";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "8";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Speaker volume valid values: 0-15.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be0f9603-d99c-4829-9502-32bbdf975ff6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_auto_answer_indication";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "on";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "If you want to become informed with an audible indication when an incoming call (intercom call too) is automatically answered by your phone, select “on”. valid values: on,off";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "880e655b-3c1b-497a-876b-365a94543e02";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_multicast_listen";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "on";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "If enabled, the phone receives RTP G.711 u-law (20 ms) packets sent to the given multicast addresses and plays them out. It can be used for listening, in handsfree mode, for streaming audio broadcasts or public announcements etc. valid values: on,off";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c566132c-d63f-453f-97ad-f7140353ffde";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_require_prack";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "off";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "On - Required:100Rel and Prack will be send (if offered by opposite). Off - Required:100Rel and Prack wont be send (even if offered by opposite) valid values: on,off";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "70f81d3c-d480-4602-a73f-66fa0707d6f6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_send_prack";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "off";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enables/Disables sending Supported:100Rel and by this whether early-dialogs by PRACK will be offered. valid values: on,off";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c85c9b44-c56e-4aac-aa88-98663771645a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_language";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "English";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Sets the default display-language on snom-phones. See https://service.snom.com/display/wiki/language";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "974bad52-b793-4901-ae7d-8bfb561970f5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_ntp_server";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0.pool.ntp.org";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Sets the ntp server on snom-phones.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ad42166c-af84-46bb-b4f4-8d18eceaf65d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_tone_scheme";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "USA";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Sets the tone scheme on snom-phones. See https://service.snom.com/display/wiki/tone_scheme";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2f2e9958-ca83-11ed-afa1-0242ac120002";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_m500pro_base";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://downloads.snom.com/M500/M500-1.9.2.img";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Provide the full URL to the M500 .img file. Latest firmware files can be found here: https://service.snom.com/display/wiki/DECT+M500+Pro-Series+Firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2f2e9cdc-ca83-11ed-afa1-0242ac120002";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_m500pro_deskset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://downloads.snom.com/M500/M58-1.9.2.img";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Provide the full URL to the M58 .img file. Latest firmware files can be found here: https://service.snom.com/display/wiki/DECT+M500+Pro-Series+Firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2f2e9e44-ca83-11ed-afa1-0242ac120002";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_m500pro_handset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://downloads.snom.com/M500/M55-1.9.2.img";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Provide the full URL to the M55 .img file. Latest firmware files can be found here: https://service.snom.com/display/wiki/DECT+M500+Pro-Series+Firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2f2e9fd4-ca83-11ed-afa1-0242ac120002";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_m100_base";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://downloads.snom.com/M100/M100KLE-1.0.5.2-0.img";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Provide the full URL to the M100 .img file. Latest firmware files can be found here: https://service.snom.com/display/wiki/DECT+M-KLE-Series+Firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2f2ea376-ca83-11ed-afa1-0242ac120002";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_m100_deskset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://downloads.snom.com/M100/M18KLE-1.0.4.2-0.img";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Provide the full URL to the M18 .img file. Latest firmware files can be found here: https://service.snom.com/display/wiki/DECT+M-KLE-Series+Firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2f2ea4f2-ca83-11ed-afa1-0242ac120002";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_firmware_m100_handset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://downloads.snom.com/M100/M10KLE-1.4.5.10-0.img";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Provide the full URL to the M10 .img file. Latest firmware files can be found here: https://service.snom.com/display/wiki/DECT+M-KLE-Series+Firmware";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4c02c034-bd50-45a8-9205-15c9fcb0704d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "snom_provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_dialtone_on_hold";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "New dialtone when the hold is pressed.";

?>
