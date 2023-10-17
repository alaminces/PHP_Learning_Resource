<?php 

/**
 * PHP Magic Method these are:
 * __get( take a parameter as a property )
 * __set( take two parameters property & value)
 * __get() is used to accesss all visibility properties outside of class
 * __set() is used to set all properties value
**/

class Account {
  private   $balance;
  public    $accountName;
  private   $cashIn;
  private   $cashOut;
  protected $recharge;

  public function __set($name,$value) {
    $this->$name = $value;
  }
  public function __get($name) {
    return $this->$name;
  }
}

$account = new Account();
$account->balance = 1000;
$account->accountName = "Bikash";
$account->cashIn = 5000;
$account->cashOut = 2000;
$account->recharge = 100;


echo $account->balance ."\n";
echo $account->accountName ."\n";
echo $account->cashIn ."\n";
echo $account->cashOut ."\n";
echo $account->recharge ."\n";


class Nagad extends Account {
  public function myNagad() {
    $details = <<<EOD
    Account is {$this->accountName}
    Main balance {$this->balance}
    Cash In {$this->cashIn}
    Cash Out {$this->cashOut}
    Recharge {$this->recharge}
    EOD;
    return $details;
  }
}
$nagad = new Nagad();
$nagad->accountName = "Nagad";
$nagad->recharge = 50;
$nagad->balance = 500;
$nagad->cashIn = 4000;
$nagad->cashOut = 1500;

echo $nagad->accountName ."\n";
echo $nagad->recharge . "\n";
echo $nagad->myNagad();


/**
	* Another example of __get() and __set()
**/


class Student {
  private $name;
  private $age;
  private $roll;
  public function __construct($name='',$age='',$roll='') {
    $this->name = $name;
    $this->age  = $age;
    $this->roll = $roll;
  }

  public function __get($pro) {
    return $this->$pro;
  }

  public function __set($pro,$value) {
    $this->$pro = $value;
  }
/*
  function getName() {
    return $this->name;
  }
  function setName($name) {
    $this->name = $name;
  }

  function getAge() {
    return $this->age;
  }
  function setAge($age) {
    $this->age = $age;
  }

  function getRoll() {
    return $this->roll;
  }
  function setRoll($roll) {
    $this->roll = $roll;
  }
*/
}
/*
$p = new Student();
$p->setName('Alamin');
$p->setAge(19);
$p->setRoll(404848);
echo $p->getName();
echo $p->getAge();
echo $p->getRoll();
*/

$s = new Student("Alamin\n","20\n","404848");
$s->name = "Masum\n";
echo $s->name;
echo $s->age;
echo $s->roll;
