<?php 

/**
 * Another Example of Interface
 * implements IteratorAggregrate interface
 * implemented method of interface is getIterator
*/

class Books implements IteratorAggregate{
  private $books;
  public function __construct() {
    $this->books = [];
  }
  function addBook($book) {
    $this->books[] = $book;
  }
  function getIterator() {
    return new ArrayIterator($this->books);
  }
}

$books = new Books();
$books->addBook('Bangla');
$books->addBook('English');
$books->addBook('Math');
$books->addBook('Science');

foreach ($books as $book) {
  echo $book ."\n";
}

/**
	* Another Example of Interface
**/

class DistrictCollection implements IteratorAggregate{
  private $districts;
  function __construct() {
    $this->districts = array();
  }

  function add($district) {
    array_push($this->districts,$district);
  }
/*
  function getDistricts() {
    return $this->districts;
  }
*/

  function getIterator() {
    return new ArrayIterator($this->districts);
  }

}

$districts = new DistrictCollection();
$districts->add("Rangpur");
$districts->add("Dinajpur");
$districts->add("Kurigram");

/*
$_districts = $districts->getDistricts();
print_r($_districts);
foreach ($_districts as $_district) {
  echo $_district . "\n";
}
*/
foreach ($districts as $district) {
  echo $district . "\n";
}