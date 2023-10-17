<?php
/**
 * Property Visibility 
*/
class Visibility {
  public $public = "Public";
  protected $protected = "Protected";
  private $private = "Private";

  function printHello() {
    echo $this->public;
    echo $this->protected;
    echo $this->private;
  }
}

$obj = new Visibility();
$obj->printHello(); // Shows public, protected and private
echo $obj->public; // works
/*
echo $obj->protected; // fatal error
echo $obj->private; // fatal error 
*/


# create a new sub class by extending parent class 

class ChildVisibility extends Visibility {
  // We can redeclare the public and protected properties, but not private
  public $public = "Public Child";
  protected $protected = "Protected Child";
  //private $private = "Private Child";

  function printHello() {
    echo $this->public;
    echo $this->protected;
    //echo $this->private; // error undefined
  }
}

$obj2 = new ChildVisibility();
$obj2->printHello();


/**
 * Method Visibility
*/

/**
 * Define MyClass
 */
class MyClass
{
    // Declare a public constructor
    public function __construct() { }

    // Declare a public method
    public function MyPublic() { }

    // Declare a protected method
    protected function MyProtected() { }

    // Declare a private method
    private function MyPrivate() { }

    // This is public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
/*
$myclass->MyPublic(); // Works
$myclass->MyProtected(); // Fatal Error
$myclass->MyPrivate(); // Fatal Error
$myclass->Foo(); // Public, Protected and Private work
*/

echo "\n\n";

/**
 * Constant Visibility 
 */

 class ConstantVaisibility {
    // declare a public constant 
    public const MY_PUBLIC = "Public";
    // delcare a protected constant 
    protected const MY_PROTECTED = "Protected";
    // declare a private constant 
    private const MY_PRIVATE = "Private";

    // declare a public function 
    function printHello() {
      echo self::MY_PUBLIC;
      echo self::MY_PROTECTED;
      echo self::MY_PRIVATE;
    }
 }

 (new ConstantVaisibility)->printHello();
 
//  echo ConstantVaisibility::MY_PRIVATE; // fatal error 
//  echo ConstantVaisibility::MY_PROTECTED; // fatal error 
 
 echo ConstantVaisibility::MY_PUBLIC; // works 
 
 echo "\n\n";

/**
  * Visibility from other objects 
*/


class A {
  public $public = "Public ". __CLASS__;
  protected $protected = "Protected ". __CLASS__;
  private $private = "Private ". __CLASS__;
}

class B {
  public $public = "Public ". __CLASS__;
  protected $protected = "Protected ". __CLASS__;
  private $private = "Private ". __CLASS__;
}

class AB {
  public $a;
  public $b;
  function __construct(A $a, B $b) {
    $this->a = $a;
    $this->b = $b;
  }

  function displayAB() {
    echo "List of A: \n";
    echo $this->a->public . "\n";
    //echo $this->a->protected; // cannot access protected property
    //echo $this->a->private; // cannot access private property

    echo "List of B: \n";
    echo $this->b->public . "\n";
    //echo $this->b->protected; // cannot access protected
    //echo $this->b->private;  // cannot access private 
  }
}


$ab = new AB(new A,new B);
$ab->displayAB();