<?php 

$filename = getcwd()."/05-data-process/data.txt";

$students = [
  array(
    'fname' => 'Masud',
    'lname' => 'Rana',
    'age'   => 30,
    'class' => 7,
    'roll'  => 11
  ),
  array(
    'fname' => 'Masud',
    'lname' => 'Rana',
    'age'   => 24,
    'class' => 8,
    'roll'  => 12
  ),
  array(
    'fname' => 'Masud',
    'lname' => 'Rana',
    'age'   => 22,
    'class' => 9,
    'roll'  => 13
  )
];



## To write data
/*
$fp = fopen($filename,"w");

foreach($students as $student) {
  $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);

  fwrite($fp,$data);
}

fclose($fp);
*/


### To read data

/*
$fp = fopen($filename,"r");

while ( $data = fgets($fp) ) {
  $student = explode(",",$data);
  printf("Name = %s %s\nAge = %d\nClass = %s\nRoll = %d\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}

fclose($fp);
*/


/*

## To write data with comma seperated very easy

$fp = fopen($filename,"w");

foreach($students as $student) {
  fputcsv($fp,$student);
}

fclose($fp);
*/


$fp = fopen($filename,"r");

while ( $student = fgetcsv($fp) ) {
  print_r($student);
}

fclose($fp);