Ending
======

ExpressionEngine 2 Plugin for outputting just the end of a string. Like character limit in reverse.

Use this plugin to return just the end of a string. There are 2 ways of using the plugin. The first is "limit", which returns the last N letters of the string. For example:
		
{exp:ending limit="3"}robot.jpg{/exp:ending}
	
Will print out "jpg".
		
The second mode is "until". In this mode, the plugin will start at the end of the string, and move backwards until it encounters the character or string it's looking for, then return everything after it:
		
{exp:ending until="@"}alice@yahoo.com{/exp:ending}

Will print out "yahoo.com". If you wish to also include the character or string being searched for, just use "include":
		
{exp:ending until="@" include="yes"}alice@yahoo.com{/exp:ending}
		
This will print out "@yahoo.com".

If you use "until" and "limit", the "until" function will be applied first, and the limit function will then shorten the resulting string from the end.