<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$miAuto = array();
$miAuto = array(
    "patente" => "AA123HB",
    "marca" => "Ford",
);

foreach($miAuto as $clave => $valor){
    echo "La $clave es $valor <br>";
}
?>