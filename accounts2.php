<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<?php

class BankAccount {
    var $accountNumber;
    var $balance;
    var $dateOpened;
    var $accountType;
    
    function accountInfo() {
        return "Account number: " . $this->accountNumber . "<br>" . "Balance: " . $this->balance . "<br>" . "Date opened: " . $this->dateOpened . "<br> " . "Account type: " . $this->accountType;
    }
}
$account1 = new BankAccount();
$account1->accountNumber = 'A1234';
$account1->balance = '€13';
$account1->dateOpened = '12.3.2014';
$account1->accountType = 'käyttö';

$account2 = new BankAccount();
$account2->accountNumber = 'A2345';
$account2->balance = '€143';
$account2->dateOpened = '12.3.2015';
$account2->accountType = 'käyttö';

$account3 = new BankAccount();
$account3->accountNumber = 'A3456';
$account3->balance = '€1300';
$account3->dateOpened = '12.3.2012';
$account3->accountType = 'säästö';

echo $account1->accountInfo() . "<br>";
echo "<br>" . $account2->accountInfo() . "<br>";
echo "<br>" . $account3->accountInfo() . "<br>";


?>