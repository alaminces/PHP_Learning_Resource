<?php
/**
 * Inheritance Example real life
 */
class BankAccount {
  private $balance;
  public function __construct($balance) {
    $this->balance = $balance;
  }
  public function getBalanace() {
    return $this->balance;
  }

  public function deposit($amount) {
    if ( $amount > 0 ) {
      $this->balance += $amount;
    }
    return $this;
  }
}

class SavingAccount extends BankAccount {
  private $interestRate;

  public function __construct($balance,$interestRate) {
    parent::__construct($balance);
    $this->interestRate = $interestRate;
  }

  public function setInterestRate($interestRate) {
    $this->interestRate = $interestRate;
  }

  public function addInterest() {
    $interest = $this->interestRate * $this->getBalanace();
    $this->deposit($interest);
  }
}

$savingAccount = new SavingAccount(100,0.02);
$savingAccount->deposit(1000);
echo $savingAccount->getBalanace() . PHP_EOL;
$savingAccount->setInterestRate(0.05);
$savingAccount->addInterest();
echo $savingAccount->getBalanace();