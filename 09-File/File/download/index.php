<?php 
$filename = "./File/download/php.pdf";

/**
 * PHP download file example
 */

// echo readfile("./data.txt");

if (file_exists($filename)) {
  header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($filename));
  readfile($filename);
  exit;
  
}else {
  echo "not found";
}


/**
 * PHP download file with a download rate limit
 * for learning to to php tutorial website
 */