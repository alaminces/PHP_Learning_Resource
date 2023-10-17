<?php 

class Fund{
  private $fund;
  public function __construct($initialFund = 0) {
    $this->fund = $initialFund;
  }

  public function addFund($money) {
    $this->fund += $money;
  }

  public function deductFund($money) {
    $this->fund -= $money;
  }

  public function getFund() {
    echo "Total Fund is ". $this->fund . "\n";
  }
}

$f = new Fund();
$f->addFund(10);
$f->getFund();
$f->deductFund(3);
$f->getFund();
