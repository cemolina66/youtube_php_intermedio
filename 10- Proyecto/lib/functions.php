<?php

function userRegister($usuario, $password, $email)
{

    $usuarios = include_once("../data/users.php");

    foreach ($usuarios as $u) {
        if ($u["usuario"] === $usuario || $u["email"] === $email) {
            return false;
        }
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $nuevo_usuario = [
        "usuario" => $usuario,
        "email" => $email,
        "password" => $hashed_password
    ];

    $usuarios[] = $nuevo_usuario;

    $php_code = "<?php\nreturn " . var_export($usuarios, true) . ";\n";
    file_put_contents("../data/users.php", $php_code);

    return true;
}

function reservation($nombre, $fecha_entrada, $fecha_salida)
{
    $reservations = include_once("../data/hotel_reservations.php");

    $new_reservation = [
        "nombre" => $nombre,
        "fecha_entrada" => $fecha_entrada,
        "fecha_salida" => $fecha_salida
    ];

    $reservations[] = $new_reservation;

    $booking = "<?php\nreturn " . var_export($reservations, true) . ";\n";
    file_put_contents("../data/hotel_reservations.php", $booking);

    return true;
}


function sanitizeInput($input)
{
    return htmlspecialchars(trim($input));
}

function validateName($name)
{
    return preg_match("/[a-zA-Z ]{2,}$/", $name);
}

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateRol($rol)
{
    return in_array($rol, ["usuario", "admin"]);
}

function validatePassword($password)
{
    return strlen($password) >= 6;
}

function validateDates($start, $end)
{
    $today = date("Y-m-d");
    return $start >= $today and $end > $start;
}
