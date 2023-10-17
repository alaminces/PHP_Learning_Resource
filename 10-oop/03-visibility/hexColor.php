<?php 

class HexColor {
  private $colorhex;
  private $red,$green,$blue;
  function __construct($hexcode) {
    $this->colorhex = trim($hexcode,"#");
    $this->parseColor();
  }

  public function displayHexCode() {
    print "Red Hex: $this->red\n";
    print "Green Hex: $this->green\n";
    print "Blue Hex: $this->blue\n";
  }

  public function addHexColor($hexcode) {
    $this->colorhex = trim($hexcode,"#");
    $this->parseColor();
  }

  private function parseColor() {
    if ($this->colorhex) {
      list($this->red,$this->green,$this->blue) = sscanf($this->colorhex,"%2x%2x%2x");
    }else {
      list($this->red,$this->green,$this->blue) = [0,0,0];
    }
  }
}

$hexColor = new HexColor("#ffddee");
$hexColor->addHexColor("#ddffcd");
$hexColor->displayHexCode();