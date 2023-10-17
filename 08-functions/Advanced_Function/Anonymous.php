<?php 

/*
	* Basic Anonymous Function
*/

$multiply = function( $x, $y ) {
	return $x * $y;
};

echo $multiply(50,5);


/*
	* Passing an anonymous function to another function
*/

function double_it( $element ) {
	return $element * 2;
}

$list = [100, 200, 300];

$double_list = array_map("double_it", $list);

print_r($double_list);


# array map with anonymous function 

$numbers = [10, 20, 30, 40, 50];

$doubleNumbers = array_map( function( $element ) {
	return $element * 2;
}, $numbers);

print_r( $doubleNumbers );



/*
	* Scope of the anonymous function passed by value
*/

$message = "Hi! every body";

$say = function() use ($message) {
	echo $message;
};

$say();

echo $message;

/*
	* Passed by reference with anonymous function 
*/

$message = "Hi";

$greet = function () use (&$message) {
	$message = "Hello";
};

$greet();

echo $message;


/*
	* Return an anonymous function from a function
*/

function multiplier($x) {
	return function() use ($x) {
		return $x * $x;
	};
}

$double = multiplier(10);
echo $double();