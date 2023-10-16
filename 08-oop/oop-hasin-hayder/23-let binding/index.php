<?php 

// Earli binding and let binding

class Planet {
  static function echoName() {
    //echo self::getName(); // Planet 
    echo static::getName(); // Earth 
  }

  static function getName() {
    return "Planet";
  }
}

class Earth extends Planet {
  static function getName() {
    return "Earth";
  }
}

Earth::echoName();

