<?php
	//application details
		$apps[$x]['name'] = "Poly";
		$apps[$x]['uuid'] = "6af4ac15-8091-4974-a04a-322637cf8d65";
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
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "77bd00d7-9d8f-4f55-9a43-f3e0ca0ff8af";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_obi_dst_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "True";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Daylight Savings True=enabled False=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3c021f6e-905d-4fc8-a353-983f4363837d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_obi_timezone";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "See provision profile for codes.";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "799038b2-77ca-4312-82fc-a0ccd2ed4402";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_obi_logo_450";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Url of Logo file for VVX 450";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0e5fe399-3fa6-4688-8ab1-3254436e0949";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_1_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt1,dt2,dt3,dt4,dt5,dt6,dt7,dt8,dt9,dt10";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bf91ea3f-14a7-4831-ac4a-77273ea159f4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_2_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt2";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "21b86cd4-2134-4371-91d9-f80cb32bb252";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_3_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ac8e1f9e-ff1d-42d8-b329-a5ac57bb5fd9";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_4_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt4";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;		
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "296387f6-b78c-49d3-9ec5-28d6b9a4e1bf";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_5_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt5";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e5c527aa-1d70-4b16-822e-ab1b433e8279";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_6_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt6";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1c1ad738-cd06-45bf-b0a5-6dedbf4c8794";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_7_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt7";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e4efda05-9d39-476f-bade-3ec0172d89e2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_sp_8_inbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dt8";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Route inbound calls to handsets. dt1 rings handset 1, dt2 rings handset 2 ...";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "fde0163a-cf4a-4923-9413-857d2b8a928b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_1_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 1 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4c3fea22-2705-42dc-af98-826c7b77486d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_2_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 2 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3c434636-7ad6-4a4b-ad70-c6c551753f90";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_3_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 3 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "86f6b141-a424-4cdf-bcaf-1650e1ca4d81";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_4_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 4 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ce635065-ae90-4d42-8d19-b6d51c134a24";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_5_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 5 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "44bd38b0-0127-4155-bcaf-3232838f581c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_6_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 6 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d000d043-2b01-445e-b0e5-8e568f43e9ca";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_7_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 7 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "127a33f3-80ca-4f8f-a760-9dcb384e7fee";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_8_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 8 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "09642b04-87e6-41cc-a264-738307a9778b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_9_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 9 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7080839e-e8a6-43e4-a5b0-96b0ef6763d9";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_10_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(x.(Msp1)|*x.(Msp1)|**x.(Msp1))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 10 dialplan rules";
		$y++;
 		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "60e2a5c3-8f8c-439e-a8cc-648c83929da0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_1_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 1 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "018d00a2-e286-4ac8-9289-53e6af67d8bd";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_2_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 2 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "da86638c-d0eb-484b-90fa-8acf0a8a95d8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_3_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 3 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "306bcab4-ad9d-424f-bfb4-d480183547ae";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_4_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 4 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "19904d82-a692-4096-b2c0-0bd3d3042aa9";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_5_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 5 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0c304626-320e-4f73-9b10-23d6b3d0b32a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_6_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 6 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3ba4b387-7d9e-4741-bf4c-bc03aea7c54b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_7_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 7 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "576f3670-0a89-4152-a403-f4bad3baf535";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_8_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 8 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "17895a5e-bc73-45bb-810c-f33d77ccb6e9";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_9_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 9 outbound dialplan rules";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "54b38f77-d53f-46ba-a468-77e912f718b7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "poly_handset_10_outbound_call_route";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "{(x.):SP1},{(*x.(Msp1)):SP1},{(**x.(Msp1)):SP1}";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Handset 10 outbound dialplan rules";
		$y++;

?>
