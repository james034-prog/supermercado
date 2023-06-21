<?php
$calificacion1 = 3;
$calificacion2 = 7;
$calificacion3 = 6;

$promedio = ($calificacion1 + $calificacion2 + $calificacion3) / 3;

if ($promedio >= 7) {
    echo "El alumno ha aprobado el curso con un promedio de " . $promedio;
} else {
    echo "El alumno ha reprobado el curso con un promedio de " . $promedio;
}
?>
