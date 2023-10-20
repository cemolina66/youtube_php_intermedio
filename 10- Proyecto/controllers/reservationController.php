<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once("../lib/functions.php");

    $nombre = sanitizeInput($_POST["nombre"]);
    $fecha_entrada = $_POST["fecha_entrada"];
    $fecha_salida = $_POST["fecha_salida"];


    if (validateName($nombre) and validateDates($fecha_entrada, $fecha_salida)) {

        $reservation = reservation($nombre, $fecha_entrada, $fecha_salida);

        if ($reservation) {
            header("Location: ../controllers/perfilController.php");
            exit;
        }
    } else {
        echo "Datos invalidos";
    }
}
