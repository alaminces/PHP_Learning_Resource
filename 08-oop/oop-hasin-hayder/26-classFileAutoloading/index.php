<?php 
/*include "computer.php";
include "laptop.php";
include "mobile.php";*/



function autoload($name) {
  if ( strpos($name,"Test_") !== false ) {
    $filename = str_replace("Test_","",$name);
    include "inc/{$filename}.php";
  }else {
    include "{$name}.php";
  }
  
}
spl_autoload_register('autoload');


//(new Test_Mouse)->myMouse();

(new Computer)->myComputer();
(new Mobile)->myMobile();
(new Laptop)->myLaptop();
(new Test_Mouse)->myMouse();




// (new Computer)->myComputer();
// (new Mobile)->myMobile();
// (new Laptop)->myLaptop();