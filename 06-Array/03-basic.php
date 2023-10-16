<?php 

/************************************
 * in_array( $needle,$haystack )
 * in_array() কোনো একটা Value অ্যারেতে আছে কিনা সেটি চেক করার জন্য ব্যবহার করা হয়।
************************************/
$products = ['mobile','laptop','computer','watch'];
//echo in_array('mobile',$products) ? "Available" : "Not Available";
$prices = ['mobile'=>10000,'laptop'=>100000,'watch'=>500];
//echo in_array('500',$prices,true) ? "Yes" : "No";

$emails = [
  'hasan' => 'hasan@gmail.com',
  'mahmud'=> 'mahmud@gmail.com',
  'rakib' => 'rakib@gmail.com'
 ];

//echo in_array('rakib0@gmail.com',$emails) ? "Match" : "Not Match";

$rolls = ['4048',4049,'4050',9073,'4058','4078'];
// echo in_array(4048,$rolls,true) ? "Passed" : "Failed";



/************************************
 * array_search( $needles, $haystact, $strict )
 * array_search() যেকোনো Value অ্যারেতে কত নাম্বার পজিশনে বা ইনডেক্সে অথবা Offset এ আছে সেটি চেক করা।
************************************/
$emails = [
  'hasan' => 'hasan@gmail.com',
  'mahmud'=> 'mahmud@gmail.com',
  'rakib' => 'rakib@gmail.com'
 ];

echo array_search('mahmud@gmail.com',$emails);
echo PHP_EOL;
echo array_search('hasan@gmail.com',$emails);
echo PHP_EOL;
$numbers = [
  65 => '97',
  66 => '98'
];

printf("ASCII code of A is %d\n",array_search(97,$numbers,true));





/************************************
 * key_exists( $key $array )
 * key_exists() একটি Array তে Key খুজার জন্য ব্যবহার করা হয়।
************************************/
$emails = [
  'hasan' => 'hasan@gmail.com',
  'mahmud'=> 'mahmud@gmail.com',
  'rakib' => 'rakib@gmail.com'
 ];

 echo key_exists('mahmud',$emails) ? "yes" : "not";
 echo PHP_EOL;

 $person = [
  'name' => 'Alamin',
  'age'  => 20,
  'city' => 'Kurigram'
];

echo key_exists('name',$person) ? $person['name'] : 'Not Found';
echo key_exists('age',$person) ? $person['age'] : 'Not Found';
echo key_exists('city',$person) ? $person['city'] : 'Not Found';
echo key_exists('status',$person) ? $person['status'] : "Not Found!";

/************************************
 * array_intersect()
 * ২টি Index Array থেকে একই Value গুলো নিতে হলে ব্যবহার করা হয় array_intersect() 
 * আবার যদি Key অনুযায়ী একই ভ্যালু নেয়ার প্রয়োজন হলে ব্যবহার করা হয় array_intersect_assoc()
************************************/
# indexed array with array_intersect
$num1 = [1,2,3];
$num2 = [3,2,8];
$num3 = [1,2,9];
$nums = array_intersect($num1,$num2,$num3);
$numsAssoc = array_intersect_assoc($num1,$num2,$num3);
print_r($nums);
print_r($numsAssoc);

# associative array with array_intersect
$team1 = ['admin'=>'Ahsan','author'=>'Rakib','editor'=>'Mahmud','moderator'=>'Roni','user'=>'Jisan'];

$team2 = ['admin'=>'Ahsan','author'=>'Rocky','editor'=>'Mahmud','moderator'=>'Limon','user'=>'Raju'];

$team3 = ['admin'=>'Mahi','manager'=>'Ahsan','author'=>'Himel','editor'=>'Mahmud','moderator'=>'Simul','user'=>'Rakib'];

$experts = array_intersect($team1,$team2,$team3);
print_r($experts);
$editor = array_intersect_assoc($team1,$team2,$team3);
print_r($editor);



/************************************
 * array_diff()
 * array_diff_assoc()
 * array_diff_key()
 * ২ বা একাধিক Array থেকে যদি একই Value গুলো বাদ দিয়ে ভিন্ন ভ্যালুগুলো নিতে হলে ব্যবহার করা হয় array_diff()
 * ২ বা একাধিক Array থেকে Key & Value অনুযায়ী একই Value গুলো বাদ দিয়ে ভিন্ন ভ্যালুগুলো নিতে হলে ব্যবহার করা হয় array_diff_assoc()
 * array_diff_key() শুধুমাত্র ভিন্ন Key গুলো নিতে হলে ব্যবহার করা হয়।
************************************/

# array_diff
$studentRolls = [1,2,3,4,5,6,7,8,9,10];
$schoolRolls  = [1,4,3,8,19,11,4,12,9,13,15,20];

$notMatchRolls= array_diff($studentRolls,$schoolRolls); 
print_r($notMatchRolls);

$members = ['A','B','C','D','E','F'];
$groups  = ['D','E','F','I','I','L','T','U','M','Z','X','Y','S','W'];
$pages   = ['C','U','V','Z','G','H'];
$unavailableMembersGroupPage = array_diff($members,$groups,$pages);
print_r($unavailableMembersGroupPage);

# array_diff_assoc
$team1 = [
  'admin'  => 'Hasu',
  'author' => 'Mahi',
  'editor' => 'Lima',
  'user'   => 'Putul'
];
$team2 = [
  'admin'   => 'Simul',
  'director'=> 'Hasu',
  'author'  => 'Mahi',
  'editor'  => 'Hasu'
];
$team3 = [
  'admin'   => 'Rakib',
  'manager' => 'Hasu',
  'author'  => 'Mahi',
  'editor'  => 'Lima'
];

$teamLeader = array_diff_assoc($team1,$team2,$team3);
print_r($teamLeader);

$differentKeys = array_diff_key($team1,$team2,$team3);
print_r($differentKeys);



/************************************
 * array_walk( array, callback , parameters)
************************************/

$numbers = [1,2,3,4,5];

function square($n) {
  printf("Square of %d is %d\n", $n,$n*$n);
}

function cube($n) {
  printf("Cube of %d is %d\n", $n,$n*$n*$n);
}

array_walk($numbers, 'square');
echo "...................\n";
array_walk($numbers, 'cube');
echo "...................\n";

$emails = [
  'hasan' => 'hasan@gmail.com',
  'mahmud'=> 'mahmud@gmail.com',
  'rakib' => 'rakib@gmail.com'
];
function info($email,$name,$newLine) {
  printf("%s : %s%s",ucwords($name),$email,$newLine);
}

array_walk($emails,'info',"\n");
echo "...................\n";

$colors = ['red','green','blue'];

function printColor(&$color) {
  $color .= " color"; 
}
array_walk($colors,'printColor');
print_r($colors);

$numbers = [5,10,15];
function printNum(&$val,$key,$n) {
  //printf("%d + %d = %d\n",$val,$n,$val+$n);
  $val += 5;
}
array_walk($numbers,'printNum',5);

print_r($numbers);