<?php
function convertirABinario($numero)
{
    $resultado = '';
    
    while ($numero > 0) {
        $resultado = ($numero % 2) . $resultado;
        $numero = (int) ($numero / 2);
    }
    
    return $resultado;
}

// Ejemplo de uso
$numero = 25;
$numeroBinario = convertirABinario($numero);
echo "El número $numero en binario es: $numeroBinario";
?>
