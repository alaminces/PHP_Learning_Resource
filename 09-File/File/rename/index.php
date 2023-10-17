<?php 

// $oldname = "./File/rename/oldfile.txt";
// $newname = "./File/rename/newfile.txt";

/*
if (rename($oldname,$newname)) {
  $message = sprintf(
		'The file %s was renamed to %s successfully!',
		$oldname,
		$newname
	);
}else {
  $message = sprintf(
		'There was an error renaming file %s',
		$oldname
	);
}

echo $message;

*/



/**
 * Rename and move the file
 */

$oldname = "./File/rename/newfile.txt";
$newname = "./File/rename/public/otherfile.txt";


if ( rename($oldname,$newname) ) {
  echo "Rename and move successfully";
}else {
  echo "Error";
}