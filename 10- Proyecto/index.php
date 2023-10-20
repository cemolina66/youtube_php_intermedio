<?php

session_start();

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "/";
}

switch ($page) {
    case 'registro':
        require "controllers/registerController.php";
        break;
    case 'inicio_sesion':
        require "controllers/sessionStartController.php";
        break;

    default:
        require "controllers/sessionStartController.php";
        break;
}
