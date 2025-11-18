<?php
require "content.php";
$query = "SELECT * FROM users" ;
 
$result= mysqli_query($content, $query);
print_r($result) ;

foreach($result as $row) {
    echo "<h2>".$row ["name "]." ".$row ["surname"]."</h2>"."<br>";

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
    <h1> Ada </h1>
    <button> <a href="from.php">add new user</a></button>
 </body>
 </html>


 