<?php 


/**
 * PHP Delete File
 * To delete a file, you use the unlink() function
**/


/*
$filename = "./File/delete/three.txt";

$delete = unlink($filename);

if ($delete) {
  echo "The file deleted successfully";
}else {
  echo "There was a error deleting the file";
}
*/


/**
 * Delete all files in a directory that match a pattern
**/

$dir = "./File/delete/temp/";

array_map('unlink', glob("$dir*.txt"));

