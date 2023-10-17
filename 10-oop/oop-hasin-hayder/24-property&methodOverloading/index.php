<?php 

// property and method overloading __unset & __isset() magic method

class MotorCycle {
  private $displacement, $capacity, $mileage;
  function __construct($displacement,$capacity,$mileage) {
    $this->displacement = $displacement;
    $this->capacity = $capacity;
    $this->mileage = $mileage;
  }
 
  function __get($pro) {
    return $this->$pro;
  }
  function __set($pro,$val) {
    $this->$pro = $val;
  }
}

$pulsar = new MotorCycle('150cc','16ltr','40kmph');
$pulsar->displacement = "134cc";
echo $pulsar->displacement;

echo PHP_EOL;
echo PHP_EOL;

class Person {
  private $data;
  function __construct($fname,$lname,$age) {
    $this->data = [];
    $this->data['fname'] = $fname;
    $this->data['lname'] = $lname;
    $this->data['age']   = $age;
  }
  function __isset($name) {
    if (!isset($this->data[$name])) {
      echo "$name Not Found\n";
      return false;
    }
    return true;
  }
  function __unset($name) {
    print_r($this->data);
    unset($this->data[$name]);
    print_r($this->data);
  }
  function __get($name) {
    return $this->data[$name];
  }
  function __set($name,$val) {
    $this->data[$name] = $val;
  }
}

$p = new Person('Alamin','Miah',19);
$p->fname = "Al-Amin ";
$p->lname = "Miah ";
echo $p->fname;
echo $p->lname;
//echo $p->age;
echo "\n";
if (isset($p->roll)) {
  echo $p->roll;
}

unset($p->age);