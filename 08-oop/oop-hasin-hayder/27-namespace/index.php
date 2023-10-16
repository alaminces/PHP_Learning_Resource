<?php 
namespace Astronomy;
include "planet.php";
include "earth.php";
//$planet = new \Astronomy\Planets\Planet(); // qualified
//$planet = new Planets\Planet(); // unqualified
$planet = new \Astronomy\Planets\Earth();
$planet->getName();

//new DateTime(); // It will generate fatal error
new \DateTime();

