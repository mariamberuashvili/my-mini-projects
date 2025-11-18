<?php
require 'connect.php';

$query = "SELECT * FROM `usuario`";

$result = mysqli_query($connection, $query);



?>


<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projecto</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="principal">
        <h1> ADA </h1>
    
    <div class="tarjetas"> 
    <?php foreach($result as $row): ?>
        <div class="tarjeta">
        <img scr='<php echo $row["img"]?>' alt='imagen-usuario'>
        <h2><?php echo $row["nombre"]?> <?php echo $row["apelido"]?></h2>
        <p>Edad: <?php echo $row["edad"]?></p>
        <p>Nacionalidad: <?php echo $row["nacionalidad"]?></p>
        <p>Hobby: <?php echo $row ["hobby"]?></p>
        </div> 
    <?php endforeach; ?>
    </div>
    <button><a href="form.php">Add new user</a></button>

        

    </div>





   
</body>
</html>