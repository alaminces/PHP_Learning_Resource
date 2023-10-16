<?php 
/**
 * __isset() and __unset() parameters 
*/
/*
class MotorCycle {
  private $displacement,$capacity,$mileage;
  function __construct($displacement,$capacity,$mileage) {
    $this->$mileage = $mileage;
    $this->displacement = $displacement;
    $this->capacity = $capacity;
  }
  function getDisplacement() {
    return $this->displacement;
  }
  function setDisplacement($displacement) {
    $this->displacement = $displacement;
  }
}

$pulser = new MotorCycle('150cc','16ltr','40kmph');

echo $pulser->getDisplacement();
*/

/*
class MotorCycle {
  private $displacement,$capacity,$mileage;
  function __construct($displacement,$capacity,$mileage) {
    $this->displacement = $displacement;
    $this->capacity = $capacity;
    $this->mileage = $mileage;
  }

  function __get($name) {
    return $this->$name;
  }
  function __set($name,$value) {
    $this->$name = $value;
  }
}

$pulser = new MotorCycle('150cc','16ltr','40kmph');
echo $pulser->displacement ."\n";
echo $pulser->capacity."\n";
echo $pulser->mileage."\n";
*/
/*
class MotorCycle {
  private $parameters;
  function __construct($displacement,$capacity,$mileage) {
    $this->parameters = [];
    $this->parameters['displacement'] = $displacement;
    $this->parameters['capacity'] = $capacity;
    $this->parameters['mileage'] = $mileage;
  }

  function __isset($name) {
    if (!isset($this->parameters[$name])) {
      echo "$name not found\n";
      return false;
    }
    return true;
  }

  function __unset($name) {
    print_r($this->parameters);
    unset($this->parameters[$name]);
    print_r($this->parameters);
  }

  function __get($name) {
    return $this->$name;
  }
  function __set($name,$value) {
    $this->$name = $value;
  }
}

$pulser = new MotorCycle('130cc','16ltr','40kmph');
echo $pulser->parameters['displacement'] ."\n";


if (isset($pulser->mileage)) {
  echo $pulser->parameters['mileage'];
}

echo PHP_EOL;

if (isset($pulser->tireSize)) {
  echo $pulser->parameters['tireSize'];
}

unset($pulser->capacity);
*/



/**
 * __call() and __callStatic() magic method
*/

class MotorCycles{
  function __call($methodName,$arguments) {
    if ($arguments) {
      $argument = implode(",",$arguments);
      echo "$methodName() is not found. arguments {$argument}\n";
    }else {
      echo "$methodName() is not found\n";
    }
  }

  static function __callStatic($methodName,$arguments){
    if ($arguments) {
      $argument = implode(",",$arguments);
      echo "$methodName() is not found. arguments {$argument}\n";
    }else {
      echo "$methodName() is not found\n";
    }
  }
}

// invoked normal method
$pulser = new MotorCycles();
$pulser->run();
$pulser->driver('driver1','driver2');

// invoked static method
MotorCycles::getColor();
MotorCycles::getMultiColor('red','black');