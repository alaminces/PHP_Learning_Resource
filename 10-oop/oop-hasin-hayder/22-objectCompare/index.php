<?php 

class Planet {
  public $name;
  function __construct($name) {
    $this->name = $name;
  }
}

$p1 = new Planet('Alamin');
$p2 = new Planet('Alamin');

if ($p1 == $p2) {
  echo "Similar Planets\n";
}else {
  echo "Not Similar\n";
}

if ($p1 === $p2) {
  echo "Similar Planets\n";
}else {
  echo "Not Similar\n";
}

$p1 = new Planet('Masum');
$p2 = new Planet('Sumon');
if ($p1 == $p2) {
  echo "Similar Planet\n";
}else {
  echo "Not Similar\n";
}

$e1 = new Planet('Alamin');
$e2 = new Planet('Alamin');
$e1 = $e2;

if ($e1 === $e2) {
  echo "Similar Planet\n";
}else {
  echo "Not Similar\n";
}

echo gettype($p1);