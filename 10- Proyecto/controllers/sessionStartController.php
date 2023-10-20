<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once("../lib/functions.php");

    $email = sanitizeInput($_POST["email"]);
    $contrasenia = sanitizeInput($_POST["password"]);

    if (validateEmail($email) and validatePassword($contrasenia)) {

        $hashed_password = password_hash($contrasenia, PASSWORD_DEFAULT);

        if (password_verify($contrasenia, $hashed_password)) {

            session_start();

            $_SESSION["usuario"] = $email;

            $usuario = $_SESSION["usuario"];

            require_once("perfilController.php");
        }
    } else {
        header("Location: ..");
    }
} else {
    require_once("views/sessionStart.php");
}
