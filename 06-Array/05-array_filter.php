<?php 

/************************************
 * array_filter(array, callback)
************************************/


# array_filter with number 
$numbers = [1,2,3,4,5,6,7,8,9,10];
function even($n) {
  if ($n % 2==0) {
    return $n;
  }
}
$evenNum = array_filter($numbers,'even');
print_r($evenNum);

# print odd array numbers
function odd($n) {
  if ( $n % 2 != 0 ) {
    return $n;
  }
}

$oddNum = array_filter($numbers,'odd');
print_r($oddNum);

# 4 - 8 numbers print
function printNum($n) {
  if ($n >= 4 && $n <= 8) {
    return $n;
  }
}
$num = array_filter($numbers,'printNum');
print_r($num);

# search string by first character
$names = ['Alamin','Rejaul','Atikur','Rifaul'];
function searchByA($name) {
  if ( $name[0] == 'A' ) {
    return $name;
  }
}
$nameByFilterA = array_filter($names,'searchByA');
print_r($nameByFilterA);

function filterByR($name) {
  if ( $name[0] == 'R' ) {
    return $name;
  }
}
$filterByR = array_filter($names,'filterByR');
print_r($filterByR);


function uppercaseName($name) {
  return strtoupper($name);
}
$uppercaseNames = array_filter($names,'uppercaseName');
print_r($uppercaseNames);

# odd number test 
function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4,5,7,9,10);
print_r(array_filter($a1,"test_odd"));