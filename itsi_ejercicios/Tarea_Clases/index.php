<?php
$numero = 24;
$sumadivisores = 0;
for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $sumadivisores += $i;
        echo "suma = " . $sumadivisores . "<br>";
    }
}
if ($sumadivisores > $numero) {
    echo $numero . " es un número abundante.";
} else {
    echo $numero . " no es un número abundante.";
}
?>