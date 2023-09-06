<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Mostrar en pantalla un listado de productos indicando si hay poco stock (<=10), sin stock (0) o hay stock(>10)
//de electrodomesticos

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

//print_r($aProductos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Listado Productos</title>
</head>
<body>
    <main>

    </main>
</body>
</html>