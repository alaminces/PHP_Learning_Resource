<?php 
namespace CloudStorage;
include "autoloader.php";

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;
class Main {
  function __construct() {
    (new Mailer())->sendMail();
    $scanner = new Scanner();
    $scanner->scan();
    $image = new Jpeg();
    echo $image->getDimension();
  }
}

new Main();