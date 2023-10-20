<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>

    <p>Bienvenido</p>

    <h1>Reserva de habitación</h1>

    <form action="reservationController.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Fecha de entrada: <input type="date" name="fecha_entrada"><br>
        Fecha de salida: <input type="date" name="fecha_salida"><br>
        <input type="submit" value="Reservar">
    </form>
    <a href="../controllers/sessionCloseController.php">Cerrar Sesión</a>
</body>

</html>