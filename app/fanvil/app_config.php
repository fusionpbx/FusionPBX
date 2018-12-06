<?php

	//application details
		$apps[$x]['name'] = "Fanvil";
		$apps[$x]['uuid'] = "c4e85f9c-f7df-47b4-921e-de0ff356eee4";
		$apps[$x]['category'] = "Vendor";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "";
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
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bc2fe268-a8a8-4a92-8096-86ab3c55a644";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_time_zone";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "-20";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Time zone ranges ";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6de1ba1c-605c-457e-bff6-140d5f7fdc5f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_time_zone_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "UTC-5";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Time zone name example United States-Eastern Time";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "54280025-2cc0-429a-b2f4-5e8e2426ed33";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_location";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "4";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Used with time zone and time zone name";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a9e4cb6c-4d22-44d8-88a3-e556a5b16c59";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_enable_dst";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable Daylight Savings Time. 0 - Disabled, 1 - Automatic, 2 - Manual";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "983a969a-f96f-469f-8af2-ccbd6e3d62f6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_dst_fixed_type";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "DST Type: 0 - Disabled, 1 - 'By Date', 2 - 'By Week' (Only used when DST = Manual Mode)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0c5fe247-0361-4c69-a247-d14b5417e53e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_dst_minute_offset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "60";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "DST Offset time in minutes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "abe840e9-534c-4dc5-8533-464d1cb02557";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_realm";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "enter a value";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "enter a value";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9d7a9b40-a01c-4687-aa25-74d92350628a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_greeting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "FusionPBX";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Name at top left of screen 0~12 characters";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1c160cbf-6e6c-496f-8b3f-b066decc3b1e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_date_display";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "value 0-13 Date Format";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d2eab7fd-0d20-4e71-ab91-7554243c9807";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_time_display";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "1=12hr 0=24hr";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d71d655f-0f07-45b7-ae7a-8d0f6673d98d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_wifi_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "1=on 0=off";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d1d5bb97-33f5-4762-a5c2-5e111715736e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_menu_password";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "123";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Numeric password on phone to access advanced settings.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9979b33a-2430-46c0-9b19-ef6ea655df9c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_stun_server";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "example.domain.tld";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "enter a server name or ip";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8ab03ac3-7e14-4f9b-9532-5cda97f5fa6f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_stun_port";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3478";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "enter a stun port number";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "68feb973-be9a-42ac-94a1-54263dfde589";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_lldp_tx_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " LLDP Transmit. 0-Disabled, 1-Enabled";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "f0d1dd5b-7130-428c-bddb-a975d85587f5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_lldp_refresh";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "60";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "LLDP Refresh Timer. Default 60 seconds";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "10af1d27-ef61-4c7c-94cf-8db797a84ebc";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_lldp_learn";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Use LLDP learned information such as voip vlan";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b4cc791a-5389-4e1f-9f87-e8394b399d64";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_enable_vlan";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable VLAN Support. 0 - NO, 1 - Yes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "16d74bd9-7f44-4780-a202-3cfcbaa6ef5a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_lan_port_vlan";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "256";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default VLAN for phone LAN port.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "530564ac-17aa-4167-b047-bf764250d91a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_pc_port_vlan";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default VLAN for phone PC port.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2b72e19b-2437-45c0-9df5-4fef6ac078c6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_enable_diffserv";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable DiffServ(DSCP) Support. 0 - NO, 1 - Yes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "86081f7e-af03-41b9-a5af-b5593182c9ff";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_qos_rtp_voice";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 2 QoS 802.1p Priority Value for RTP Voice media";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8050cfbd-44d1-46db-b553-2cc0defd5fc2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_qos_rtp_video";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 2 QoS 802.1p Priority Value for RTP Video media";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ddf89377-7303-435c-917a-bdd32579cf36";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_qos_sip";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 2 QoS 802.1p Priority Value for SIP signaling";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b6a89aa6-2e21-489c-8f1f-e819e6ced17b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_dscp_rtp_voice";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "46";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 3 QoS DSCP Value for RTP Voice media";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9a22bd5b-c2b0-4c06-bd19-63ef58837011";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_dscp_rtp_video";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "46";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 3 QoS DSCP Value for RTP Video media";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "94effa7d-8c0f-4cca-b617-9d2d24748aa7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_dscp_sip";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "-1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 3 QoS DSCP Value for SIP signaling (Disabled by default)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "49f2ff3f-0628-44fa-a8d2-82cb38fbaf98";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_video_codec";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "H264";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable video codec on sip lines (Only h264 currently supported)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be8c1341-3cb6-4aa8-bef5-642ff11199e8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_syslog_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable Syslog server";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8281507b-80fa-450a-94b7-6f58a7a9e6e1";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_syslog_server";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0.0.0.0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Syslog Server ip";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "db7595a1-318b-49d8-86a6-8ff4b44e30f5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_syslog_server_port";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "514";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Syslog Server Port number";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "67a916be-35df-44f1-ab12-81756fd1f911";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_default_answer_mode";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "2";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Answer call as audio only or audio with video. 1-Audio, 2-Video";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bbbdf01c-d760-43cf-958d-e47c54dd3997";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_default_dial_mode";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Dial call as audio only or audio with video. 1-Audio, 2-Video Note: If you set this to video, then video is offered in the first invite which can cause your call to hang or not complete if going through a sip trunk provider.";
		$y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9a878f97-31bf-4d1a-93e2-c3b51c962383";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_network_failure_reboot";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "If network fails, automatically reboot. 0 - NO, 1 - Yes";
		$y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2b14337d-8c2b-4f17-8d43-cf0341db6b8c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_network_failure_wait_time";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "300";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Time to wait before automatic reboot in seconds.";
		$y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "71fcfa1c-2921-43ed-aadb-9cd335cba6fb";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_sip_failure_reboot";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "If sip registration fails, automatically reboot. 0 - NO, 1 - Yes";
		$y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "793c48b1-092b-44db-ac37-14339744a985";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_sip_failure_wait_time";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "180";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Time to wait before automatic reboot in seconds.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "37ddabf0-8d7c-494f-b381-5bc4e3048bff";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_enable_auto_upgrade";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable firmware auto upgrade. 0 - NO, 1 - Yes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "5a2a79c3-befb-4b7a-998d-3f0bfc9fcde4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_upgrade_server_1";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://server.yourdomain.com/app/fanvil/resources/firmware";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Auto upgrade firmware server 1.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "de60a8fb-628a-4ee3-a76a-ff3e0a7f045f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_upgrade_server_2";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://server2.yourdomain.com/app/fanvil/resources/firmware";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Auto upgrade firmware server 2.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "09134520-647a-4a86-bffd-d927aff2b33b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_upgrade_interval";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "24";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Check for firmware every X hours.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3ca2b12b-21f1-4a6d-a0eb-8670105c77d9";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_i20s";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "i20S2.1.1.3664T20180809203309.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the i20S firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d07be0b3-a34b-4739-a227-766231e5bb52";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_i23s";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "i23S2.1.1.3664T20180809204215.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the i23S firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6e0d313d-e44a-446f-9274-99e778d87cf5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_i30";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "i302.1.1.3664T20180809203614.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the i30 firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a3cf0c35-4f92-4607-84a6-b06b29d67134";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_i31s";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "i31S2.1.1.3664T20180809203916.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the i31S firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "235ccea6-5ed0-45ff-a03f-d0cbc6ebaf01";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_x2p";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "x2-mono2.8.0.6251T20181017203533.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the X2P firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8912437c-7142-4a85-b4aa-f83c1e50ad30";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_x3";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "x3s2.8.0.6251T20181017202549.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the X3S/G firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "756059c7-b754-4285-be22-0d51c82d62b3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_x4";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "x42.8.0.6251T20181017202853.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the X4/G firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "122ba840-7dee-4c8e-a93c-739681b4b1d4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_x5s";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "x5s-6900-P0.13.3-1.8.0-2698T2018-09-30-15.23.04.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the X5S firmware ROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "32635e1c-dcb8-44e1-a0c4-5209b4f84392";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_firmware_x6";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "x6-6914-P0.13.3-1.8.0-2697T2018-09-30-15.10.00.z";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Filename of the X6 firmware ROM";
		$y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c6842526-ca39-47f1-85af-1c4448b2fbd4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_switch_open_duration";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Time to hold switch in open position in seconds. ";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4b7f56f3-31a9-46dd-b588-35b253024b1f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_switch_mode";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "0 - Monostable, 1 - Bistable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "316ce083-69ba-4932-be02-845d3ed8f585";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_enable_card_reader";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable RFID Card Reader. 0 - NO, 1 - Yes";
		$y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e8480f45-b359-4ad3-9c6f-8d7f471c3057";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_enable_digit_pad";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable numeric digit pad. 0 - NO, 1 - Yes";
		$y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e8480f45-b359-4ad3-9c6f-8d7f471c3057";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_enable_function_key_answer";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Allow function key to answer call made to the door. 0 - NO, 1 - Yes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7226d18c-7d49-449b-be7b-8cfb46c1ddb3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_enable_indoor_open";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Use indoor switch to unlock the door. 0 - NO, 1 - Yes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "83dce10f-6254-490c-af89-a2a004890c47";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_enable_access_table";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default: Enabled. 0 - NO, 1 - Yes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d4ffbf45-5abe-4ef3-9cf7-f222257d5633";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_opening_door_code_remote";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "*";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default: *";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c51013fc-765e-4758-99a9-2738cfe9a7dd";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_opening_door_code_local";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "6789";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default: 6789";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0c5fe247-0361-4c69-a247-d14b5417e53e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_enable_syslog";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable EGS Syslog. 0 - NO, 1 - Yes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1a74a177-49fc-432e-b10e-39c7d0c7ddc4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_log_server";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0.0.0.0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "EGS Syslog Server. Hostname or IP";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3fb2a87b-89b1-4d53-923d-c1478aec4f58";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "fanvil_egs_log_port";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "514";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "EGS Syslog Server Port";
		$y++;

?>
