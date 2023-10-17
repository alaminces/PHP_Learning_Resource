<?php 

/**
 * To get directory:
 * pwd ( write in terminal )
 * 
 * getcwd() -> Current Working Directory
 */

//  echo getcwd();

$filename = "F:/php resources/09-File/01-read-data/data/data.txt";

$fp = fopen($filename,"r");

$line = fgets($fp); // print a 1st line

// $line = fgets($fp,3);

// $line = fgets($fp,1024); // default 

echo $line;

$line = fgets($fp); // print 2nd line
echo $line;

$line = fgets($fp); // print 3rd line
echo $line;

fclose($fp);

/**
 * Print All lines
 */

echo "\n";

$fp2 = fopen($filename, "r");

while( $line = fgets($fp2) ) {
  echo $line;
}

rewind($fp2);
echo "\n";

while( $line = fgets($fp2) ) {
  echo $line;
}

rewind($fp2);
echo PHP_EOL;

while ( $line = fgets($fp2,5) ) {
  echo $line."\n";
}

// rewind($fp2); // starts from start
//fseek($fp2,10); // starts from index of India
fseek($fp2,-1, SEEK_END); //starts from end, It won't print

echo PHP_EOL;

while ( $line = fgets($fp2) ) {
  echo $line;
}

// fgetc function of the file 
while ( $data = fgetc($fp) ) {
  echo $data."***";
}

// to read entire file
echo fread($fp,filesize($filename));

fclose($fp2);


// To read all file

$data = file($filename);
print_r($data);
echo $data[2];

// To get all content of file same above

$data = file_get_contents($filename);
echo $data;

// to check file is readable

if ( is_readable($filename) ) {
  echo "Readable file";
}else {
  echo "Not Readable file";
}