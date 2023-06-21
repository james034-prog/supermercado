<!DOCTYPE html>
<html>
<head>
    <title>Programa PHP con formulario</title>
</head>
<body>
    <h1>Ingrese un número del 1 al 7</h1>
    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" min="1" max="7" required><br>

        <input type="submit" value="Mostrar día">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número enviado desde el formulario
        $numero = $_POST["numero"];

        // Utilizar una estructura switch para mostrar el día correspondiente
        switch ($numero) {
            case 1:
                echo "<p>Lunes</p>";
                break;
            case 2:
                echo "<p>Martes</p>";
                break;
            case 3:
                echo "<p>Miércoles</p>";
                break;
            case 4:
                echo "<p>Jueves</p>";
                break;
            case 5:
                echo "<p>Viernes</p>";
                break;
            case 6:
                echo "<p>Sábado</p>";
                break;
            case 7:
                echo "<p>Domingo</p>";
                break;
            default:
                echo "<p>El número está fuera del rango permitido.</p>";
        }
    }
    ?>
</body>
</html>
