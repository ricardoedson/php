<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
 
if(isset($_SESSION["listadoClientes"])){
    //Si existe la variable de session listadoClientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}

//print_r($_SESSION);
if($_POST){
    print_r($_POST);
    //si hace click en enviar, entonces: 
    if(isset($_POST["btnEnviar"])){
    //asignamos variables de los datos del formulario que viene
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];
    //creamos un array que contendrá el listado de clientes
    $aClientes[] = array("nombre" => $nombre, 
                            "dni" => $dni,
                            "telefono" => $telefono,
                            "edad" => $edad
        );
                    //actualizar el contenido de variable de session
                    $_SESSION["listadoClientes"] = $aClientes;

    }

    //si hace click en eliminar, entonces:
    if(isset($_POST["btnEliminar"])){
    //session_destroy();
        session_destroy();      //elimina session pero no borra datos del array:
        $aClientes = array();  //sobreescribe el valor del array a vacio para no dar click eliminar 2 veces
    }



    //Agregar para eliminar una fila
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Tabla Clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1">
                <form action="" method="post" class="form">
                    
                        <label for="">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control my-2" placeholder="Ingrese el nombre y apellido">
                    
                        <label for="">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control my-2">
                    
                        <label for="">Teléfono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control my-2">
                    
                        <label for="">Edad:</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control my-2">
                    
                        <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
                    
                </form>
            </div>
            <div class="col-6 ms-5">
                <table class="table table-hover border shadow">
                    <thead>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente): ?>
                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                                <td>
                                    <form action="" method="POST">
                                        <button type="submit" name="btnEliminar_<?php echo $pos; ?>" class="btn btn-outline-warning"><i class="bi bi-trash"></i></button>  
                                    </form>  
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>