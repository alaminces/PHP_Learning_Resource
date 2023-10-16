<?php 

class DistrictCollection implements IteratorAggregate,Countable {
  private $districts;
  
  function __construct() {
    $this->districts = array();
  }
  
  function add($district) {
    array_push($this->districts,$district);
  }

  function getIterator() {
    return new ArrayIterator($this->districts);
  }

  function count() {
    return count($this->districts);
  }

}

$districts = new DistrictCollection();
$districts->add("Kurigram");
$districts->add('Lalmonirhat');
$districts->add("Nilfamari");


echo count($districts);




/**
 * Another Example of Interface
 * implements Countable interface
 * implemented method of interface is count()
*/

class Ostad implements IteratorAggregate,Countable{
  private $learners = [];
  function __construct() {
    $this->learners[] = "Mahmud";
    $this->learners[] = "Ariful";
    $this->learners[] = "Alamin";
    $this->learners[] = "Mizanur";
    $this->learners[] = "Rakibul";
    $this->learners[] = "Ahsan";
  } 
  // Here is used type hint
  function count():int {
    return count($this->learners);
  }
  // Here is used type hint
  function getIterator():ArrayIterator {
    return new ArrayIterator($this->learners);
  }
}

$ostad = new Ostad();
$totalLearners = count($ostad);
print "Total Leaners {$totalLearners}\n";

foreach($ostad as $learner) {
  echo $learner."\n";
}