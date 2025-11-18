<?php
require 'connect.php';



if(isset($_POST['sumbit'])){
    $patata = $_POST['nombre'];
    $patata2 = $_POST['apelido'];
    $patata3 = $_POST['edad'];
    $patata4 = $_POST['nacionalidad'];
    $patata5 = $_POST['hobby'];
    $patata6 = $_POST['img'];

    $query = "INSERT INTO users (nombre, apelido, edad, nacionalidad,hobby, img) VALUES ('$patata', '$patata2', '$patata3', '$patata4', '$patata5', '$patata6')";

    $result = mysqli_query($connection, $query);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projecto</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <h1> EQUIPO 1   : PHP Lovelace League</h1>
    <div class="contenido">
        <button><a href="index.php">  volver </a></button>
    <form action="" method="POST">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="apelido">Apellido:</label>
            <input type="text" name="apelido">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="text" name="edad">
        </div>

        <div>
            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" name="nacionalidad">
        </div>
        <div>
            <label for="hobby">Hobby:</label>
            <input type="text" name="hobby">
        </div>
        <button type="submit" name="submit">Add new user</button>
    </form>
</body>
</html>