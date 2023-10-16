<?php 

/*
	Comments in PHP
A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

Comments can be used to:

Let others understand your code
Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
*/

/*
	** Syntax for single-line comments:
*/ 

// This is a single-line comment
# This is also a single-line comment


/*
	** Syntax for multiple-line comments:
*/ 


<?php
	/*
		This is a multiple-lines comment block
		that spans over multiple
		lines
	*/
?>


/*
	* Using comments to leave out parts of the code:
*/

<?php
	// You can also use comments to leave out parts of a code line
	$x = 5 /* + 15 */ + 5;
	echo $x;
?>