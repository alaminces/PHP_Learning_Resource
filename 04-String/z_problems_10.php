<?php 
/*
Here are 30 PHP string-related tasks with solutions:

Task 1: Concatenate Two Strings

php
Copy code
$str1 = "Hello, ";
$str2 = "World!";
$result = $str1 . $str2;
echo $result; // "Hello, World!"
Task 2: Find String Length

php
Copy code
$str = "Hello, World!";
$length = strlen($str);
echo $length; // 13
Task 3: Extract a Substring

php
Copy code
$str = "Hello, World!";
$substring = substr($str, 0, 5);
echo $substring; // "Hello"
Task 4: Replace a Substring

php
Copy code
$str = "I like apples.";
$newStr = str_replace("apples", "bananas", $str);
echo $newStr; // "I like bananas."
Task 5: Find Substring Position

php
Copy code
$str = "Hello, World!";
$position = strpos($str, "World");
echo $position; // 7
Task 6: Split a String by Delimiter

php
Copy code
$str = "apple,banana,cherry";
$fruits = explode(",", $str);
print_r($fruits); // ["apple", "banana", "cherry"]
Task 7: Remove Whitespace

php
Copy code
$str = "   Hello, World!   ";
$trimmed = trim($str);
echo $trimmed; // "Hello, World!"
Task 8: HTML Encode a String

php
Copy code
$html = "<a href='example.com'>Link</a>";
$encoded = htmlspecialchars($html);
echo $encoded;
Task 9: HTML Decode a String

php
Copy code
$html = "&lt;a href=&#039;example.com&#039;&gt;Link&lt;/a&gt;";
$decoded = htmlspecialchars_decode($html);
echo $decoded; // "<a href='example.com'>Link</a>"
Task 10: Uppercase First Letter of Each Word

php
Copy code
$str = "hello world";
$ucWords = ucwords($str);
echo $ucWords; // "Hello World"
Task 11: Convert to Lowercase

php
Copy code
$str = "Hello, World!";
$lower = strtolower($str);
echo $lower; // "hello, world!"
Task 12: Convert to Uppercase

php
Copy code
$str = "Hello, World!";
$upper = strtoupper($str);
echo $upper; // "HELLO, WORLD!"
Task 13: Reverse a String

php
Copy code
$str = "Hello, World!";
$reverse = strrev($str);
echo $reverse; // "!dlroW ,olleH"
Task 14: Shuffle Characters in a String

php
Copy code
$str = "Hello, World!";
$shuffled = str_shuffle($str);
echo $shuffled; // Outputs a shuffled string
Task 15: URL Encode a String

php
Copy code
$str = "Hello, World!";
$encoded = urlencode($str);
echo $encoded; // "Hello%2C+World%21"
Task 16: Add Slashes to Escape Special Characters

php
Copy code
$str = "I'm using an apostrophe.";
$escaped = addslashes($str);
echo $escaped; // "I\'m using an apostrophe."
Task 17: Remove Slashes Added by addslashes()

php
Copy code
$str = "I\'m using an apostrophe.";
$unescaped = stripslashes($str);
echo $unescaped; // "I'm using an apostrophe."
Task 18: Check if String Contains a Substring

php
Copy code
$str = "Hello, World!";
$contains = strpos($str, "World") !== false;
echo $contains; // true
Task 19: Count Words in a String

php
Copy code
$str = "This is a sample sentence.";
$wordCount = str_word_count($str);
echo $wordCount; // 5
Task 20: Pad a String with Characters

php
Copy code
$str = "Hello";
$padded = str_pad($str, 10, " ", STR_PAD_RIGHT);
echo $padded; // "Hello     "
Task 21: Compare Two Strings

php
Copy code
$str1 = "apple";
$str2 = "banana";
$comparison = strcmp($str1, $str2);
echo $comparison; // Returns a value < 0
Task 22: Case-Insensitive String Comparison

php
Copy code
$str1 = "apple";
$str2 = "APPLE";
$comparison = strcasecmp($str1, $str2);
echo $comparison; // 0 (equal)
Task 23: Replace Only First Occurrence of a Substring

php
Copy code
$str = "apple apple apple";
$newStr = preg_replace('/apple/', 'banana', $str, 1);
echo $newStr; // "banana apple apple"
Task 24: Check if a String Starts with a Prefix

php
Copy code
$str = "Hello, World!";
$startsWith = strncmp($str, "Hello", 5) === 0;
echo $startsWith; // true
Task 25: Check if a String Ends with a Suffix

php
Copy code
$str = "Hello, World!";
$endsWith = substr_compare($str, "World", -5) === 0;
echo $endsWith; // true
Task 26: Repeat a String

php
Copy code
$str = "abc";
$repeated = str_repeat($str, 3);
echo $repeated; // "abcabcabc"
Task 27: Find the Difference Between Two Strings

php
Copy code
$str1 = "apple";
$str2 = "apricot";
$difference = strspn($str1 ^ $str2, "\0");
echo $difference; // 2
Task 28: Check if a String Contains Any Alphabetic Characters

php
Copy code
$str = "123abc456";
$containsAlpha = preg_match('/[a-zA-Z]/', $str);
echo $containsAlpha; // true
Task 29: Generate a Random String

php
Copy code
$length = 8;
$randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length);
echo $randomString; // Outputs a random 8-character string
Task 30: Remove Non-Alphanumeric Characters from a String

php
Copy code
$str = "Hello, World 123!";
$cleanedStr = preg_replace("/[^A-Za-z0-9]/", "", $str);
echo $cleanedStr; // "HelloWorld123"