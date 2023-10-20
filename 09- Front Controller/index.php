<?php
// Autocargamos las funciones de controladores
function includeController($controllerName)
{
    require_once "controllers/{$controllerName}.php";
}

// Obtienemos la página desde la variable GET
$page = $_GET["page"] ?? '/';  // Establecemos la página predeterminada como '/' si no se proporciona

// Definimos un array de rutas válidas y sus controladores correspondientes
$routes = [
    '/' => 'homeController',
    'about' => 'aboutController',
    'contact' => 'contactController',
];

// Encontramos el controlador correspondiente para la página
$controllerName = $routes[$page] ?? null;

if ($controllerName) {
    // Incluimos el archivo del controlador
    includeController($controllerName);

    // Llamamos a la función del controlador (simulando una acción)
    $action = 'render';
    if (function_exists($action)) {
        $action();
    } else {
        http_response_code(404);
        echo "Página no encontrada 😐....";
    }
} else {
    // Página no encontrada
    http_response_code(404);
    echo "Página no encontrada 😐";
}
