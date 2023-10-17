<?php


session_start();

$_SESSION["nombre_usuario"] = "Pepito";
$_SESSION["edad"] = 30;
$_SESSION["color_preferido"] = "verde";

dd($_SESSION);

echo "Bienvenido " . $_SESSION["nombre_usuario"];

unset($_SESSION["nombre_usuario"]);

echo "Bienvenido " . $_SESSION["nombre_usuario"];

session_destroy();
