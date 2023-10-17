<?php 

// about of interface in php
# in interface class method body not allowed
# interface class may not include properties
# interfac method must be public

interface BaseAnimal{
  function isAlive();
  function canEat($param1,$param2);
  function breed();
}

class Animal implements BaseAnimal {
  function isAlive() {}
  function canEat($param1,$param2){}
  function breed(){}
}

interface CowAnimal extends BaseAnimal {
  function cow();
}

class Humans implements CowAnimal {
  function isAlive() {}
  function canEat($param1,$param2){}
  function breed(){}
  function cow() {}
}

$h = new Humans();

echo $h instanceof CowAnimal; //1
echo $h instanceof Animal; //0
echo $h instanceof BaseAnimal; //1




