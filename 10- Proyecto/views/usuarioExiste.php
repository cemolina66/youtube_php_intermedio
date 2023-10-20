<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
</head>

<body>
    <h1>El usuario ya existe</h1>

    <form action="../controllers/registerController.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Email: <input type="text" name="email"><br>
        Rol:
        <select name="rol">
            <option value="admin">Administrador</option>
            <option value="usuario">Usuario</option>
        </select><br>
        Contraseña: <input type="password" name="password"><br>
        <input type="submit" value="Registrar">
    </form>
    <a href="../index.php?page=inicio_sesion">Iniciar Sessión</a>
</body>

</html>