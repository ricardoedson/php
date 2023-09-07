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
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <?php
                            $contador = 0;
                            while ($contador < 3) {
                        ?>
                        <tr>
                            <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                            <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                            <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                            <td><?php 
                                    echo $aProductos[$contador]["stock"] >10? "Hay stock" : ($aProductos[$contador]["stock"] >0 && 
                                    $aProductos[$contador]["stock"] <=10? "Hay Poco Stock" : "No hay stock"); 
                                ?>  
                            </td>
                            <td><?php echo $aProductos[$contador]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button></td>
                        </tr>
                        
                        <?php
                            $contador++;
                         }  //para cerrar ciclo while ?> 

                        <!--<tr>
                            <td><?php /*echo $aProductos[1]["nombre"]; ?></td>
                            <td><?php echo $aProductos[1]["marca"]; ?></td>
                            <td><?php echo $aProductos[1]["modelo"]; ?></td>
                            <td><?php echo $aProductos[1]["stock"] >10? "Hay stock" : ($aProductos[1]["stock"] >0 && 
                                    $aProductos[1]["stock"] <=10? "Hay Poco Stock" : "No hay stock");?></td>
                            <td><?php echo $aProductos[1]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button></td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[2]["nombre"]; ?></td>
                            <td><?php echo $aProductos[2]["marca"]; ?></td>
                            <td><?php echo $aProductos[2]["modelo"]; ?></td>
                            <td><?php echo $aProductos[2]["stock"] >10? "Hay stock" : ($aProductos[2]["stock"] >0 && 
                                    $aProductos[2]["stock"] <=10? "Hay Poco Stock" : "No hay stock"); ?></td>
                            <td><?php echo $aProductos[2]["precio"]; */ ?> </td>
                            <td><button class="btn btn-primary">Comprar</button></td>
                        </tr>-->
                    </tbody>
                </div>
            </div>
        </table>
    </main>
</body>
</html>