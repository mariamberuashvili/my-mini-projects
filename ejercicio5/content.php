<?php
$servername = "localhost";
$username = "ada";

$database = "ada";

$conn = mysqli_connect($servername, $username,  $database);


if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

echo "Conexión exitosa";
?>
