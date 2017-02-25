<?php

if (!defined('e107_INIT')) { exit; }

class links_page_notify extends notify // plugin-folder + '_notify' 
{		
	function config()
	{
		
		$config = array();
	
		$config[] = array(
			'name'			=> NT_LAN_LP_2, //  "Message posted"
			'function'		=> "linksub",
			'category'		=> ''
		);	
		
		return $config;
	}
	
	function linksub($data) 
	{
	
 
		foreach ($data as $key => $value)
		{
			$message .= $key.': '.$value.'<br />';
		}
    $this->send('linksub', NT_LAN_LP_3, $message);
	}
	
}
?>