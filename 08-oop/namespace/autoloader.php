<?php 

spl_autoload_register(function($className) {
	//echo $className;
	if ( strpos($className,"Autoloading\\Accounts\\") !== false ) {
		$path = str_replace("Autoloading\\Accounts\\","",$className).".php";
		require_once($path);	
	}
	
	if ( strpos($className,"Autoloading\\Classes\\") !== false ) {
		$filename = str_replace("Autoloading\\","",$className);
		$filename = str_replace("Classes\\","classes/",$filename);
		$path = "{$filename}.php";
		require_once($path);
	}
	
	if ( strpos($className,"Autoloading\\Files\\") !== false ) {
		$filename = str_replace(["Autoloading\\","\\"],["","/"],$className);
		$path = strtolower($filename).".php";
		include_once($path);
	}
	
	
	
	
	
	//die();
});

// include "Account.php";
// include "classes/Database.php";
// include "classes/Session.php";
// include "files/scanner.php";
// include "files/images/jpeg.php";
// include "files/images/png.php";