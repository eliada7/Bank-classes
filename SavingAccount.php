<?php
include_once('./BankAccount.php');


class SavingAccount extends Bankaccount
{
  public float $interest;

  public function __construct($accountNumber, $amount,)
  {

    parent::__construct($accountNumber, $amount);
    $this->interest =  0.012;
  }


  public function retrieve_interest()
  {
    return "your interest is " . $this->amount = $this->amount * $this->interest;
  }
}

$SavingAccount = new SavingAccount('36985214', '500');
echo "<pre>";
print_r($SavingAccount);
echo "</pre>";
