<?php 

# print rgb hex color code various method

class RGB{
  private $color;
  private $red;
  private $green;
  private $blue;

  public function __construct($colorCode = '') {
    $this->color = ltrim($colorCode,"#");
    $this->parseColor();
  }

  public function getColor() {
    return $this->color;
  }

  public function getRGBcolor() {
    return array($this->red,$this->green,$this->blue);
  }

  public function readRGBcolor() {
    printf("Red = %s\nGreen = %s\nBlue = %s\n",$this->red,$this->green,$this->blue);
  }

  public function setColor($colorCode) {
    $this->color = ltrim($colorCode,"#");
    $this->parseColor();
  }

  private function parseColor() {
    if ($this->color) {
      list($this->red,$this->green,$this->blue) = sscanf($this->color,"%02x%02x%02x");
    }else {
      list($this->red,$this->green,$this->blue) = array(0,0,0);
    }
    
  }

  function getRed() {
    return $this->red;
  }
  function getGreen() {
    return $this->green;
  }
  function getBlue() {
    return $this->blue;
  }
}


$myColor = new RGB("#2a2b2c");
echo $myColor->getBlue();