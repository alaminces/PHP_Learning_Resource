<?php

/************************************
 * array_reduce()
 * list()
 * range(start end step)
 * mt_rand(start,end)
 * array_rand( array )
 * 
 * array_reduce( array, callback, initialValue )
************************************/

$numbers = [1,2,3,4,5,6,7,8,9,10];

# sum with array_reduce()
function sum($init,$num) {
  return $init + $num;
}
$sum = array_reduce($numbers,'sum',0);
echo "Sum of all number is $sum\n";

# even number sum with array_reduce()
function evenSum($start,$num) {
  if ( $num % 2 == 0 ) {
    return $start + $num;
  }
  return $start;
}
$evenSum = array_reduce($numbers,'evenSum');
echo "Sum of even number is $evenSum\n";

# sum of odd number with array_reduce()
function oddSum($init,$num) {
  if ($num % 2 != 0) {
    return $init + $num;
  }
  return $init;
}
$oddSum = array_reduce($numbers,'oddSum');
echo "Sum of odd is $oddSum\n";


function myfunction($v1,$v2) {
  return $v1.' '.$v2;
}

$a=array("Dog","Cat","Horse");
print(array_reduce($a,"myfunction"));

echo PHP_EOL;



/************************************
 * list(varname,varname,varname) = array
************************************/

$colorCode = [255,125,68];
// $red = $colorCode[0];
// $blue = $colorCode[1];
// $green = $colorCode[2];

list($red,$green,$blue) = $colorCode;
echo "$red $green $blue\n";

$info = ['admin','admin@gmail.com','123456'];

list($username,$email,$password) = $info;
echo $username;
echo $email;
echo $password;


/************************************
 * range( start, end, step )
************************************/

# print 0-10
$numbers = range(0,10);
print_r($numbers);

# print 1-10
print_r(range(1,10));

# print 1-20 with stepping 3 
print_r(range(1,20,3)); 

# print 2 - 20 odd number
print_r( range(2,20,2) );

# print 1-20 even numbers
print_r(range(1,20,2)); 

# another way to print 1-10
$numbers = [];
for($i=1; $i<=10; $i++) {
  array_push($numbers,$i);
}
print_r($numbers);

# another way to print 1-10 even numbers
$nums = [];
for($i=1; $i<=20; $i++) {
  if ($i % 2== 0) {
    array_push($nums,$i);
  }
}
print_r($nums);


/************************************
 * mt_rand(start, end)
************************************/
# to print number randomly
echo mt_rand(1,10) . "\n";

// $numbers = range(1,10);
$numbers = [0=>'Zero',1=>'One',2=>'Two',3=>'Three',4=>'Four',5=>'Five',6=>'Six',7=>'Seven',8=>'Eight',9=>'Nine',10=>'Ten'];

$rand = mt_rand(0,10);
echo $rand." => ".$numbers[$rand];

echo "\n";

$num = [0,1,2,3,4];
$text = ['Zero','One','Two','Three','Four'];
$combine = array_combine($num,$text);
print_r($combine);

$rand = mt_rand(0,4);

echo $combine[$rand];



/************************************
 * shuffle( array )
************************************/

$numbers = [1,2,3,4,5,6,7,8,9,10];
shuffle($numbers);
// print_r($numbers);

$fruits = ['a'=>'Apple','b'=>'Banana','c'=>'Coconut'];
# original key remove, start with 0 offset
// shuffle($fruits); 
print_r($fruits);

# print fruit valur according to key randomly
$fruitKey = array_rand($fruits);

echo $fruitKey." => ".$fruits[$fruitKey];