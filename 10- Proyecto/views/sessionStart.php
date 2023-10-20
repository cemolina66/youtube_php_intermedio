<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sessión</title>
</head>

<body>

    <h1>Iniciar Sessión</h1>

    <form action="./controllers/sessionStartController.php" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" name="inicio_sesion" value="Iniciar Sesión">
    </form>
    <a href="?page=registro">Registrarse</a>
</body>

</html>