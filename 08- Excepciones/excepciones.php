<?php

echo "Empezamos el camino...<br>";

// $resultado = 10 / 0;
// echo $resultado;

// throw new Exception("Este es un mensaje de excepción 😐");

try {
    // echo "Si funciono papa<br>";
    throw new Exception("Este es un mensaje de excepción 😐");
} catch (Throwable $error) {
    echo "Aqui tenemos el error: " . $error->getLine() . "<br>";
} catch (Throwable $error) {
    echo "Aqui tenemos el error: " . $error->getMessage() . "<br>";
} catch (Throwable $error) {
    echo "Aqui tenemos el error: " . $error->getMessage() . "<br>";
} catch (Throwable $error) {
    echo "Aqui tenemos el error: " . $error->getMessage() . "<br>";
} finally {
    echo "Siempre será ejecutado sin importar nada<br>";
}

echo "Sigo con mi vida<br>";



// Ejercicio para simular una calculadora y lanzará excepciones si se intenta realizar una operación no admitida.
function sumar($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Ambos operandos deben ser números.");
    }
    return $num1 + $num2;
}

function restar($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Ambos operandos deben ser números.");
    }
    return $num1 - $num2;
}

function multiplicar($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Ambos operandos deben ser números.");
    }
    return $num1 * $num2;
}

function dividir($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Ambos operandos deben ser números.");
    }
    if ($num2 == 0) {
        throw new DivisionByZeroError("No se puede dividir entre cero.");
    }
    return $num1 / $num2;
}

try {

    $resultadoSuma = sumar(5, 8);
    echo "Resultado de la suma: $resultadoSuma<br>";

    $resultadoDivision = dividir(100, 10);
    echo "Resultado de la división: $resultadoDivision<br>";

    $numero = 5;
    if ($numero < 10) {
        throw new Exception("Este es un error no manejado.");
    }
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage(), $e->getLine();
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage();
} catch (Exception $e) {
    echo "Ocurrió una excepción no manejada: " . $e->getMessage();
}

echo "<br>Sigo con mi vida 2<br>";
