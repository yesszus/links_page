<?php

if (!defined('e107_INIT')) { exit; }

include_lan(e_PLUGIN.'links_page/languages/'.e_LANGUAGE.'_help.php');

if(!e_QUERY){
	$text = LAN_ADMIN_HELP_1;
}else{
	if(e_QUERY){
		$qs = explode("&amp;", e_QUERY);
	}

	//##### LINK --------------------------------------------------
		//manage Link items
		if($qs[0] == "mode=main" && $qs[1] == "action=list"  ){
			$text = LAN_ADMIN_HELP_8;
		//edit
		}elseif($qs[0] == "mode=main" && $qs[1] == "action=create"  ){
			$text = LAN_ADMIN_HELP_9;
		//view links in cat
		}elseif($qs[0] == "mode=main" && $qs[1] == "view" ){
			$text = LAN_ADMIN_HELP_8;
		//create
		}elseif($qs[0] == "mode=main" && $qs[1] == "action=edit" ){
			$text = LAN_ADMIN_HELP_4;
		//create/post submitted
		}elseif($qs[0] == "mode=main" && $qs[1] == "sn"  ){
			$text = LAN_ADMIN_HELP_10;

	//##### SUBMITTED --------------------------------------------------
		}elseif($qs[0] == "sn" && !isset($qs[1]) ){
			$text = LAN_ADMIN_HELP_5;

	//##### OPTION --------------------------------------------------
		}elseif($qs[0] == "mode=main" &&   $qs[1] == "action=prefs"  ){
			$text = LAN_ADMIN_HELP_6;

	//##### CATEGORY --------------------------------------------------
		}elseif($qs[0] == "mode=cat" && $qs[1] == "action=create" ){
			$text = LAN_ADMIN_HELP_2;
		}elseif($qs[0] == "mode=cat"  && $qs[1] == "action=list"  ){
			$text = LAN_ADMIN_HELP_1.LAN_ADMIN_HELP_7;
		}
}
$ns -> tablerender(LAN_ADMIN_HELP_0, $text);

?>