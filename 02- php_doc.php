<?php

/**
 * Calcular la suma de 2 números
 * 
 * Esta función toma los 2 argumentos de entrada $a y $b, los suma y retorna la suma de ambos números
 * 
 * @param int $a
 * @param int $b
 * 
 * @return int la suma de 2 números
 */
function sumar($a, $b)
{
    return $a + $b;
}

/**
 * Realiza la busqueda de los registros de un usuario
 *
 * Este método busca usuarios en la base de datos cuyos nombres coincidan parcial o totalmente con el nombre proporcionado
 * 
 * @param string $nombre
 * @param integer $limite
 * @return array
 */
function buscarUsuarioPorNombre(string $nombre, int $limite = 10): array
{
    return [];
}


/**
 * The function encontrarCorreo is used to find and return all email addresses in a given text.
 * 
 * @param texto The parameter "texto" is a string that represents the text in which we want to find
 * email addresses.
 * 
 * @return The function encontrarCorreo returns an array of email addresses found in the given text. If
 * no email addresses are found, it returns an empty array.
 */
function encontrarCorreo($texto)
{

    $patron = "/[a-zA-Z0-9._%]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";

    if (preg_match_all($patron, $texto, $matches)) {
        return $matches[0];
    } else {
        return [];
    }
}
