<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definicion
function concatenar($cadena1, $cadena2){
    return "$cadena1 $cadena2";
}
//uso
$resultado = concatenar("El libro", "de la selva");
echo $resultado . "<br>";

function saludar ($nombre, $apellido = "") {
    return "Hola $nombre $apellido";
}
echo saludar("Ricardo", "Ortiz")


?>