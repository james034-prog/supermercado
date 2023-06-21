<!-- Escribir un programa que introduzca el año en el rango de 1994 al 2025, y utilice un lazo
para producir un calendario condensado e impreso de forma nítida. Considerar los años
bisiestos.  -->
<?php
$anio = 2020; // Año para el cual se generará el calendario

// Verificar si el año es bisiesto
$esBisiesto = false;
if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)) {
    $esBisiesto = true;
}

// Definir los nombres de los meses
$meses = array(
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
);

// Definir los días de la semana
$diasSemana = array("Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom");

// Obtener el primer día del año
$primerDia = date("N", strtotime("{$anio}-01-01"));

echo "<h1>Calendario {$anio}</h1>";

// Imprimir el calendario para cada mes
for ($mes = 1; $mes <= 12; $mes++) {
    echo "<h2>{$meses[$mes-1]}</h2>";

    // Obtener el número de días del mes
    $numDias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

    // Imprimir los días de la semana
    echo "<table>";
    echo "<tr>";
    for ($d = 0; $d < 7; $d++) {
        echo "<th>{$diasSemana[$d]}</th>";
    }
    echo "</tr>";

    // Imprimir los días del mes
    echo "<tr>";
    $dia = 1;
    for ($d = 1; $d <= 31; $d++) {
        if ($d >= $primerDia && $dia <= $numDias) {
            echo "<td>{$dia}</td>";
            $dia++;
        } else {
            echo "<td></td>";
        }

        if ($d % 7 == 0) {
            echo "</tr><tr>";
        }
    }
    echo "</tr>";
    echo "</table>";
}
?>
