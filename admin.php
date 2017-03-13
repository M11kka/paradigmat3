<!DOCTYPE html>
<?php
session_start();
?>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php
    function access (){
        $login = "tunnus";
        $pass = "salasana123";
        if(($_POST['login'] == $login) && ($_POST['password'] == $pass)) {
           $_SESSION[access] = "granted"; 
        } else {
            $_SESSION[access] = "denied";
        }
    }
    function tarkistus (){
        if ($_SESSION[access] = "denied"){
            echo "<h1>Sisäänkirjautuminen epäonnistui<h1>";
            echo "<p><a href="login.php">Palaa takaisin etusivulle</a></p>";
        }
    }
    
?>
</body>
</html>
