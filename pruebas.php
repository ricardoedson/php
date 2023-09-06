<?php #toda esta informacion va a ir a la memoria ram

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $aAuto = array();
    $aAuto["color"] = array("negro", "verde");
    $aAuto["marca"] = "Ford";
    $aAuto["anio"] = 1908;          #no se escriben ñ por lo que año se cambia por anio
    $aAuto["precio"] = "USD 800 a USD 1000";

    echo "el auto " . $aAuto["marca"]. " del año " . $aAuto["anio"] . " es de color " . $aAuto["color"][1]
    . " y su precio es de " . $aAuto["precio"];  #esto es para contatenar una impresion echo
    //echo $aAuto["color"][0];
    //print_r($aAuto);



/*$miArray = array();
$miArray[0] = 'Hola';
$miArray[37] = 'Chao';
$miArray[] ="Adios"; //lo que hace esto es apenas encuentre una posicion vacia la ocupa o se la asigna a la variable, es decir, la siguiente
$miArray[] ="Buenas tardes";
$miArray[1] ="Hello";
$miArray[] ="Bye";

print_r($miArray);
var_dump($miArray);*/

/*$miArray = array();
$miArray[0] = array();
$miArray[0][0] = "chau";
$miArray[0][1] = "adios";
$miArray[0][2] = "algo";

$miArray = array(
                array("Lu","Ma","Mi","Ju","Vi"),
                array("Curso","libre","curso","libre","curso")
            );

print_r($miArray);*/

?>