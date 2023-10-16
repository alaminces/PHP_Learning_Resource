<?php 


/************************************
 * String & Type check in php
************************************/
# with single & double quotes
$fname    = "Alamin";
$lname    = "Miah";
$fullName = "{$fname} {$lname}\n";
$fullName = $fname.' '.$lname."\n";
// echo $fullName;
$strNum   = "10"; // string
$strFloat = "10.5"; // string 
$strBool  = "true"; // string
$strNull  = "null"; // string
$strArr   = "['one','two']"; // string
// echo gettype($strArr);


/************************************
 * String length & Index Or Offset print 
************************************/
$bd = "Bangladesh";
// echo strlen($bd);
echo $bd[0];
echo $bd[1];
echo $bd[2];
echo $bd[3];
echo $bd[4];
echo $bd[5]."\n";
echo "{$bd[0]}{$bd[1]}{$bd[2]}{$bd[3]}{$bd[4]}{$bd[5]}{$bd[6]}{$bd[7]}{$bd[8]}{$bd[9]}\n";

# string with for loop
$length = strlen($bd);
$str = "";
for($i=0; $i<$length;$i++) {
  $str .= $bd[$i];
}
echo $str."\n";

# string reverse with for loop
$reverse = "";
for($i=$length-1; $i>=0; $i--) {
  $reverse .= $bd[$i];
}

echo "Reverse BD : ". $reverse."\n";

# to reverse string
$reverse = "Bangladesh is poor country";
$length = strlen($reverse);
for($i=$length; $i>=0; $i--) {
  if ($i==$length) { continue;}
  echo $reverse[$i];
}
echo PHP_EOL;

# to reverse string
$string = "Alamin";
for ($i=1; $i<=(strlen($string)); $i++) {
  echo $string[-$i] . "";
}
echo "\n";

$string = 'nimalA';
echo $string[-1];
echo $string[-2];
echo $string[-3];
echo $string[-4];
echo $string[-5];
echo $string[-6];

/************************************
 * String heredoc & nowdoc
************************************/
echo nl2br("\n");
# heredoc like double quotes
$bd = "Bangladesh";
$am = "American";
$string = <<<EOD
{$bd}\n
$am\n
\tpakistan
canada
EOD;

echo $string."\n";

# nowdoc like single quotes
$fname="Alamin";
$lname="Miah";
$info = <<<'EOD'
First Name : $fname
Last Name : $lname
EOD;
echo $info."\n";


/************************************
 * ASCII -> American Standard Code for information Interchange
************************************/
# ascii code of letters
$chrt = 'A';
$chrt = 'B';
$chrt = '>';
printf("ASCII Dec Code of %s is %d\n",$chrt, ord($chrt));
printf("ASCII Hex Code of %s is %X\n",$chrt, ord($chrt));

# decimal to character 
$num = 104;
printf("Character of %d is %s\n",$num,chr($num));

# print ascii code of all letters 
$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$letters = strtolower($letters);
for($i=0; $i<strlen($letters);$i++) {
  echo $letters[$i]." => ".ord($letters[$i])."\n";
}

# using strrev function
echo strrev($letters);

echo PHP_EOL;
# using for loop to reverse
for( $i=1; $i<=strlen($letters); $i++ ) {
  echo $letters[-$i];
}

echo PHP_EOL;

/************************************
 * substr in string 
************************************/

$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$first5 = substr($letters,0,5);
echo $first5 ."\n";
$next5 = substr($letters,5,5);
echo $next5. "\n";
$last5 = substr($letters,-5,5);
echo $last5."\n";

$len = strlen($letters);
$average = $len / 2;
$letters50Parcent = substr($letters,$average,$average); 
echo $letters50Parcent ."\n";

# trim with substr 
$name = "Alamin Miah";

$fname = substr($name,0,7);
$trim = trim($fname);
echo strlen($trim) ."\n";

/************************************
 * String Reverse
************************************/
$ascii = "American Standard Code for Information Interchange";

for($i=strlen($ascii)-1; $i>=0; $i--) {
  echo $ascii[$i];
}
echo PHP_EOL;

