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
        $pass = "123";
        if(($_POST['login'] == $login) && ($_POST['password'] == $pass)) {
           $_SESSION["access"] = "granted";
            echo "<h1>Onneksi olkoon, pääsit sisään!<h1>";
            echo "<p><a href='admin2.php'>Jatka eteenpäin</a></p>";
        } else {
            echo "<h1>Sisäänkirjautuminen epäonnistui<h1>";
            echo "<p><a href='login.php'>Palaa takaisin etusivulle</a></p>";
        }
    }

    access();    
?>
</body>
</html>
