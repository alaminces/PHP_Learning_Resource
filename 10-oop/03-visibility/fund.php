<?php 

// Using public private and protected

class Fund {
  private $fund = 0;
  public function addFund($amount) {
    $this->calculate($amount,null);
  }
  public function deduct($amount) {
    $this->calculate(null,$amount);
  }
  private function calculate($addAmount=0,$deductAmount=0) {
    $this->fund += $addAmount;
    if ($this->fund) {
      $this->fund -= $deductAmount;
    }else {
      echo "No balance available!";
    }
  }

  public function displayFund() {
    echo "Total Amount $this->fund\n";
  }
}

$fund = new Fund();
$fund->addFund(1000);
$fund->deduct(500);
$fund->displayFund();
