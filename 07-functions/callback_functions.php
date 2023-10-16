<?php 

// callback function with calculation example
// factorial with callback function
// odd even number with callback function 
// check even or odd number between 1-100
// fibonanacci series with callback function
// sum of digits with callback function 
// check odd even number by filtering from an array with callback
// check males and females from an array with callback function
// sorting algorithm with usort keyword in callback function

function sum($n1,$n2) {
  echo "Sum : ".$n1+$n2 . "\n";
}

function sub($n1,$n2) {
  echo "Sub : ". $n1-$n2."\n";
}

function mult($n1,$n2) {
  echo "Mult : ". $n1*$n2."\n";
}

function divi($n1,$n2) {
  echo ($n2==0) ? "Cann't be divided by zero\n" : "Div : ".($n1/$n2);
}


function calculate(...$callback) {
  $num1 = 100;
  $num2 = 10;
  $callback[0]($num1,$num2);
  $callback[1]($num1,$num2);
  $callback[2]($num1,$num2);
  $callback[3]($num1,$num2);
}


calculate('sum','sub','mult','divi');

echo PHP_EOL;

// factorial with callback function 

function factorial($n,$result) {
  echo "Factorial $n is $result\n";
}

function chkFactorial($num,$cb) {
  $factorial = 1;
  for($i=$num; $i>0; $i--) {
    $factorial *= $i;
  }
  $cb($num,$factorial);
}
$number = 4;
chkFactorial($number,'factorial');


// odd even with callback function 

function isEvenOrOdd($result) {
  echo $result;
}

function evenOddChk($num,$callback) {
  $result = "";
  if ( $num % 2 == 0 ) {
    $result .= "Even Number\n";
  }else {
    $result .= "Odd Number\n";
  }
  $callback($result);
}
$num = 10;
evenOddChk($num,'isEvenOrOdd');

// check the even number between 1 - 50 with callback function 

function displayEvenNumber($result) {
  echo $result." ";
}
function processEvenNumber($start,$end,$cb) {
  for($i=$start; $i<=$end; $i++) {
    if ($i % 2==0) {
      $cb($i);
    }
  }
}
$startNum = 1;
$endNum = 50;
processEvenNumber($startNum,$endNum,'displayEvenNumber');

echo "\n";

// check callback function 

function isCallBack($cb) {
  if ( is_callable($cb) ) {
    echo "$cb is a callable functon\n";
  }else {
    echo "$cb is not a callable function\n";
  }
}

isCallBack('totalNum');


// fibonacci series with callback function 

// 0 1 1 2 3 5 8 13 
function displayFibonacci($result) {
  echo $result." ";
}

function processFibonacci($num,$cb) {
  $veryOld = 0;
  $old = 1;
  $new = 1;
  for($i=0; $i<$num; $i++) {
    $cb($veryOld);
    $old = $new;
    $new = $veryOld + $old;
    $veryOld = $old;
  }
}
$num = 9;
processFibonacci($num,'displayFibonacci');

echo "\n";


// sum of digits with callback function 


function displaySumOfDigits($nums,$result) {
  echo "Sum of $nums is ".$result."\n";
}

function processSumOfDigits($numbers,$callback) {
  $sum = 0;
  $rem = 0;
  $len = strlen($numbers);
  for ($i=0; $i<$len; $i++) {
    $rem = $numbers % 10; // to get last digit
    $sum += $rem; // add to sum variable 
    $numbers = $numbers / 10;
  }
  global $numbers;
  $callback($numbers,$sum);
}
$numbers = 123456789;
processSumOfDigits($numbers,'displaySumOfDigits');



/**
 * odd and even number check from an array with callback function
 */

 // looping way 1

 $numbers = [1,2,3,4,5,6,7,8,9,10];

 function displayEvenFromArr($result) {
    echo $result." ";
 }

 function processEvenFromArr($numbers,$cb) {
  foreach($numbers as $num) {
    if ($num % 2 == 0) {
      $cb($num);
    }

  }
 }
 processEvenFromArr($numbers,'displayEvenFromArr');

 echo "\n\n";

  // even numbers filtering from an array

  $numbers = [1,2,3,4,5,6,7,8,9,10];

  function isEven($n) {
    if ($n%2==0) {
      return true;
    }
    return false;
  }

  $evenArr = array_filter($numbers,'isEven');
  print_r($evenArr);

// odd numbers filtering from an array with call back function

$numbers = [1,2,3,4,5,6,7,8,9,10];

function isOdd($n) {
  if ($n%2 != 0) {
    return true;
  }
  return false;
}

$oddNumbers = array_filter($numbers,'isOdd');
print_r($oddNumbers);


/**
 * check male or female by using callback function
 */

$person = [
  ['name'=>'alamin','gender'=>'male'],
  ['name'=>'rejaul','gender'=>'male'],
  ['name'=>'lija','gender'=>'female'],
  ['name'=>'shathi','gender'=>'female'],
  ['name'=>'arif','gender'=>'male']
];
function displayMales($person) {
  if ( $person['gender'] == 'male' ) {
    return true;
  }
  return false;
}

$males = array_filter($person,'displayMales');
print_r($males);

// dislay femals 

function displayFemales($person) {
  if ($person['gender']=='female') {
    return true;
  }
  return false;
}

$females = array_filter($person,'displayFemales');
print_r($females);


// default ways to print males

for($i=0; $i<count($person); $i++) {
  if ($person[$i]['gender']=='male') :
    print_r($person[$i]);
  endif;
}


/**
 * array_map with recursive function 
 */

 $nums = [1,2,3,4,5];

  function cube($num) {
    return $num*$num*$num;
  }

 $newNum = array_map('cube',$nums);
 print_r($newNum);

 function square($num) {
  return $num*$num;
 }
 $squareNumber = array_map('square',$nums);
 print_r($squareNumber);


 /**
  * Shorting system an array with callback function
  */

$info = [
  ['id'=>4,'name'=>'alamin'],
  ['id'=>3,'name'=>'rejaul'],
  ['id'=>20,'name'=>'atik'],
  ['id'=>1,'name'=>'alom khan']
];

function sortById($info1,$info2) {
  if ( $info1['id'] < $info2['id'] ) {
    return -1;
  }else if( $info1['id'] > $info2['id'] ) {
    return 1;
  }else {
    return 0;
  }
}

usort($info,'sortById');
print_r($info);