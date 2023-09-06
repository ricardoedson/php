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
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <table class="table table-hover border my-5">
            <div class="row">
                <div class="col-12">
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <tr>
                        <td><?php echo $aProductos[0]["nombre"]; ?></td>
                        <td><?php echo $aProductos[0]["marca"]; ?></td>
                        <td><?php echo $aProductos[0]["modelo"]; ?></td>
                        <td><?php echo $aProductos[0]["stock"]; ?></td>
                        <td><?php echo $aProductos[0]["precio"]; ?></td>
                        <td><?php  ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[1]["nombre"]; ?></td>
                        <td><?php echo $aProductos[1]["marca"]; ?></td>
                        <td><?php echo $aProductos[1]["modelo"]; ?></td>
                        <td><?php echo $aProductos[1]["stock"]; ?></td>
                        <td><?php echo $aProductos[1]["precio"]; ?></td>
                        <td><?php  ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[2]["nombre"]; ?></td>
                        <td><?php echo $aProductos[2]["marca"]; ?></td>
                        <td><?php echo $aProductos[2]["modelo"]; ?></td>
                        <td><?php echo $aProductos[2]["stock"]; ?></td>
                        <td><?php echo $aProductos[2]["precio"]; ?></td>
                        <td><?php  ?></td>
                    </tr>
                </div>
            </div>
        </table>
    </main>
</body>
</html>