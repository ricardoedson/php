<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Definicion

function maximo($aVector) {
    $max=0;
    foreach($aVector as $vector) {
        if($max < $vector){
            $max = $vector;
        }
        
    }
    return $max; 
}
//Uso
$aNotas = array(8, 4, 5, 3, 9, 1);
$aSueldos = array(800, 400, 500, 3000, 900, 1000);
echo "El numero maximo es " . maximo($aNotas) . "<br>";
echo "El número maximo es " . maximo($aSueldos) . "<br>";

?>