<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar($aNotas) {
    $suma = 0;
    foreach($aNotas as $nota) {
        $suma += $nota;

    }
    return $suma / count($aNotas);
}

$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Ana Valle", "notas" => array(7,8));
$aAlumnos[] = array("nombre" => "Bernabe Paz", "notas" => array(5,7));
$aAlumnos[] = array("nombre" => "Lina Paz", "notas" => array(9,6));
$aAlumnos[] = array("nombre" => "Juan Paz", "notas" => array(8,9));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    
    <main class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1>Actas: </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-5">
                <table class="table table-hover border">
                    <thead>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </thead>
                    <tbody>
                        <?php
                        $promCurso = 0;
                        $suma = 0;
                        foreach ($aAlumnos as $alumno) :
                            $promedio = promediar($alumno["notas"]);
                            $suma += $promedio; 

                        ?>
                            <tr>
                                <td><?php  echo $alumno["nombre"];  ?></td>
                                <td><?php  echo $alumno["notas"][0];  ?></td>
                                <td><?php  echo $alumno["notas"][1];  ?></td>
                                <td><?php  echo promediar($alumno["notas"]);  ?></td>
                            </tr>
                        <?php  endforeach;  
                            $promCurso = $suma / count($aAlumnos);
                        ?>
                        
                    </tbody>

                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>El promedio del curso es: <?php  echo number_format($promCurso, 2, ","); ?></p>
            </div>
        </div>
    </main>
    
</body>
</html>