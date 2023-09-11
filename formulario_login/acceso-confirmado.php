<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*if ($_POST) {
    $salir = $_POST["btn-salir"];
    header ("location index.php"); 
}*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Bienvendo</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pb-3 pt-5">
                <h1>Bienvenido(a) al sistema</h1>
            </div>
            <div class="col-12 pb-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam dolore iusto est placeat nam? 
                Dolorem quis beatae animi recusandae aperiam, laudantium quaerat, nisi quidem quod magni odit, blanditiis atque?</p>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-outline-warning"><a href="index.php" class="text-decoration-none">SALIR</a></button>

            </div>
        </div>
    </main>
    
</body>
</html>