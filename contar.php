<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definicion
function contar($aArray) {
    $contador = 0;
    foreach($aArray as $item){     //para contar los arrays como la funcion count
        $contador++;
    }
    return $contador;
}
//uso 

$aNotas = array(9, 8, 9.5, 4, 7, 8);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombreApellido" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.5,
    );
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombreApellido" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
    ) ;
$aPacientes[] = array(
        "dni" => "23.684.386",
        "nombreApellido" => "Juan Irraola",
        "edad" => 28,
        "peso" => 79,
        ) ;
$aPacientes[] = array(
        "dni" => "23.684.387",
        "nombreApellido" => "Beatriz Ocampo",
        "edad" => 50,
        "peso" => 80,
            ) ;
$aPacientes[] = array(
    "dni" => "23.684.388",
    "nombreApellido" => "Juan Barragan",
    "edad" => 33,
    "peso" => 75,
        ) ;

$aProductos = array();
$aProductos[] = array("nombre" => "Smart Tv 55\" 4k UHD",
            "marca" => "Hitachi",
            "modelo" => "554KS20",
            "stock" => 60,
            "precio" => 58000,
        );
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
            "marca" => "Samsung",
            "modelo" => "A30",
            "stock" => 0,
            "precio" => 22000,
        );
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frio/calor Surrey 2900F",
            "marca" => "Surrey",
            "modelo" => "553AIQ1201E",
            "stock" => 5,
            "precio" => 45000,
        );
$aProductos[] = array("nombre" => "pantalla",
            "marca" => "Surrey",
            "modelo" => "553AIQ1201E",
            "stock" => 5,
            "precio" => 45000,
        );

echo "Cantidad de pacientes: " . contar($aPacientes) . "<br>";
echo "Cantidad de productos: " . contar($aProductos) . "<br>";
echo "Cantidad de notas: " . contar($aNotas);

?>