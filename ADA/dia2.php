<?php
$nombre="mariam";
echo "hola $nombre /$12"."<br>";

const PI=3.14; 
function saludar($persona) {
    echo "hola $persona"."<br>"
}
saludar("mariam");
saludar("laura");

 function sumar($number1, $number2) {
    return $number1 + $number2
 }
 $resultado =sumar(1,4);
 echo sumar (4, 3)."<br>";
echo $resultado;


$edad = 20;

if($edad>18) {
    echo"soy mayor de edad"."<br>";

} else {
    "spy menor de edad"."<br>"
}

/* coments hacemos asi 
*/

echo $edad >18 ? "soy mayor de edad"."<br>":"soy menor de edad"."<br>";

$dolls = ["Moranguinho", ["Fancy", "Kate", "Luz"], "Emilia", [["Claudia", "Ana", "Sol", "Tiá"], ["Elsa", "Anna", "Bela"]]];
echo $dolls[0]."<br>";
print_r($dolls[3][0][0]."<br>"."<br>");

for ($step=0; step <5; $step++) {
    echo $step."<br>";
}
 $nombres=["laura","mariam","gaby"];
 foreach ($nombre as $patata) {
    echo $patata."<br>";

 }



?>

