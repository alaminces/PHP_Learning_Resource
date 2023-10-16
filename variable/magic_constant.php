<?php 

// Magic constants are the predefined constants in PHP
// They start with double underscore (__) and ends with double underscore.
// There are nine magic constants in PHP.
/*
	1. __LINE__
	2. __FILE__
	3. __DIR__
	4. __FUNCTION__
	5. __CLASS__
	6. __TRAIT__
	7. __METHOD__
	8. __NAMESPACE__
	9. ClassName::class
*/


// All of the constants are resolved at compile-time instead of run time



/**
 * 1. __LINE__
 *It returns the current line number of the file, where this constant is used.
**/

echo "Current line number is ". __LINE__ ."\n";


/**
 * 2. __FILE__:
 * This magic constant returns the full path of the executed file, where the file is stored. If it is used inside the include, the name of the included file is returned.
*/

echo __FILE__;


/**
 * 3. __DIR__:
 * It returns the full directory path of the executed file. 
**/

//print full path of directory where script will be placed    
echo __DIR__ ."\n";

//below output will equivalent to above one.  
echo dirname(__FILE__) ."\n";


/**
 * 4. __FUNCTION__:
 * This magic constant returns the function name, where this constant is used. It will return blank if it is used outside of any function.

**/

function test() {
  echo "This function name is ". __FUNCTION__ ."\n";
}
test();

// if is used outside any function it will return blank
echo __FUNCTION__ ."\n";



/**
 * 5. __CLASS__:
 * It returns the class name, where this magic constant is used.
 */

class Bike {
  function __construct() {
    echo "This is class name is ". __CLASS__. "\n";
  }
}
// new Bike();

class Vehicle extends Bike {
  function __construct() {
    echo "This class name is ". __CLASS__ ."\n";
  }
}

new Vehicle;


// another example 
class Animal {
  function display() {
    return __CLASS__ ."\n";
  }
}
class Tiger extends Animal {
  function __construct() {
    echo __CLASS__ ."\n";
    echo parent::display();
  }
}

new Tiger();




/**
 * 6. __TRAIT__:
 * This magic constant returns the trait name
*/

trait Deer {
  public function myName() {
    echo __TRAIT__ . "\n";
  }
}

class Beasts {
  use Deer;
}
$beast = new Beasts;
$beast->myName();


/**
 * 7. __METHOD__:
 * It returns the name of the class method where this magic constant is included. The method name is returned the same as it was declared.
**/

class Method{
  function __construct() {
    echo  __METHOD__ . "\n";
  }
  function getInfo() {
    echo __METHOD__ ."\n";
  }
  function getName() {
    echo __METHOD__ . "\n";
  }
}

$method = new Method();
$method->getInfo();
$method->getName();


/**
 * 8. __NAMESPACE__:
 * It returns the current namespace where it is used.
*/

# namespace is declared very fist line
//namespace Project\SubFolder\ThisFolder;
//echo __NAMESPACE__;


/**
 * 9. ClassName::class:
 * This magic constant does not start and end with the double underscore (__). It returns the fully qualified name of the ClassName. ClassName::class is added in PHP 5.5.0. It is useful with namespaced classes.
*/

/*
// namespace is written very beginning at the file
namespace PHP\Classes;
class Database {

}
echo Database::class;

*/

/**
 * Note: 
 * Remember namespace must be the very first statement or after any declare call in the script, otherwise it will generate Fatal error.
 */