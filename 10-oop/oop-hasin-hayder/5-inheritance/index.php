<?php 

class School{
  protected $name;
  public function __construct($name) {
    $this->name = $name;
  }
  public function adarsha() {
    echo "Fulbari Adarsha High School\n";
  }
  protected function josimia() {
    echo "Fulbari Josimia High School\n";
  }
}

class Primary extends School{
  public function aPrimary() {
    echo "Adarsha Primary School\n";
  }
  public function jPrimary() {
    echo "Jasimia Primary School\n";
  }
}

class College extends Primary {
  public function degree() {
    echo "Fulbari Degree Collage\n";
  }
  public function mohila() {
    echo "Fulbari Mohila {$this->name}\n";
  }
  public function jasimia() {
    $this->josimia();
  }
}

$clg = new College('College');
$clg->adarsha();
$clg->jasimia();
$clg->aPrimary();
$clg->jPrimary();
$clg->degree();