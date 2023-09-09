<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$aEmpleados = array();
$aEmpleados[] = array(
    "dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30
);  
$aEmpleados[] = array(
    "dni" => 40874456, "nombre" => "Ana del Valle", "bruto" => 90000
);

$aEmpleados[] = array(
    "dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000
);    
$aEmpleados[] = array(
    "dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000
);
$aEmpleados[] = array(
    "dni" => 75778945, "nombre" => "Laura Valdez", "bruto" => 150000.55
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Listado de empleados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($aEmpleados as $empleado) { ?>
                        <tr>
                            <td><?php echo $empleado["dni"]; ?></td>

                            <td ><?php echo mb_strtoupper($empleado["nombre"]); ?></td>  <!-- style="text-transform: uppercase;"-->
                                                    <!--$importe(variable), decimales, separador_decimales, sep_miles-->
                            <td><?php echo "$" . number_format($empleado["bruto"], 2, ",", "."); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-12 py-3">
                        <p>cantidad de empleados activos: <?php echo count($aEmpleados) ?></p>
                        <//?php  
                            //funcion
                            function contar($array)
                            {                                       //forma larga de solucionar
                                $i = 0;
                                foreach($array as $item)
                                {
                                    $i++;
                                }
                                return $i;
                            }
                            echo "Cantidad de empleados activos: " . contar($aEmpleados);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>