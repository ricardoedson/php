<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
$aProductos[] = array("nombre" => "Impresora HP Laser",
    "marca" => "HP",
    "modelo" => "P1102W",
    "stock" => 20,
    "precio" => 20000,
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <title>Listado Productos Sumar</title>
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
                            #CON PHP UNICAMENTE
                            $subtotal = 0;
                            for($contador=0; $contador< count($aProductos); $contador++) {
                                $subtotal += $aProductos[$contador]["precio"];
                                echo "<tr>";
                                    echo "<td>" . $aProductos[$contador]["nombre"] . "</td>";
                                    echo "<td>" . $aProductos[$contador]["marca"] . "</td>";
                                    echo "<td>" . $aProductos[$contador]["modelo"] . "</td>";
                                    echo "<td>" .
                                    $aProductos[$contador]["stock"] >10? "Hay stock" : ($aProductos[$contador]["stock"] >0 && 
                                    $aProductos[$contador]["stock"] <=10? "Hay Poco Stock" : "No hay stock") .  
                                    "</td>";
                                    echo "<td>" . $aProductos[$contador]["precio"] . "</td>";
                                    echo "<td><button class='btn btn-primary'>Comprar</button></td>";
                                echo "</tr>";

                            }
                        ?>
                    </tbody>
                </div>
            </div>
        </table>
        <div class="row">
            <div class="col-12">
                
                <?php
                    
                    echo "<h2>El subtotal es: </h2>" . $subtotal;
                
                ?>
            </div>
        </div>
    </main>
</body>
</html>