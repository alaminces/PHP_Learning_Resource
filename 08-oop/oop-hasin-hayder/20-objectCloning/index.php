<?php 
// object cloning in php oop


class Color {
  public $color;
  function __construct($color) {
    $this->color = $color;
  }
  function setColor($color) {
    $this->color = $color;
  }
}

class FavColor{
  public $data;
  public $color;
  function __construct($data,$color) {
    $this->data = $data;
    $this->color = new Color($color);
  }
  function setData($data) {
    $this->data = $data;
  }
  function updateColor($color) {
    $this->color->setColor($color);
  }
  function __clone() {
    $this->color = clone $this->color;
  }
}

$fc1 = new FavColor("Some Data","Red");
print_r($fc1);
$fc2 = clone $fc1;
print_r($fc2);
$fc2->updateColor('Green');
print_r($fc1);
print_r($fc2);


/**
 * for understanding exmaple
**/ 

/*
class Color {
  public $color;
  function __construct($color) {
    $this->color = $color;
  }
  function setColor($color) {
    $this->color = $color;
  }
}

class FavColor {
  public $data;
  public $color;
  function __construct($data,$color) {
    $this->data = $data;
    $this->color = new Color($color);
  }
  function updateColor($color) {
    $this->color->setColor($color);
  }

  function getColor() {
    return $this->color->color . PHP_EOL;
  }

  function __clone() {
    $this->color = clone $this->color;
  }
  
}

$fc = new FavColor("Some data",'red');
$fc->updateColor('blue');
$fc2 = clone $fc;
$fc2->updateColor('green');

echo $fc->getColor();
echo $fc2->getColor();

// print_r($fc);
// print_r($fc2);



