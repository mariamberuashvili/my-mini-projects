 <?php
 
class User
 {
public $nombre;
public $edad;
public $nacionalidad;
public $direction;
}
 
public function _construct($name, $age,  $nationality, $address)
  {
    $this-> nombre=$name;
    $this-> edad=$age;
    $this-> nacionalidad=$nationality;
    $this-> direction=$address;

    }

    public function presentarse () {
        echo $this -> nombre . " me lliamo " ."<br>"  
      }

      $usuario= new User ("mariam",26, "Georgia","barcelona,nou barris") ;
       echo $usuario->nombre."<br>";
       echo $usuario->edad."<br>";
       echo $usuario->nacionalidad."<br>";
       echo $usuario->direction."<br>";
       echo $usuario->presentarse ()."<br>" ;



       <?php
$nosotras= [
   "persona1" => ["nombre" =>  "Laura", "edad"=> 34, "nacionalidad" => "Española"] ,
   "persona2" => [ "nombre" => " Mariam", "edad"=> 26, "nacionalidad" => "Georgia"] ,
   "persona3" =>  [ "nombre" => "Gaby", "edad" =>43, "nacionalidad" => "Mexicana"] ,
]; 


foreach ($nosotras as $persona) {  
   echo $persona["nombre"]." tiene ".$persona["edad"].  " años  y es ".$persona["nacionalidad"]."<br>";}
   

    
    

?>





?>



