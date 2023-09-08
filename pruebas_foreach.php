<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aClientes = array(
    array("dni" => "33300012", "nombre" => "Ana Valle"), //posicion 0
    array("dni" => "33300011", "nombre" => "Bernabe pillimue"), //posicion 1
);

foreach($aClientes as $cliente){
    echo "el número " . $cliente["dni"] . "es el \"DNI\" de " . $cliente["nombre"] . "<br>";
}

$miAuto = array();
$miAuto = array(
    "patente" => "AA123HB",
    "marca" => "Ford",
);

foreach($miAuto as $clave => $valor){
    echo "La $clave es $valor <br>";
}
?>