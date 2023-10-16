<?php 
namespace Autoloading\Files\Images;
include "images.php";
use \Autoloading\Files\Images\Image\Images;

class Png implements Images{
	function png() {
		echo "Image.png<br>";
	}
	function jpg(){
		echo "Image.jpg implements from image class";
	}
}
