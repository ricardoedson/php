<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $stock = 800;
    //si el stock es mayor que 0, entonces;
    //imprime "hay stock"
    //sino
    //no hay stock

    if ($stock > 0)
    {
        echo "Hay stock";
    }
    else 
    {
        echo "No hay stock";
    }
    echo "EYYY"
?>