<?php

$plugin_info = array(
  'pi_name' => 'Ending',
  'pi_version' =>'1.0',
  'pi_author' =>'Mark Spurlock',
  'pi_author_url' => 'http://www.squidrock.com/',
  'pi_description' => 'A character limiter for giving you just the LAST part of a string',
  'pi_usage' => Ending::usage()
  );

class Ending
{

	var $return_data = "";
	
	function ending()
	{
		$this->EE =& get_instance();
		$limit = $this->EE->TMPL->fetch_param('limit');
		$until = $this->EE->TMPL->fetch_param('until');
		$include = $this->EE->TMPL->fetch_param('include');
		$matchcase = $this->EE->TMPL->fetch_param('matchcase');
	
		$str = $this->EE->TMPL->tagdata;
		
		if($until)
		{
			if($matchcase=="yes")
				$pos = strripos($str,$until);
			else
				$pos = strrpos($str,$until);
				
			if($include!="yes") 
				$pos+=strlen($until);
				
			$str = substr($str,$pos);
		}
		if($limit)
		{
			$l = strlen($str);
			$str = substr($str, $l - $limit);
		}
		
		$this->return_data = $str;
	}
	function usage()
	{
		ob_start(); 
	?>
		Use this plugin to return just the end of a string. There are 2 ways of using the plugin. The first is "limit", which returns the last N letters of the string. For example:
		
		{exp:ending limit="3"}robot.jpg{/exp:ending}
		
		Will print out "jpg".
		
		The second mode is "until". In this mode, the plugin will start at the end of the string, and move backwards until it encounters the character or string it's looking for, then return everything after it:
		
		{exp:ending until="@"}alice@yahoo.com{/exp:ending}
		
		Will print out "yahoo.com". If you wish to also include the character or string being searched for, just use "include":
		
		{exp:ending until="@" include="yes"}alice@yahoo.com{/exp:ending}
		
		This will print out "@yahoo.com".
		
		If you use "until" and "limit", the "until" function will be applied first, and the limit function will then shorten the resulting string from the end.
	
	<?php
	$buffer = ob_get_contents();
		
	ob_end_clean(); 
	
	return $buffer;
	}
}

?>