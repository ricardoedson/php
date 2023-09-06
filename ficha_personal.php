<?php

    date_default_timezone_set("America/Bogota");

    $nombre = "Edson Ortiz";
    $edad = 22;
    //$aPeliculas = array("Spider man", "avantar", "One piece");                 //"a" indica un array es un listado y el resto es el nombre de la variable
    $aPeliculas = ["Spider man", "avantar", "One piece"]; //otra forma de nombrar arrays

    /*print_r($aPeliculas);      #es una funcion para analizar contenido de variables, 
    print_r($aPeliculas[0]);                       #lo imprime todo sean numericas array y su estructura
    echo $aPeliculas[0];    #echo para un solo dato y para mostrar
    var_dump($aPeliculas); #mas detalles*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Ficha personal</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>FICHA PERSONAL</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo date("d/m/Y"); ?></td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre ?></td>
                    </tr>
                    <tr>
                        <th >Edad:</th>
                        <td><?php echo $edad ?></td>
                    </tr>
                    <tr>
                        <th>Peliculas favoritas:</th>
                        <td>
                            <?php echo $aPeliculas[0]; ?> <br>
                            <?php echo $aPeliculas[1]; ?> <br>
                            <?php echo $aPeliculas[2]; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>