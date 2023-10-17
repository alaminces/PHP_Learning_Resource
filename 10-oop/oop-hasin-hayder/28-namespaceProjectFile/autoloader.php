<?php 
spl_autoload_register(function($name) {
  $path = strtolower(str_replace("CloudStorage\\","",$name).".php");
  $path = str_replace("\\","/",$path);
  include $path;
});