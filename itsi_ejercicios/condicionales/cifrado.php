<?php
$numero = 1234; // Número entero de cuatro dígitos a cifrar y descifrar

// Cifrado del número
$primerDigito = ($numero % 10000 / 1000 + 7) % 10;
$segundoDigito = ($numero % 1000 / 100 + 7) % 10;
$tercerDigito = ($numero % 100 / 10 + 7) % 10;
$cuartoDigito = ($numero % 10 + 7) % 10;

$cifrado = $tercerDigito * 1000 + $cuartoDigito * 100 + $primerDigito * 10 + $segundoDigito;

echo "Número cifrado: $cifrado\n";

// Descifrado del número cifrado
$primerDigitoOriginal = ($cifrado % 10000 / 1000 + 3) % 10;
$segundoDigitoOriginal = ($cifrado % 1000 / 100 + 3) % 10;
$tercerDigitoOriginal = ($cifrado % 100 / 10 + 3) % 10;
$cuartoDigitoOriginal = ($cifrado % 10 + 3) % 10;

$numeroOriginal = $tercerDigitoOriginal * 1000 + $cuartoDigitoOriginal * 100 + $primerDigitoOriginal * 10 + $segundoDigitoOriginal;

echo "Número original: $numeroOriginal";
?>
