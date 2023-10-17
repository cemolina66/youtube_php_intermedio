<?php

session_start();

// Comprobamos si el usuario ya ha iniciado sesión
if (isset($_SESSION["usuario"])) {
    header("Location: bienvenido.php");
    exit;
}

// Comprobamos si se envió el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Validar las credenciales (en este ejemplo, usuario: "usuario" y contraseña: "contrasena")
    if ($usuario === "usuario" and $contrasena === "contrasena") {
        $_SESSION["usuario"] = $usuario;
        header("Location: bienvenido.php");
        exit;
    } else {
        $mensaje_error = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>

<body>
    <h2>Iniciar sesión</h2>

    <?php if (isset($mensaje_error)) : ?>
        <p style="color:red"><?= $mensaje_error ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>

</html>