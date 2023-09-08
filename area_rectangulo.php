<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function area($base, $altura){
    return $base * $altura;
}
echo "El área es " . area(100, 0.60) . "<br>";
echo "El área es " . area(800, 300);
?>