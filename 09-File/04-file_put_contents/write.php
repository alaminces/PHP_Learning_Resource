<?php 

// fp => file pointer
// $fp = fopen("./data.txt","w");
// for($i=0; $i<=10; $i++) {
	// echo "Hello World $i <br>";
// }



for($i=0; $i<=10; $i++) {
	$fp = fopen("./data.txt","w");
	echo "Hello World $i <br>";
}