<?php
// static method and static propertise in php
// static property or method can work in non static method
// non static method or property cann't work in static method

class MathCalculate{
  static $number;
  static $name = "Alamin\n";
  static function fibonacci() {
    echo "I am fibonacci series\n";
  }

  function myNumber() {
    self::$number = 100;
  }

  function factorial() {
    echo "I am factorial series\n";
    //echo self::$name;
    //$this->myName();
    self::myName();
  }
  static function myName() {
    //echo $this->name; // wrong!
    //echo static::$name;
    echo self::$name;
    //echo MathCalculate::$name;
  }
}

$m = new MathCalculate();
//$m->fibonacci();
$m->factorial();
//MathCalculate::fibonacci();
//echo MathCalculate::$name;
//MathCalculate::myName();
$m->myNumber();
echo MathCalculate::$number;
