<?php

// Ejemplo de limitadores
$cadena = "Hola, que tal?";
$patron = "/Hola/";

if (preg_match($patron, $cadena)) {
    // echo "Se encontro 'Hola' en la cadena";
} else {
    // echo "No se encontro 'Hola' en la cadena";
}

// Ejemplo de los metacaracteres
$patron = "/\d/";
$digito = 123;

if (preg_match($patron, $digito)) {
    // echo "Coincide con un número entero";
} else {
    // echo "No coincide con un número entero";
}

$patron = "/.@yahoo.com/";
$correo = "correo.ejemplo@yahoo.com";

if (preg_match($patron, $correo)) {
    // echo "Coincide con un correo";
} else {
    // echo "No coincide con un correo";
}

// Ejemplo de clases
$patron = "/[0-9][a-zA-Z ]/";
$clases = "Estamos evaluando una clase";
$clases_numeros = "123 ";

if (preg_match($patron, $clases_numeros)) {
    // echo "La cadena coincide";
} else {
    // echo "La cadena no coincide";
}

// Ejemplo de los cuantificadores
$texto = "abc123def";

if (preg_match("/\d/", $texto)) {
    // echo "Hay coincidencias";
} else {
    // echo "No hay coincidencias";
}

$texto = "aaabbbcc";

if (preg_match("/a+b+/", $texto)) {
    // echo "Hay coincidencias";
} else {
    // echo "No hay coincidencias";
}

$texto = "123456";

if (preg_match("/\d{2,6}/", $texto)) {
    // echo "Hay coincidencias";
} else {
    // echo "No hay coincidencias";
}

// Ejemplo de las agrupaciones
$patron = "/\(\d{3}\) \d{3}-\d{4} /";
$patron = "/[(\d{3})] \d{3}-\d{4} /";
$cadena = "(123)  456-7890 ";

if (preg_match($patron, $texto)) {
    // echo "Si que hay coincidencias";
} else {
    // echo "Que no hay coincidencias";
}

// Ejemplo de los modificadores
$texto = "Que tal comunidad";
$patron = "/que/i";

if (preg_match($patron, $texto)) {
    // echo "Si que funciono";
} else {
    // echo "No funciono";
}

// Ejemplo de anclajes
$patron = "/^Hola mundo$/";
$texto = "Hola mundo";

if (preg_match($patron, $texto)) {
    // echo "Si va para adelante";
} else {
    // echo "No te vistas que no vas...";
}

// Ejercicio para encontrar todos los correos en un texto
function encontrarCorreo($texto)
{

    $patron = "/[a-zA-Z0-9._%]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";

    if (preg_match_all($patron, $texto, $matches)) {
        return $matches[0];
    } else {
        return [];
    }
}

$correos = "Hola soy Pepito mi correo personal es pepito@gmail.com y mi correo corporativo es usuario@ejemplo.com y mi otro correo es usuario2@gmail.com pepITO654._%@YahooGmail.como espero te encuentres bien, saludos!";

$correos_encontrados = encontrarCorreo($correo);

if (!empty($correos_encontrados)) {
    echo "Correo encontrados: " . implode(", ", $correos_encontrados);
} else {
    echo "No se encontraron correos";
}
