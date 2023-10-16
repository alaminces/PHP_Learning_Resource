<?php 

/**
 * OOP Basic
 * OOP -> Object Oriented Programming Language
 * To crate class instructions below:
 * 1. Create class with class keyword
 * 2. Create properties inside the class
 * 2. Create methods inside the class
 * 3. Access class properties and methods from outside
 * 4. Create multiple classes
 */

class BloodDoner {
  public $name;
  public $age;
  public $bloodGroup;

  function getName() {
    return $this->name;
  }
  function getAge() {
    return $this->age;
  }
  function getBloodGroup() {
    return $this->bloodGroup;
  }
  # access all properties inside the class
  function displayBloodDoners() {
    echo "Blood Doner Name: ". $this->getName() ."\n";
    echo "Blood Doner Age: ". $this->getAge() ."\n";
    echo "Blood Doner Group: ". $this->getBloodGroup() ."\n";
  }
}

// object handler = object with new keyword (with/without parentheses)
$bloodDoner = new BloodDoner();
# set property values of class from outside
$bloodDoner->name       = "Ashraful";
$bloodDoner->age        = 25;
$bloodDoner->bloodGroup = "A+";
# display property values by methods outside class
echo "Blood Doner Name: ". $bloodDoner->getName() ."\n";
echo "Blood Doner Age: ". $bloodDoner->getAge() ."\n";
echo "Blood Doner Group: ". $bloodDoner->getBloodGroup() ."\n";

echo "\n\n";

# print all properties from inside the class
$bloodDoner->displayBloodDoners();

echo "\n\n";
/**
 * Calculate class
*/

class Calculate{
  public $firstNumber;
  public $secondNumber;

  function addNumber($fnum=0,$snum=0) {
    $this->firstNumber = $fnum;
    $this->secondNumber = $snum;
  }

  function addition() {
    return $this->firstNumber + $this->secondNumber;
  }

  function subtraction() {
    return $this->firstNumber - $this->secondNumber;
  }

  function multiplication() {
    return $this->firstNumber * $this->secondNumber;
  }
  
  function division() {
    return $this->firstNumber / $this->secondNumber;
  }

  function displayCalculation() {
    echo "Addition : " . $this->addition() . "\n";
    echo "Subtraction : " . $this->subtraction() . "\n";
    echo "Multiplication : " . $this->multiplication() . "\n";
    echo "Division : " . $this->division() . "\n";
  }
}

$cal = new Calculate();
$cal->addNumber(20,10);
$cal->displayCalculation();

echo "\n\n";


# Another example of class (print self class name)

class A {
  function info() {
    if (isset($this)) {
      echo "Class Name: ". get_class($this);
    }
  }
}

$a = new A;
$a->info();

#
## A class is used in B class
#

class B {
  function test() {
    $a = new A;
    $a->info();
  }
}

$b = new B;
$b->test();