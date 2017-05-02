<!doctype html>
<html lang="fi">
<head>
  <meta charset="utf-8">
  <title>Kotiteht 9</title>
  <style type="text/css">
  .account {
  	width: 150px;
  	border-width:1px;
  	border-style: solid;
  	border-color:#000;
  	padding: 2px;
  	margin: 4px;
  }
  </style>
</head>
<body>

<?php

class BankAccount {
  // Pankkitilin tiedot
  public $accountNumber;  // esim. B2311
  public $balance;  // esim. 500$
  public $dateOpened;  // esim. 1.2.2012
  public $accountType;  // esim. käyttö tai säästö
  
  function __construct($accountNumber, $balance, $dateOpened, $accountType){
	$this->accountNumber = $accountNumber; 
	$this->balance = $balance; 
	$this->dateOpened = $dateOpened;
	$this->accountType = $accountType;
  }
  
  /**
   * Display account information in HTML.
   * @return string 
   */
  function displayAccount() {
    $output = '<div class="account">';
        
    $output .= $this->accountNumber;
    $output .= '<br/>' . $this->balance;
    $output .= '<br/>' . $this->dateOpened;
    $output .= '<br/>' . $this->accountType;
    
    $output .= '</div>';
    
    return $output;
  }
  
  
} // end class


$accounts[] = new BankAccount('A7652',500,'5/3/2000','Checking');

$accounts[] = new BankAccount('B2311', -50, '1/2/2012', 'Checking');

$accounts[] = new BankAccount('S2314',7500,'1/2/1994','Savings');

// print info on one account
//echo $accounts[0]->displayAccount();

// a foreach loop to print info on every account
foreach($accounts as $tili) {
	echo $tili->displayAccount();
}


?>

</body>
</html>