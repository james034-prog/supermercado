<?php
$numero = 1234; // Número que se desea verificar

$ultimoDigito = $numero % 10;

if ($ultimoDigito == 4) {
    echo "El número $numero termina en 4.";
} else {
    echo "El número $numero no termina en 4.";
}
?>
