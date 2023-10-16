<?php 

class A {
  static function sayHi() {
    echo "Hello from ".__CLASS__."\n";
  }
}

class B extends A {
  static function sayHi() {
    parent::sayHi();
    echo "Hello from ".__CLASS__."\n";
  }
}

B::sayHi();

