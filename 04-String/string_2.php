<?php 

# strtr() to replace string with case sensitive
$string = "Language & Framework Course from Ostad\n";
$newString = strtr($string,[
  'Language' => 'PHP',
  'Framework' => 'Laravel'
]);
// echo $newString;

# str_repeat()
# repeat for 10 times
$char = "*";
for($i=1; $i<=10; $i++) {
  // echo $char;
}
echo "\n";

# str_repeat function
// echo str_repeat($char,10) ."\n";

# pattern with str_repeat
for($i=10; $i>=1; $i--) {
  // echo str_repeat($char,$i)."\n";
}


echo "\n";
$string = "Language & Framework Course from Ostad";
$shuffled = str_shuffle($string);
// echo $shuffled ."\n";

$encode = base64_encode('Alamin');
$decode = base64_decode($encode);
// echo $encode;

echo "\n\n";

/************************************
 * Most Commonly used string functions in php 
************************************/

# addslashes() is used to add a backslash
$string = "He's man\woman \"well\" as well as";
//echo addslashes($string);


# chr() generate a single byte string from a number
$num = 65;
//echo chr($num); // A

$str = sprintf("The string in escape: %c", 97);
//echo $str;

// echo chr(-159), chr(833);

# with animals
echo chr(240) . chr(159) . chr(144) . chr(152);
echo chr(240) . chr(159) . chr(144) . chr(150);
echo chr(240) . chr(159) . chr(144) . chr(149);
echo chr(240) . chr(159) . chr(144) . chr(148);
echo chr(240) . chr(159) . chr(144) . chr(147);
echo PHP_EOL;


# chunk_split() is used to split a string into smaller chunks of a specific length.
$string = "Hello World";
$chunked = chunk_split($string,2,'-');
$chunked = chunk_split($string,3,',');
$chunked = chunk_split($string,4,' >> ');
// echo $chunked;
$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$chunkedLetters = chunk_split($letters,5,"\n");
$chunkedLetters = chunk_split($letters,5,', ');
// echo $chunkedLetters;


# convert_uuencode() & convert_uudecode()
$string = "Hello, World";
$uuencode = convert_uuencode($string);
$uudecode = convert_uudecode($uuencode);
// echo $uudecode;


# nl2br() converts new line to break
$names = "Alamin Miah\nLiton Miah";
// echo nl2br($names,false);
// echo nl2br($names,true);

$string = "This\r\nis\n\ra\nstring\r";
// echo nl2br($string);


# str_shuffle() randomly shuffles a string
$str = "abcd";
$shuffled = str_shuffle($str);
// echo $shuffled;


# urlencode() URL-encodes string 
$userInput = 'Data123!@-_ +';
$urlencoded = urlencode($userInput);
$urldecoded = urldecode($urlencoded);
// echo $urldecoded;

// example :
//echo "<a href='test?foo=". urlencode($userInput) ."'>next</a>\n";


# htmlspecialchars()
# htmlspecialchars_decode()
$x = htmlspecialchars("<h2>heading two</h2>");
// echo $x."\n\n";
$y = htmlspecialchars_decode($x);
// echo $y;


# str_word_count()
$string = "red green blue yellow";
$totalWords = str_word_count($string);
// echo $totalWords;


# ord( character ) 
# ord — Convert the first byte of a string to a value between 0 and 255

$int1 = ord('🐘');
// echo $int1;
$nl = ord('\n');
// echo $nl;
$n = ord('A');
// echo $n;  

$animals = ord("🐓");
// echo $animals;

