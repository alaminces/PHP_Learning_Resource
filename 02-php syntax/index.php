<?php 
/*
	Basic PHP Syntax
	A PHP script can be placed anywhere in the document.
	A PHP script starts with <?php and ends with ?>:
*/


<?php
	// PHP code goes here
?>

<?php
	echo "Hello World!";
?>



/**********************************************************************
	# PHP Case Sensitivity
	* In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
*/

<?php
	ECHO "Hello World!<br>";
	echo "Hello World!<br>";
	EcHo "Hello World!<br>";
?>

/*
	** Note: However; all variable names are case-sensitive!
*/

<?php
	$color = "red";
	echo "My car is " . $color . "<br>";
	echo "My house is " . $COLOR . "<br>";
	echo "My boat is " . $coLOR . "<br>";
?>


/*
	** Note: PHP statements ends with semicolon (;). 
*/