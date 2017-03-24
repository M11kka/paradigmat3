<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $yhteys = new PDO("mysql:host=localhost;dbname=miikka123","okp","oli9tRR3");
    $kysely = $yhteys->prepare("SELECT * FROM lista1");
    $kysely->execute();
    echo "<table border=\"1\" cellpadding=\"2\">";
    while ($rivi = $kysely->fetch()){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($rivi["ID"]) . "</td>";
        echo "<td>" . htmlspecialchars($rivi["Etunimi"]) . "</td>";
        echo "<td>" . htmlspecialchars($rivi["sukunimi"]) . "</td>";
        echo "<td>" . htmlspecialchars($rivi["ika"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
