<?php declare(strict_types=1);
/************************************
 * Function basic 
************************************/
function display() {
  echo "Hellow Word!\n";
}
display();


/************************************
 * Function with parameters 
************************************/
function sum($num1,$num2) {
  echo $num1 + $num2 ."\n";
}
sum(10,40);

/************************************
 * Function with params default values 
************************************/
function sub($num1=0,$num2=0) {
  echo $num1 - $num2 ."\n";
}
sub();
sub(10);
sub(10,5);

/************************************
 * Typing hinting in function
 * declare(strict_types=1) at the beginning line
************************************/
function calculation(string $name, int $roll,float $cgpa,array $sems,null $result,bool $isPass) {
  $isPass = $isPass ? "Yes":"No";
  printf("Student Name: %s\n",$name);
  printf("Student Roll: %s\n",$roll);
  printf("Student Cgpa: %s\n",$cgpa);
  printf("Student Running Semisters: %s\n",$sems[count($sems)-1]);
  printf("Student 7th result: %s\n",$result??"Not Found");
  printf("Student complete course: %s\n",$isPass);
}
$name="Alamin";
$roll=404848;
$cgpa =3.29;
$semisters=['1st','2st','3rd','4th','5th','6th','7th','8th'];
$result=null;
$isPass=false;
calculation( $name,$roll,$cgpa,$semisters,$result,$isPass );


/******************************************
 * Multiple type hinting in one parameter 
*******************************************/

function score(string|int|float|null $score) {
  $score = ($score != null) ? $score : "0";
  echo "Your Grade is {$score}%\n";
}

score("99");
score(100);
score(99.3);
score(null);


/************************************
 * Nullable Type Hints
************************************/

function courseName(string|null $cname) {
  $cname = $cname ?? "No Course";
  echo "Your Course Name: {$cname}\n";
}
courseName("PHP & Laravel");
courseName(null);

# another example of nullable with ?
function courseFee(?int $amount) {
  if ( $amount ) {
    echo "Your Course Fee is {$amount}Tk\n";
  }else{
    echo "Your Course Fee is 0\n";
  }
}

courseFee(5000);
courseFee(null);


/***********************************************
 * Multiple Arguments with (...)spread operator
***********************************************/

function numbers($sum,$product,$total, ...$numbers) {
  $sum     = array_sum($numbers);
  $product = array_product($numbers);
  $total   = count($numbers);
  printf("Sum => %d\nProduct => %d\nTotal => %d\n",$sum,$product,$total);
}
numbers('Sum','product','Total',10,20,30,40,50);


/***********************************************
 * Anonymous Function
 * Creation & Execution Directly:
 * Assign to a Variable and Execute
***********************************************/

(function(){
  echo "Alamin Miah\n";
})();

$product = function($proName,$proPrice) {
  printf("Product Name : %s\nProduct Price :%d\n",$proName,$proPrice);
};

$product('Laptop',22500);


/***********************************************
 * Arrow Function
***********************************************/
$sum = fn($n1,$n2) => $n1+$n2;
$sub = fn($n1,$n2) => $n1-$n2;
$mul = fn($n1,$n2) => $n1*$n2;
$div = fn($n1,$n2) => $n1/$n2; 

echo $sum(10,10) ."\n";
echo $sub(10,2) ."\n";
echo $mul(10,5) ."\n";
echo $div(10,2) ."\n";



/***********************************************
 * PHP Named Arguments
***********************************************/

function displayName( $first_name, $last_name ) {
  print "{$first_name} {$last_name}\n";
}

displayName(last_name : "Miah", first_name : "Alamin");

## Next example below

function find($needle,$haystack) {
  return strpos($haystack,$needle);
}

echo find(haystack: "PHP is awesome!", needle: "awesome");
echo "\n";
echo find(haystack: "PHP is a awesome", needle: "a");