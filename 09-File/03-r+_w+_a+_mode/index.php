<?php 

$filename = getcwd()."/03-r+_w+_a+_mode/data.txt";


/**
 * r+ mode
 * read & write 
 */

/*
$fp = fopen($filename,"r+");

$line = fgets($fp);
echo $line;

fwrite($fp,"desktop\n");
fwrite($fp,"Keyboard\n");

rewind($fp);

fwrite($fp,'Initial');

fseek($fp,0);

// echo fgets($fp);

fwrite($fp,'Wow');

fclose($fp);

*/


/**
 * w+ mode
 * read & write 
*/

/*
$fp = fopen($filename,"w+");

fwrite($fp,"Test 1\n");

rewind($fp);

echo fgets($fp);

fwrite($fp,"Test 2");

fseek($fp,7);

echo fgets($fp);


fclose($fp);

*/

/**
 * a+
*/

$fp = fopen($filename,"a+");

echo fgets($fp);

fwrite($fp,"Test 3\n");
fwrite($fp,"Test 4\n");

rewind($fp);

echo fgets($fp);


fclose($fp);