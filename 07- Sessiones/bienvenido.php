<?php

session_start();

// Comprobamos si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>
    <h2>Bienvenido: <?= $_SESSION["usuario"]; ?></h2>
    <p>Esta es una página de bienvenida.</p>

    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>

</html>