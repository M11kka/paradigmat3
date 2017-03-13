<!DOCTYPE html>
<?php
setcookie("login", $_POST['login'], time()+60*10);
setcookie("password", $_POST['password'], time()+60*10);
if(!isset($_POST['login']) || !isset($_POST['password']) ){
    echo "<h1>Tunnus ja salasana vaaditaan</h1>";
}
    
?>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
</body>
</html>
