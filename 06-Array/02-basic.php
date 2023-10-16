<?php 

/******************************
 * Indexed Array
 * pop(array)
 * push(array,newItem,newItem,newItem)
 * shift(array)
 * unshift(array,newItem)
*******************************/

$verbs = ['vote','web','wake'];
# initialy to add new item 
array_unshift($verbs,'wait');
# as a multidimensional array to add
array_unshift($verbs,['worry','write']);
# to remove first item 
array_shift($verbs);
# lastly to add new item
array_push($verbs,'watch','wash','welcome');
# to remove last item
array_pop($verbs);
print_r($verbs);




/******************************
 * Associative Array
 * array_keys( array )
 * array_values( array )
*******************************/

$verbs = ['wish'=>'wished','walk'=>'walked','wander'=>'wandered','write'=>'written'];

$verbskeys = array_keys($verbs);
$verbsValus = array_values($verbs);

print_r($verbskeys);
print_r($verbsValus);


/**************************************************
 * Array Converter
 * String to Array -> explode( seperator, string )
 * String to Array -> preg_split( pattern, string )
 * Array to String -> implode( seperator, array ) 
 * Array to String -> join( seperator, array )
***************************************************/

$verbs = "Delight Despair,Dishearten Differ Disprove Deny-Confess";
# string to array convert
$verbsArr = explode(' ',$verbs);
print_r($verbsArr);

# string to array convert 
$verbsArr2 = preg_split("/( |,|-)/",$verbs);
print_r($verbsArr2);

# array to string convert
$arrayToString = implode(', ',$verbsArr2);
echo $arrayToString . "\n\n";

# array to string convert
$arrTwoString = join(" ",$verbsArr2);
echo $arrTwoString ."\n";

# string to array convert
$str = "A-B,C_D@E.PNG";
echo $str ."\n";

$strToArr = preg_split("/(-|,|_| |@)/",$str);
print_r($strToArr);


/**
 * Associative Array with the following function bellow:
 * serialize( value ) // any data like array, string etc
 * unserialize( serialized data )
 * json_encode( value ) // any data like array, string etc
 * json_decode( json data, true )
*/

$person = [
  ['name' => 'Alamin', 'age' => 20],
  ['name' => 'Anisur', 'age' => 21],
  ['name' => 'Mahmud', 'age' => 22]
];

print_r($person);

# to make serialize an array
$serialize_arr = serialize($person);
echo $serialize_arr ."\n\n";

# to make unserialize a serialized data
$unserialized_arr = unserialize($serialize_arr);
print_r($unserialized_arr);


# to make joson_encode an array
$jsonEncode = json_encode($person);
echo $jsonEncode; // return as json formate

# to make json_decode as an object
$jsonDecode = json_decode($jsonEncode);
print_r($jsonDecode); // return as an object 

# to make json_decode as an array
$jsonDecodeArr = json_decode($jsonEncode,true);
print_r($jsonDecodeArr);



/************************************
 * Copy By Value or Deep Copy
 * Copy By Reference or Shallow Copy
***********************************/

# copy by value or deep copy
$names = ["Alamin","Rejaul","Liton"];
$newNames = $names;
$newNames[0] = "Alamin Miah";

print_r($names);
print_r($newNames);

# copy by referenc or deep copy
$names = ["Alamin","Rejaul","Liton"];
$newNames = &$names;
$newNames[0] = "Alamin Miah";

print_r($names);
print_r($newNames);


/****** ***************************
 * Array Slice & Splice method
 * array_slice( Array, start, length, true) // create new array
 * array_splice( Array, start, length, newArray)
**********************************/
# array_slice() with index
$subjects = ['Bangla','English','Math','Science'];
$commonSub = array_slice($subjects,0,2);
$hardSub = array_slice($subjects,1,3);
$science = array_slice($subjects,-1,null,true);
$eng_math = array_slice($subjects, -3,2,true);
$complexSub = array_slice($subjects,1,null,true);
// print_r($commonSub);
// print_r($hardSub);
// print_r($science);
// print_r($eng_math);
// print_r($complexSub);


# array_slice() with associative

$person = [
  'fname' => 'Alamin', 
  'lname' => 'Miah',
  'age'   => '20',
   355    => 11111111
];

$fullName = array_slice($person,0,2);
$numbers = array_slice($person,-1,null,true);
// print_r($fullName);
// print_r($numbers);


# array_splice() 
$names = ['Marufa','Shorifa','Shimu','Rima'];

$teams1 = array_splice($names,0,2,['removed','removed']);
$teams2 = array_splice($names,-2,2,array('removed','removed'));

// print_r($names);
// print_r($teams1);
// print_r($teams2);


# index array merge not problem
$numbers = [1,2,3,4,5,6,7,8,9,10];
$numbersFirst5 = array_slice($numbers,0,5,true);
$numbersLast5 = array_slice($numbers,5,null, true);
$numberFristLast = array_merge($numbersFirst5,$numbersLast5);
// print_r($numberFristLast);


# associative array merge has problem
$asciiNumbers = [65=>'A',67=>'B',68=>'C',69=>'D'];
$part1 = array_slice($asciiNumbers,0,2,true);
$part2 = array_slice($asciiNumbers,-2,null,true);
// print_r($part1);
// print_r($part2);
$part = array_merge($part1,$part2); 
print_r($part);
$part = $part1 + $part2;
print_r($part);

# Note : array_merge() doesn't return keys as number




/************************************
 * >>> Sorting in arra
 * sort( array )
 * rsort( array )
 * asort( array )
 * arsort( array )
 * ksort( array )
 * krsort( array )
 * Note : all sort method modified main array
************************************/

# sort with index array
$numbers = [0=>10,6=>7,4=>3,2=>9,3=>5,5=>6,8=>2,1=>8,7=>4,9=>1];
sort($numbers);
asort($numbers);
rsort($numbers);
ksort($numbers);
krsort($numbers);
//print_r($numbers);

$fruits = [
  'a' => 'apple',
  'aaa' => 'banana',
  'aa' => 'coconut'
];

ksort($fruits);
print_r($fruits);

$nums = [1,2,3,11,22,11,33];
sort($nums,SORT_STRING);
print_r($nums);

$names = ['a','b','c','A','B','A','C','a'];
sort($names, SORT_STRING | SORT_FLAG_CASE);
print_r($names);



# Remove item with offset from any array
$numbers = [100,200,300];
unset($numbers[1]);
print_r($numbers);

$colors = ['Red','Green','Yellow','Blue'];
unset($colors[2]);
print_r($colors);

$person = [
  'fname' => 'Alamin',
  'lname' => 'Miah',
  'age'  => 20
];
unset($person['age']);
print_r($person);


/************************************
 * isset() 
 * empty()
 * is_numeric()
************************************/

$num;
$num = "";

echo isset($num) ? "Set\n" : "not Set\n";
echo empty($num) ? "Empty\n":"Not Empty\n";
echo is_numeric($num) ? "Numeric\n":"Not Numeric\n";
echo "\n";

$info = 0; // you are isset , not empty

if ( isset($info) && (!empty($info) || is_numeric($info)) ) {
  echo "Good";
}else {
  echo "Bad";
}





