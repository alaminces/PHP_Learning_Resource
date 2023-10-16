<?php 
namespace Autoloading;

include "autoloader.php";

use \Autoloading\Accounts\Account;
use \Autoloading\Classes\Database;
use \Autoloading\Classes\Session;
use \Autoloading\Files\Scanner;
use \Autoloading\Files\Images\Jpeg;
use \Autoloading\Files\Images\Png;
use \Autoloading\Files\Printer;

class Main {
	function __construct() {
		$de = new \Autoloading\Accounts\Deposite();
		$de->deposite();
		
		$ac = new Account();
		$ac->check();

		
		$db = new Database();
		$db->connect();
		
		$ss = new Session();
		$ss->start();
		
		$scan = new Scanner();
		$scan->scanner();
		
		$printer = new Printer();
		$printer->printer();
		
		$jpeg = new Jpeg();
		$jpeg->jpeg();
		
		$png = new Png();
		$png->png();
	}
}

new Main();