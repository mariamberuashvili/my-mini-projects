<?php


class User
 {
public $nombre;
public $apellido;
public $correo;


public function _construct($name, $surname,  $email)
  {
    $this-> nombre=$name;
    $this-> apellido=$surname;
    $this-> correo=$email;
    }

    public function registrarse () {
        echo $this -> nombre . " se he registrado" ."<br>"  
      }
}

$usuario1= new User ("mariam","beruashvili", "beruashvilimariam10@gmail.com") ;
 echo $usuario1->nombre."<br>";
 echo $usuario1->apellido."<br>";
 echo $usuario1->registrarse ()."<br>" ;

 $usuario2= new User ("Gaby", "rosas", "gabyrosas@gmail.com");
 echo $usuario2->nombre."<br>";
 echo $usuario2->apellido."<br>";
 echo $usuario2->registrarse ()."<br>" ;
?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> ADA </h1>
    <p><?=$mariam->nombre?> </p>
    <p><?=$gaby->nombre?> </p>
    <p><?=$mariam->registrarse()?> </p>
    <p><?=$gaby->registrarse()?> </p>
    

    

   
    


</body>
</html>