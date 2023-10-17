<?php 

// abstract class and abstract method
// if method is abstract then class must be abstract
// otherwise class is abstract, method is not mendetori
// abstract class cann't instantiate 
// only implements abstract class

abstract class Person{
  abstract public function fname();
  abstract public function lname();
  abstract public function age();
}

class MyName extends Person{
  public $fname,$lname,$age;
  public function __construct($fname,$lname,$age) {
    $this->fname = $fname;
    $this->lname = $lname;
    $this->age   = $age;
  }
  public function fname() {
    return $this->fname;
  }
  public function lname() {
    return $this->lname;
  }
  public function age(){
    return $this->age;
  }

  public function fullName() {
    echo "{$this->fname} {$this->lname} is {$this->age} years old.\n";
  }
}

$myn = new MyName('Alamin',"Miah",19);
$myn->fullName();





echo PHP_EOL;

abstract class Shape{
  public abstract function getArea();
  public abstract function getPerimiter();
}

class Rectangle extends Shape{
  public $base, $height;
  public function __construct($base,$height) {
    $this->base = $base;
    $this->height = $height;
  }
  public function setBase($base) {
    $this->base = $base;
  }
  public function setHight($height) {
    $this->height = $height;
  }

  public function getArea(){
    return $this->base*$this->height;
  }
  public function getPerimiter() {}
}

$rect = new Rectangle(10,5);
$rect->setBase(30);
echo $rect->getArea();


/**
 * Abstract Class & Abstract method
 * if method is abstract then class must be also abstract
 * abstract class can't be initialized
 * abstract class will be only implements
 */
