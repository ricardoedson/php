<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    #la fn rand(x,y) genera un numero aleatorio dentro del rango x e y

    $valor = rand(1,5);

    #si el num generado 1, 3, 5 mostrar en pantalla sino mostrar el numero es par 
    
    
    // && = Y
    // || = O

    /*if ($valor==1 || $valor==3 || $valor==5)
    {
        echo "el número $valor es impar";
    } else {
        echo "el número $valor es par";
    }*/

    if ($valor %2==0)
    {
        echo "el número $valor es par";
    } else {
        echo "el número $valor es impar";
    }

    echo $valor==1 || $valor==3 || $valor==5? "El numero $valor es impar" : "El numero $valor es par";



?>