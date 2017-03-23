<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php

$username = "okp";
$password = "oli9tRR3";
$dbname = "miikka123";

// Create connection
$conn = new mysqli('', $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM lista1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Nimi: " . $row["Etunimi"]. " " . $row["sukunimi"]. " Ikä: ". $row[ika]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
