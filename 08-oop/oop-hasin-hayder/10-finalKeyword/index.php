<?php 

// final keyword is used in abstract class or normal class

abstract class OurClass{
  final function display() {
    echo "Doing something";
  }
}

class MyClass extends OurClass {
  // function display() {
  //   echo "Doing nothing";
  // }
}

$cls = new MyClass();
$cls->display();


