<?php

// setcookie("prueba", "pepito");
// setcookie("prueba2", "pepito2");
// setcookie("prueba3", "pepito3");

// echo '<pre>', var_dump($_COOKIE), '</pre>';

// setcookie("prueba", "pepito", time() - 1);
// setcookie("prueba2", "pepito2", time() - 1);
// setcookie("prueba3", "pepito3", time() - 1);

// setcookie("prueba4", "pepito4", time() + 3);

if (!isset($_COOKIE["session"])) {
    setcookie("session", "php");
    // echo "La cookie ha sido creada";
} else {
    // echo "El valor de session ya fue creado con " . $_COOKIE["session"];
}

//Ejemplo 1 visitas de usuario
// Verificamos si la cookie de contador existe
if (isset($_COOKIE["contador"])) {
    // Incremetamos el contador
    $contador = $_COOKIE["contador"] + 1;
} else {
    // Inicializamos el contador si aún no existe la cookie
    $contador = 1;
}

setcookie("contador", $contador, time() - 1);
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

// Ejemplo 2 tema de usuario
$tema = "claro";

if (isset($_POST["tema"])) {
    $tema = $_POST["tema"];

    setcookie("tema_preferido", $tema, time() + 365 * 24 * 3600);
} elseif (isset($_COOKIE["tema_preferido"])) {
    $tema = $_COOKIE["tema_preferido"];
}

////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?= ($tema === "oscuro") ? "#000" : "#fff" ?>;
            color: <?= ($tema === "oscuro") ? "#fff" : "#000" ?>;
        }
    </style>
</head>

<body>
    <h1>Bienvenidos al mundo de las cookies</h1>
    <p>Esta página ha sido visitada por usted <?= $contador ?> veces.</p>

    <hr>

    <form method="post">
        <label>
            <input type="radio" name="tema" value="claro" <?= $tema === "claro" ? "checked" : "" ?>;> Tema claro
        </label>
        <label>
            <input type="radio" name="tema" value="oscuro" <?= $tema === "oscuro" ? "checked" : "" ?>;> Tema oscuro
        </label>
        <button type="submit">Guardar preferencias</button>
    </form>

</body>

</html>