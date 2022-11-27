<?php
include_once('./BankAccount.php');
include_once('./ProfessionalAccount.php');
include_once('./SavingAccount.php');


$myBankAccount = new BankAccount('2145879M', '200');

echo "<pre>";
var_dump($myBankAccount);
echo "</pre>";

$myBankAccount->Withdraw(50);
$myBankAccount->Withdraw(100);
$myBankAccount->Withdraw(50);

$myBankAccount->deposit('100');

$savBankaccount = new SavingAccount('e635962l', '500');

echo "<pre>";
var_dump($savBankaccount);
echo "</pre>";

$savBankaccount->retrieve_interest();
