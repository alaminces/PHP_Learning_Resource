<?php 

/*
$filename = "./data.txt";

if (!file_exists($filename)) {
  die("The file {$filename} doesn't exist");
}

$fp = fopen($filename,"r");

if ($fp) {
  echo "The file $filename is open";
  fclose($fp);
}
*/



/***************************************************
 * Check if a file exists using the is_file() function
*****************************************************/

/*
echo is_file("./data.txt");

if ( is_file("./data.txt") ) {
  echo "File exists";
}else {
  echo "File doesn't exist";
}

*/


/*************************************
 * Check if a file exists and readable
 *************************************/
/*
 $filename = "./data.txt";

 if ( is_readable($filename) ) {
  echo "$filename is readable and exists";
 }else {
  echo "$filename is not readable and doesn't exist";
 }
*/

/*************************************
 * Check if a file exists and writable
 *************************************/
/*
 $filename = "./data.txt";

 if ( is_writable($filename) ) {
  echo "$filename is writable and exists";
 }else {
  echo "$filename is not writable and doesn't exist";
 }
*/

$filename = "./data.txt";

$lines = [];

$fp = fopen($filename,"r");


if (!$fp) {
  return;
}

while ( !feof($fp) ) {
  $lines[] = fgets($fp);
}

// while ( $line = fgets($fp) ) {
//   $lines[] = $line; 
// }


fclose($fp);

// print_r($lines);



/*
>>>> Summary

>> Use the fread() function to read some or all contents from a file.

>> Use the fgets() function to read a line from a file.

>> Use the feof() function to test the end-of-file has been reached.

>> Use the filesize() function to get the size of the file.

*/
