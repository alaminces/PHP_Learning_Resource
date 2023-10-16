<?php 

// php __construct method

class Human {
  private $name;
  private $age;
  function __construct($personName,$personAge=0) {
    echo "I am construct method\n";
    $this->name = $personName;
    $this->age  = $personAge;
    echo $this->name."\n";     
    echo $this->age."\n";
    
    $this->display();
  }

  function display() {
    echo "I am $this->name and I am $this->age years old\n";
    
  }
}

$h = new Human("Hasan",20);


class Person {
  public $age;
  public function __construct($myAge = 0) {
    $this->age = $myAge;
    $this->myAge();
  }
  function myAge() {
    if ($this->age) {
      echo $this->age;
    }else {
      echo "I don't know how old I am\n";
    }
  }
}

$p = new Person();