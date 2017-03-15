<!DOCTYPE html>
<?php
session_start();
 if ($_SESSION["access"] != "granted") {
 header('location: admin.php');
 }
?>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p>Unohda minut tästä:</p>
    <form method="post" action admin2.php>
        <input type="checkbox" name="forget" value="1"></input>
        <input type="submit" name="klik!">
    </form>
    <?php
        if (isset($_POST['forget']) && $_POST['forget'] == 1) {
            $_SESSION["access"] = "";
            echo "<meta http-equiv='refresh' content='0'>";
        } 
    ?>
</body>
</html>
