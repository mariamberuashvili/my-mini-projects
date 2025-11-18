<?php
require "content.php";
/* echo $_POST["nombre"]."<br>";
echo $_POST["apelido"]."<br>";
echo $_POST["edad"]; */
 
if(isset($_POST['submit'])){
    $patata = $_POST['nombre'];
    $patata2 = $_POST['apelido'];
    $patata3 = $_POST['edad'];
    
    $query = "INSERT INTO users (nombre, apelido, edad) VALUES ('$patata', '$patata2', '$patata3')";

    $result = mysqli_query($connection, $query);

}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <form action="" method="POST">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" nombre="nombre">
        </div>
        <div>
            <label for="apelido">Apellido:</label>
            <input type="text" name="apelido">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="text" name="edad">
        </div>
        <button type="submit" name="submit">Add new user</button>
    </form>
 </body>
 </html>