<?php 

/**
 * w is used to write data in file ( delete old data then add new data)
 * a is used to write data in file ( data is added new not delete old data )
 * 
 */

$filename = getcwd()."/02-write-data/data.txt";

if ( is_writeable($filename) ) :

// $fp = fopen($filename,"w");
$fp = fopen($filename,"a");

// fwrite($fp, "New data added\n");
// fwrite($fp,"New Data Replace\n");
fwrite($fp,'test');

fclose($fp);

endif;


/**
 * For windows 
 * F:\\php resources\\09-File\\02-write-data\\data.txt
 */