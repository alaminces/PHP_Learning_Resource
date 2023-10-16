<?php 

/*
	** PHP constants can be defined by 2 ways:
	1. Using define() function
	2. Using const keyword
	
	** Conventionally, PHP constants should be defined in uppercase letters.
	** Note: Unlike variables, constants are automatically global throughout the script.
	
	>> define()
	** Use the define() function to create a constant
	** It defines constant at run time. 
	
	>> const keyword 
	** PHP introduced a keyword const to create a constant. 
	** The const keyword defines constants at compile time. 
	** It is a language construct, not a function.
*/

# with define() function

define('HOST','localhost');
define('DATABASE',['localhost','root','123','dbname']);

echo HOST;
print_r(DATABASE);

# with const keyword 

const MESSAGE = "You are good boy\n";
echo MESSAGE;

# constant() function 

const PI = "3.1423";
echo constant('PI') ."\n";

define('ID',150);
echo constant('ID') ."\n";


#### constant vs variable ( javatpoint )