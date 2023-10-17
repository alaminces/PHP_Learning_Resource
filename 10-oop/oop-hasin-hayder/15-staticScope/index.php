<?php 
// private property or function doesnot work in static function but private pro and func will work normal function
// and also private static pro and func will work in static or normal func...

class A {
  private $name = "Alamin";
  private static $roll = 404848;
  private static function myInfo() {
    echo "Alamin Miah\n";
  }

  static function show() {
    //$this->name; // not work
    //echo self::$roll; // work
    //$this->myInfo(); // not work
    self::myInfo(); // work
  }

  static function fullName() {
    echo "Alamin Islam is 20 years old\n";
  }


}


$a = new A();
A::show();


class B extends A {
  static function display() {
    //parent::myInfo(); // not work
    //self::fullName(); // work
    //parent::fullName(); // work
    static::fullName(); // work
  }
}

B::display();