for($i=1; $i<=strlen($ascii); $i++) {
  echo $ascii[$i*-1];
}

echo PHP_EOL;
echo strrev($ascii) ."\n\n";


/************************************
 * String to Array Convert
 * Array to String Convert
************************************/
# string to array
$colors = "Red Green Blue Black-White";
$colorsArr = explode(' ',$colors);
$colorsArr = explode('-',$colors);
$colorsArr = explode(' ',$colors,3);
print_r($colorsArr);

# string to array as each character
$cArr = str_split($colors);
$cArr = str_split($colors,3);
print_r($cArr);

# another example 
$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$dividedByFive = str_split($letters,5);
print_r($dividedByFive);

# array to string with join or implode()
$characters = implode(' ',$dividedByFive);
$characters = join('~',$dividedByFive);
echo $characters;
echo PHP_EOL;


# string to array convert using strtok

$colors = "red green,blue-yellow";
$parts1 = strtok($colors,' ,-');
while( $parts1 !== false ) {
  echo $parts1." ";
  $parts1 = strtok(' ,-');
}

// print_r($parts1);

echo "\n";


/************************************
 * Find Position of string
 * strpos
 * strrpos
 * stripos
 * strripos
************************************/
$colors = "Red Green Blue red yellow red Red";

$search = "red";

$strpos1 = strpos($colors,$search,0);
$strpos2 = stripos($colors,$search,0);
$strpos3 = strrpos($colors,$search,0);
$strpos4 = strripos($colors,$search,0);
$strpos5 = stripos($colors,$search,4);


printf("Position of %s is %d\n",$search, $strpos1);
printf("Position of %s is %d\n",$search, $strpos2);
printf("Position of %s is %d\n",$search, $strpos3);
printf("Position of %s is %d\n",$search, $strpos4);
printf("Position of %s is %d\n",$search, $strpos5);

# example with colors 

$names = "Alamin Miah";
$pos = strpos($names,'Miah');

if ($pos !== false) {
  echo "Found";
}else {
  echo "Not Found";
}


echo "\n>>> String Replace Function:\n";

/************************************
 * String Replace function
 * str_replace()
************************************/
$name = "Alamin Miah";
$search = "Miah";
if ( strpos($names,$search) !== false ) {
  $replacedName = str_replace($search,'Islam',$name);
  echo $replacedName;
}else {
  echo "Not Found\n";
}
echo "\n";

$naemeReplaced = str_ireplace('alamin','Liton',$name);
echo $naemeReplaced."\n";

$colors = "red greeN blue";
$newColors = str_ireplace(['red','green','blue'],['Red','Green','Blue'],$colors,$count);
echo $newColors."\n";
echo "Total Replaced $count\n\n";


/************************************
 * Trim function
 * trim() , ltrim(), rtrim()
************************************/

$password = "  @aB*i,)  ";
$password = ltrim($password);
$password = rtrim($password);
$password = trim($password);
// echo strlen($password);

$username = "<<<Alamin123*>**    ";
$trim = trim($username,"<> *");
// echo $username."\n";
// echo $trim."\n";

$email = "email@info.com\t\n";

echo trim($email,"\t\n ");
echo PHP_EOL;
echo $email;
echo PHP_EOL;

/************************************
 * wordwrap function
************************************/

$values = "one two three four five";

echo wordwrap($values,3,"\n") ."\n\n";

$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
echo wordwrap($letters,5,"\n",true) ."\n\n";


/************************************
 * nl2br function 
 * sscanf function
************************************/

# nl2br converts new line to break 
$names = "Alamin\nRejaul\nLiton";
$names = nl2br($names);
echo $names;

# sscan function create an array
$information = "alamin123 alamin@gmail.com 01307354958";
$data = sscanf($information,"%s %s %11d");
print_r($data);

# example 2
sscanf($information,"%s %s %11d",$username,$email,$mobile);

echo $username."\n";
echo $email."\n";
echo $mobile."\n";

# example 3
$colors = "#ffeebb";

sscanf($colors,"#%2x%2x%2x",$red,$green,$blue);
echo "Red => ".$red."\n";
echo "Green => ".$green."\n";
echo "Blue => ".$blue."\n";
