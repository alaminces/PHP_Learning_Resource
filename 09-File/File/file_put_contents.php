<?php 

/**
 * PHP file_get_contents
**/

/*
$html = file_get_contents('https://www.php.net/');

// echo $html;


$googleLink = "https://www.google.com/";

$googleLink = file_get_contents($googleLink);

// echo $googleLink;

*/

/**
 * Using the file_get_contents() function to read an entire file into a string
**/

/*
$filename = "./data.txt";

if (!file_exists($filename)) {
  die("File doesn't exist or is not readable");
}

echo file_get_contents($filename);
*/

/**
 * Using the file_get_contents() function to read a part of a file into a string
**/

$filename = "./data.txt";

if (!file_exists($filename)) {
  die("File doesn't exit or is not readable");
}

$data = file_get_contents($filename, false, null,5,10);

echo $data;
echo "<br>";
echo strlen($data);
