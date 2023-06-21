<!DOCTYPE html>
<html>
<head>
    <title>Programa PHP con formulario</title>
</head>
<body>
    <h1>Ingrese los valores de a y b</h1>
    <form method="post" action="">
        <label for="a">Valor de a:</label>
        <input type="number" id="a" name="a" required><br>

        <label for="b">Valor de b:</label>
        <input type="number" id="b" name="b" required><br>

        <input type="submit" value="Mostrar números">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores de a y b enviados desde el formulario
        $a = $_POST["a"];
        $b = $_POST["b"];

        // Verificar que a < b
        if ($a >= $b) {
            echo "<p>Error: a debe ser menor que b.</p>";
        } else {
            echo "<h2>Ciclo for:</h2>";
            for ($i = $a; $i <= $b; $i++) {
                echo $i . " ";
            }

            echo "<h2>Ciclo while:</h2>";
            $i = $a;
            while ($i <= $b) {
                echo $i . " ";
                $i++;
            }
        }
    }
    ?>
</body>
</html>

