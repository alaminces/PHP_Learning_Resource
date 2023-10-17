<?php 

/*****************
 If you want to create a binary file, you can append the character 'b' to the $mode argument. For example, the 'wb+' opens a binary file for writing. 
***********************/

/*
$numbers = [1,2,3,4,5,6,7,8,9];

$filename = "./File/createNumbers.dat";

$fp = fopen($filename,"wb");

if (!$fp) {
  die("Error creating the file ".$filename);
}

foreach($numbers as $number) {
  fputs($fp,$number);
}


fclose($fp);

*/

$filename = "./File/createHTML.html";

$url = 'https://www.php.net';

$html = file_get_contents($url);

file_put_contents($filename,$html);
