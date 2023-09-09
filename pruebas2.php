<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST){
    //echo "Se envio el formulario correctamente.";
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    if($usuario == "admin" && $clave =="12345678"){
        header("Location: https://google.com");
    }
    else {
        
        $msg = "Usuario o clave incorrecto.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Prueba formularios</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 p-2">
                <h1>Formulario de ingreso</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 p-2">
                
                <form action="" method="POST">  <!--se puede usar metodo get pero el muestra datos en la URL-->
                    <div class="pb-3">
                        <label for="">Usuario</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Clave</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnIngresar" class="btn btn-primary">INGRESAR</button>
                    </div>
                </form>

                <?php if(isset($msg))
                echo $msg;
                ?>
            </div>
        </div>
    </main>
    
</body>
</html>