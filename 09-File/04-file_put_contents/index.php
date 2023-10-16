<?php 

$filename = getcwd()."/04-file_put_contents/data.txt";

// file_put_contents($filename,"Three");
// file_put_contents($filename,"Four");

// file_put_contents($filename,"One\n", FILE_APPEND);
// file_put_contents($filename,"Two\n", FILE_APPEND);
// file_put_contents($filename,"Three\n", FILE_APPEND);
// file_put_contents($filename,"Four\n", FILE_APPEND);

// file_put_contents($filename,"Test 1\n",LOCK_EX);
// file_put_contents($filename,"Test 2\n",LOCK_EX);

file_put_contents($filename,"Nice\n", FILE_APPEND | LOCK_EX);
file_put_contents($filename,"Good\n", FILE_APPEND | LOCK_EX);