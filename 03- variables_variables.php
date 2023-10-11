<?php

$nombre = "mi_variable";
$$nombre = "Hola, mundo!";

// echo $mi_variable;

$fruta1 = "manzana";
$fruta2 = "platano";
$fruta3 = "naranja";

for ($i = 1; $i <= 3; $i++) {
    $nombre_variable = "fruta" . $i;
    // echo $$nombre_variable . "<br>";
}

$variable_eliminar = "Esta es una variable que será eliminada";

unset($$variable_eliminar);

if (!isset($$variable_eliminar)) {
    echo "La variable fue eliminada con éxito";
} else {
    echo "La variable aún existe";
}
