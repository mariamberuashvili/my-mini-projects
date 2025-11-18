<?php

class persona
 {
public $nombre;
public $edad;
public $nacionalidad;
public $direction;

 
 public function __construct ($name, $age,  $nationality, $address)
   {
    $this-> nombre=$name;
    $this-> edad=$age;
    $this-> nacionalidad=$nationality;
    $this-> direction=$address;

    }

    public function saludar ()
     {
         echo  " hola  $this->nombre <br>" ; 
         }


    public function presentarse () {  
        echo "me lliamo $this->nombre tengo $this->edad soy de $this->nacionalidad y vivo de $this->direction <br>" ;
    
    }
    }

    $persona= new persona ("mariam"," 26 años", "Georgia","barcelona,nou barris") ;
       echo $persona->saludar()."<br>";
       echo $persona->presentarse()."<br>";
       
       $nosotras= [
        "persona" => $persona
       ] ;

       foreach ( $nosotras  as $persona) {  
        echo "soy $persona->nombre tengo $persona->edad soy de $persona->nacionalidad y vivo en $persona->direction . <br>";

       }


       ?>