<?php 

class ParentClass{
  public function __construct() {
    $this->sayHi();
    $this->sayHi2();
  }
  public function sayHi() {
    echo "Hi\n";
  }
  public function sayHi2() {
    echo "Hi! Bangladesh\n";
  }
}

class ChildClass extends ParentClass {
  public function sayHi() {
    parent::sayHi();
    echo "Hello\n";
  }
  
  public function sayHi2() {
    echo "Hi! America\n";
    parent::sayHi2();
  }
}

$cc = new ChildClass();
