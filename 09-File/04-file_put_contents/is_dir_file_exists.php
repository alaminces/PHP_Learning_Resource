<?php 

$file = "./data.txt";

echo file_exists($file);

echo is_dir($file); // false 

echo is_dir("dir"); // true 