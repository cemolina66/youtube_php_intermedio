<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once("../lib/functions.php");

    $nombre = sanitizeInput($_POST["nombre"]);
    $email = sanitizeInput($_POST["email"]);
    $rol = $_POST["rol"];
    $password = $_POST["password"];

    if (validateName($nombre) and validateEmail($email) and validateRol($rol) and validatePassword($password)) {

        if (userRegister($nombre, $contrasenia, $email) === false) {
            header("Location: ../views/usuarioExiste.php");
            exit;
        }

        header("Location: ../index.php?page=inicio_sesion");
        exit;
    } else {
        header("Location: ../views/datosInvalidos.php");
        exit;
    }
} else {
    require_once("views/register.php");
}
