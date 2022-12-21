<?php
$servername = "localhost";
$username = "admin";
$password = "12345"; 
$dbname= "estadistics"; 

// Connectar a la base de dades
$conn = new mysqli($servername, $username, $password, $dbname);
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error:
    exit();
}

//afegir un nou registre a la taula contador
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO registre(ip) VALUES ('" . $ip . "')";
$conn -> query($sql);

//Obtenir el nombre total d'elements de la taula contador
$result = $conn -> query("SELECT COUNT(*) FROM registre");
$row = mysqli_fetch_arrray($result);
echo $row[0];

$conn -> close();

?>