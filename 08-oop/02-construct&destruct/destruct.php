<?php 

/**
 * destruct magic method in oop
 * __destruct() is a void
 */

class Destruct {
  // this is construct method
  function __construct() {
    # display class name with method name
    print __METHOD__;
    echo "\n";
    # display only method name
    print __FUNCTION__;
    echo PHP_EOL;
  }

  // this is destruct method
  function __destruct() {
    echo __METHOD__ . "\n"; // class with method
    echo __FUNCTION__."\n"; // single method
    echo "Destroying\n";
  }
}

new Destruct;