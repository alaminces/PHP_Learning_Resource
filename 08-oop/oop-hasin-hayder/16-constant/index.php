<?php 
// constant in php oop

define('CITY',"Phulbari\n");
echo CITY;
const TOWN = "kurigram\n";
echo TOWN;


class Live {
  const DIS = "Kurigram\n";
  static function stay() {
    echo self::DIS;
  }
  function stay2() {
    echo $this::DIS;
    echo Live::DIS;
  }
}

$l = new Live();
echo Live::DIS;
echo $l::DIS;
Live::stay();
$l->stay2();



class Database {
  const DB_NAME   = "mydatabase";
  const USER_NAME = "root";
  const PASSWORD  = "";
  const HOST_NAME = "localhost";
  function __construct() {
    self::connect();
  }
  static function connect() {
    mysqli_connect(self::HOST_NAME,self::USER_NAME,self::PASSWORD,self::DB_NAME);
  }
}

$db = new Database;