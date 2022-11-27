<?php
include_once('./BankAccount.php');


class SavingAccount extends Bankaccount
{
  public int $interest;

  public function __construct($accountNumber, $amount,)
  {

    parent::__construct($accountNumber, $amount);
    $this->interest =  0.012;
  }

  public function retrieve_interest()
  {
    //$myBalance = $this->amount;
    return  $this->amount = $this->amount * $this->interest;
  }
}
