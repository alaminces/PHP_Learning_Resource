<?php

/************************************
 * array_map(callback, array1, array2, array3...)
 * The array_map() function sends each value of an array to a user-made function, and returns an array with new values,
 * Send each value of an array to a function, multiply each value by itself, and return an array with the new values
************************************/

$numbers = [1,2,3,4,5];

# square with array_map()
function square($num) {
  return $num*$num;
}

$squareNum = array_map('square',$numbers);
print_r($squareNum);

# cube with array map
function cube($item) {
  return $item * $item * $item;
}
$cube = array_map('cube',$numbers);
print_r($cube);


# change the value of an array
$data = ['cow','red','rose','mango'];
function process($val) {
  if ( $val === 'cow' ) {
    return 'Animal';
  }elseif ( $val === 'red' ) {
    return 'Color';
  }elseif( $val === 'rose' ) {
    return 'Flower';
  }elseif( $val === 'mango' ) {
    return 'Fruit';
  }
  return $val;
}
$newData = array_map('process',$data);
print_r($newData);


# compare color using two arrays
$rgb = ['red','green','blue'];
$pri = ['red','yellow','blue'];
function checkColor($val1,$val2) {
  if ( $val1 === $val2 ) {
    // return 'Same';
    return $val1;
  }
  return 'Different';
}
$checkColor = array_map('checkColor', $rgb,$pri);
print_r($checkColor);

# change all letters of the array values to uppercase 
$person = ['fname'=>'alamin','lname'=>'miah'];
function change($val) {
  // return strtoupper($val);
  // return strtolower($val);
  return ucwords($val);
}
$changeArr = array_map('change',$person);
print_r($changeArr);


# Assign null as the function name

$arr1 = ['one','two','five'];
$arr2 = ['three','four','six'];
$arr  = array_map(null,$arr1,$arr2);
print_r($arr);

