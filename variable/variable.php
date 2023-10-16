<?php 

// PHP $ and $$ Variables ::::::::::::::::::::::::::::::>
/*
	* The $var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.
	* The $$var (double dollar) is a reference variable that stores the value of the $variable inside it.
*/ 

// basic example
$x = "abc";
$$x = 200;

# to print -> abc
echo $x ."\n";

# to print -> 200
echo $$x ."\n";

# to print -> 200
echo $abc ."\n";

// another example >>>>>>>>>>>>>>>>>>>>>>

$id = 'myId';
${$id} = "ourId";
${${$id}} = "yourId";
${${${$id}}} = "No more next\n";

echo $id ."\n"; // myId
echo ${$id} ."\n"; // ourId
echo ${${$id}} ."\n"; // yourId

echo $myId ."\n"; // our id
echo $ourId ."\n"; // your id
echo $yourId;

