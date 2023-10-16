<?php 

class Color {
  public $color;
  function __construct($color) {
    $this->color = $color;
  }

  function __toString() {
    return "The color is {$this->color}";
  }

}

$c = new Color('red');

echo $c;


/**
 * PHP Magic Method
 * __toString() to print an object as a string 
 */

class Technologies {
  public $name1 = "Facebook";
  public $name2 = "Youtube";
  public $name3 = "LinkedIn";
  public $name4 = "Google";

  public function __toString():string {
    return "{$this->name1} {$this->name2} {$this->name3} {$this->name4}";
  }
}

$tech = new Technologies();
echo $tech;