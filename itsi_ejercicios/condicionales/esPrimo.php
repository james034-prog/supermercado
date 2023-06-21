<?php
$numero = -67; // Número de dos dígitos que se desea verificar

$esPrimo = true;
$esNegativo = false;

if ($numero < 0) {
    $esNegativo = true;
}

if ($numero < 10 && $numero > -10) {
    // Si el número es de un solo dígito, no se considera primo
    $esPrimo = false;
} else {
    // Verificar si el número es divisible por 2, 3, 5 o 7
    if ($numero % 2 == 0 || $numero % 3 == 0 || $numero % 5 == 0 || $numero % 7 == 0) {
        $esPrimo = false;
    }
}

if ($esPrimo) {
    echo "El número $numero es primo.";
} else {
    echo "El número $numero no es primo.";
}

if ($esNegativo) {
    echo " Además, el número $numero es negativo.";
}
?>
