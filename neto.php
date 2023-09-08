<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*Dado un sueldo de $80.000 bruto, restar el 17% correspondiente a cargas sociales y mostrar en pantalla
el sueldo neto, a través de una función. $neto - ($bruto *0.17);*/


function calcularNeto($bruto) {
    /*$neto = $bruto - ($bruto *0.17);
    return  $neto;*/
    return $bruto - ($bruto *0.17);
}

echo "El sueldo neto es $" . calcularNeto(80000);

?>