<?php 

class Humans{
  public $name;
  function sayHi() {
    echo "{$this->name} is social animal\n";
  }
}

class Cat{
   function sayCat() {
    echo "Cat is a pet animal\n";
  }
}

class Cow{
  function myCow() {
    $this->sayOx();
    $this->sayCow();
  }

  function sayOx() {
    echo "Ox is strong domestic animal\n";
  }

  function sayCow() {
    echo "Cow is domestic animal\n";
  }
}

$h = new Humans();
$h->name = "Manus";
$h->sayHi();
echo $h->name."\n";

$cat = new Cat();
$cat->sayCat();

$cow = new Cow();
// $cow->sayCow();
// $cow->sayOx();
$cow->myCow();