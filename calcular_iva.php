<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 19;
$precioConIva=0;
$precioSinIva=0;
$ivaCantidad=0;

if($_POST){
    $iva = $_POST ["lstIva"];       //variable global php   
    $precioConIva = ($_POST ["txtPrecioConIva"]) > 0? $_POST ["txtPrecioConIva"]: 0;
    $precioSinIva = ($_POST ["txtPrecioSinIva"]) > 0? $_POST ["txtPrecioSinIva"]: 0;

    //Dado un importe sin iva, Precio con IVA = importe * (21/100+1)
    if ($precioSinIva > 0) {
         $precioConIva = $precioSinIva * ($iva/100+1);
    }

    //Dado un importe con IVA, Precio sin IVA = importe / (21/100+1) (Caso del consumidor final)
    if ($precioConIva > 0) {
        $precioSinIva = $precioConIva / ($iva/100+1);
   }

    $ivaCantidad = $precioConIva - $precioSinIva;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Calcular Iva</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-3 offset-2 py-5">
                <form action="" method="post">
                    <div class="pb-3">
                        <label for="">IVA</label>
                        <select name="lstIva" id="lstIva" class="form-control">     <!--name: para php(backend), y id para frontend-->
                            <option value="10.5">10.5</option>
                            <option value="19" selected>19</option>
                            <option value="21">21</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <label for="">Precio sin IVA</label>
                        <input type="text" name="txtPrecioSinIva" id="txtPrecioSinIva" class="form-control">
                    </div>       
                    <div class="pb-3">
                        <label for="">Precio con IVA</label>
                        <input type="text" name="txtPrecioConIva" id="txtPrecioConIva" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </div>
                </form>
            </div>
            <div class="col-5 pt-5 mt-4">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva;  ?>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td>$ <?php echo number_format($precioSinIva, 2, ",", ".");  ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td>$ <?php echo number_format($precioConIva, 2, ",", ".");  ?></td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td>$ <?php echo number_format($ivaCantidad, 2, ",", ".");  ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </main>
    
</body>
</html>