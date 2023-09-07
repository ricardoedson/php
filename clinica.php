<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

    //var_dump($aPacientes);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Clinica Nutricion S.A</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border my-2">
                    <thead>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </thead>
                    <tbody>
                        <?php

                        for ($cont=0; $cont < count($aPacientes); $cont++){
                        echo "<tr>";
                        echo "<td>". $aPacientes[$cont]["dni"] . "</td>";
                        echo "<td>". $aPacientes[$cont]["nombreApellido"] . "</td>";
                        echo "<td>". $aPacientes[$cont]["edad"] . "</td>";
                        echo "<td>". $aPacientes[$cont]["peso"] . "</td>";
                        echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>