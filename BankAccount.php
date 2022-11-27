<?php

class Bankaccount
{

  private string $accountNumber;
  public int $amount;

  public function __construct($accountNumber, $amount)
  {
    $this->set_accountNumber($accountNumber);
    $this->set_amount($amount);
  }

  public function set_accountNumber($accountNumber)
  {
    if (strlen($accountNumber) != 8) {
      echo "the amount number must be 8 !";
      return false;
    } else {
      $this->accountNumber = $accountNumber;
    }
  }

  public function get_accountNumber()
  {
    return $this->accountNumber;
  }

  public function set_amount($amount)
  {
    if (!is_numeric($amount)) {
      echo "the amount must be a number !";
      return false;
    } else {
      $this->amount = $amount;
    }
  }

  public function get_amount()
  {
    return $this->amount;
  }

  public function Withdraw($withdrowMony)
  {
    if ($withdrowMony > $this->amount) {
      echo " you do not have enough money in your account";
    } elseif ($withdrowMony <= $this->amount) {
      echo "Your current balance is " . $this->amount -= $withdrowMony;
    }
  }

  public function deposit($addMoney)
  {
    if (!is_numeric($addMoney)) {
      echo "the amount must be a number !";
    } else {
      $newAmount =  $this->amount += $addMoney;
      echo "Your current balance is " . $newAmount;
    }
  }
}
