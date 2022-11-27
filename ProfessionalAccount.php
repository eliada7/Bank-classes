<?php
include_once('./BankAccount.php');

class ProfessionalAccount extends Bankaccount
{
  public $limit;

  public function __construct($accountNumber, $amount,)
  {

    parent::__construct($accountNumber, $amount);
    $this->limit =  500;
  }

  public function Withdraw($withdrowProf)
  {
    if ($withdrowProf <= $this->limit) {
      echo " Your current balance is " . $this->amount -= $withdrowProf;
    } elseif ($withdrowProf > $this->limit) {
      echo " Your Limit is 500 , You can not withdrow more than it";
    }
  }
}
