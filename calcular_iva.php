<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



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
            <div class="col-12">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-6 py-5">
                <form action="" method="post">
                    <div>
                        <label for="">IVA</label>
                        <select name="lstIva" id="lstIva" class="form-control">
                            <option value="10.5">10.5</option>
                            <option value="19">19</option>
                            <option value="21">21</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Precio sin IVA</label>
                        <input type="text" name="txtPrecionSinIva" id="txtPrecioSinIva" class="form-control">
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
            <div class="col-6 py-5">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td>$</td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td>$</td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td>$</td>
                    </tr>
                </table>
            </div>
        </div>

    </main>
    
</body>
</html>