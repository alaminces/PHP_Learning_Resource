<?php 

$source = "./File/copy/readme.txt";

$dest = "./File/copy/readmyCopid.txt";



// echo copy($source,$dest) ? "Copid successfully" : "eror";

echo copy($source,$dest) 
? "The file $source was copied to $dest successfully" 
: "Error copying the file $source";



