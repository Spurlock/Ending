Ending
======

<<<<<<< HEAD
=======
<<<<<<< HEAD
ExpressionEngine 2 Plugin for outputting just the end of a string. Like character limit in reverse. You can use it to select a certain number of characters from the end, or tell it to look for a particular substring and have it select everything after that (for example, selecting everything after the "@" in an email address to get the email provider).
=======
>>>>>>> Examples
ExpressionEngine 2 Plugin for outputting just the end of a string. Like character limit in reverse.

Use this plugin to return just the end of a string. There are 2 ways of using the plugin. The first is "limit", which returns the last N letters of the string. For example:
		
{exp:ending limit="3"}robot.jpg{/exp:ending}
	
Will print out "jpg".
		
The second mode is "until". In this mode, the plugin will start at the end of the string, and move backwards until it encounters the character or string it's looking for, then return everything after it:
		
{exp:ending until="@"}alice@yahoo.com{/exp:ending}

Will print out "yahoo.com". If you wish to also include the character or string being searched for, just use "include":
		
{exp:ending until="@" include="yes"}alice@yahoo.com{/exp:ending}
		
This will print out "@yahoo.com".

<<<<<<< HEAD
If you use "until" and "limit", the "until" function will be applied first, and the limit function will then shorten the resulting string from the end.
=======
If you use "until" and "limit", the "until" function will be applied first, and the limit function will then shorten the resulting string from the end.
>>>>>>> Examples
>>>>>>> Examples
