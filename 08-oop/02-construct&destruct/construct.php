<?php 
/**
 * construct magic Build in method in oop
 * It executes automatically when the class is instanctiated
 */

# basic construct magic method 


class Construct {
  function __construct($name) {
    echo "I'm {$name} magic method\n";
  }
}

$cons = new Construct('construct');

# construct method with type hinting

class Person {
  public string $name;
  public int $age;
  public float $gpa;
  public null $bio;

  function __construct(?string $name,?int $age,float $gpa,null $bio=null) {
    $this->name = $name;
    $this->age  = $age;
    $this->gpa  = $gpa;
    $this->bio  = $bio;

    # print in construct method
    echo $this->name . "\n";
    echo $this->age . "\n";
    echo $this->gpa . "\n";
    echo $this->bio . "\n";
  }
  
}

new Person('Alamin','21',4.00,null);


# construct method with properties 
class Point {
  function __construct(public int $x, public int $y=0) {
    $this->x = $x;
    $this->y = $y;
  }
  function printPoint() {
    echo "Point of x : ". $this->x . "\n";
    echo "Point of y : ".$this->y . "\n";
  }
}

// pass both paremters
$point = new Point(5,4); // 5 4
$point->printPoint();

// pass only required parameters
$point2 = new Point(6); // 6 0
$point2->printPoint();

// with named parameters (as of php 8.0)
$point3 = new Point(y:10,x:5); 
$point3->printPoint();


/**
 * Inherited class with construct 
*/

class User {
  public ?string $username;
  public ?int $id;
  function __construct(?string $username,?int $id) {
    $this->username = $username;
    $this->id = $id;
  }
  function displayInfo() {
    echo "Username : ". $this->username . "\n";
    echo "Id : " . $this->id . "\n";
  }
}

class Admin extends User {
  function __construct(string $username, int $id, public int $role) {
    parent::__construct($username,$id);
  }
}

$user  = new User('user',101);
$admin = new Admin("admin",501,1);

echo "User Inforation : \n";
$user->displayInfo();
echo "Admin Inforation : \n";
$admin->displayInfo();