<?php 
/**
  * PHP Data Types
  * PHP data types are used to hold different types of data or values. PHP supports 8 primitive data types that can be categorized further in 3 types:
   1. Scalar Types (predefined)
   2. Compound Types (user-defined)
   3. Special Types
 */

 /**
  * PHP Data Types: Scalar Types
  * It holds only single value. There are 4 scalar data types in PHP.
  1. boolen 
  2. integer 
  3. float
  4. string
*/

/**
 * PHP Data Types: Compound Types
 * It can hold multiple values. 
 * There are 2 compound data types in PHP.
  1. array
  2. object
*/


/**
 * PHP Data Types: Special Types
 * There are 2 special data types in PHP.
  1. resource
  2. NULL
 */
 
 
 /**
 * PHP Boolean
  * Booleans are the simplest data type works like switch. It holds only two values: TRUE (1) or FALSE (0). It is often used with conditional statements. If the condition is correct, it returns TRUE otherwise FALSE.
 */

 // example 
 if (true) {
  echo "Condition is True\n";
 }else {
  echo "Condition is False\n";
 }

/**
 * PHP Integer
 * Integer means numeric data with a negative or positive sign.  * It holds only whole numbers, i.e., numbers without fractional part or decimal points.
 
*/

/**
 * Rules for integer:
 * An integer can be either positive or negative.
 * An integer must not contain decimal point. 
 * Integer can be decimal (base 10), octal (base 8), or hexadecimal (base 16).
 * The range of an integer must be lie between 2,147,483,648 and 2,147,483,647 i.e., -2^31 to 2^31.
*/
// example 
$dec = 23;
$oct = 023;
$hex = 0x234;

echo "Decimal Number {$dec}\n";
echo "Octal Number {$oct}\n";
echo "Hexadecimal Number {$hex}\n";

// spaceship operator
echo 1 <=> 1; // 0
echo 1 <=> 0; // 1
echo 0 <=> 1; // -1

