<?php
function convertirARomano($numero)
{
    $valores = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    
    $resultado = '';
    
    foreach ($valores as $romano => $valor) {
        while ($numero >= $valor) {
            $resultado .= $romano;
            $numero -= $valor;
        }
    }
    
    return $resultado;
}

// Ejemplo de uso
$numero = 1999;
$numeroRomano = convertirARomano($numero);
echo "El número $numero en números romanos es: $numeroRomano";
?>
