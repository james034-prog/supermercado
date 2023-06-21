<!DOCTYPE html>
<html>
<head>
    <title>Validar número de tres dígitos</title>
</head>
<body>
    <h1>Validar número de tres dígitos</h1>

    <?php
    // Verificar si se ha enviado el formulario
    if (isset($_POST['submit'])) {
        $numero = $_POST['numero'];

        // Validar el número de tres dígitos
        if (strlen($numero) == 3 && is_numeric($numero)) {
            $primerDigito = (int)($numero / 100);
            $segundoDigito = (int)(($numero % 100) / 10);
            $tercerDigito = $numero % 10;

            if ($primerDigito != 0 && ($primerDigito % $segundoDigito == 0) && ($primerDigito % $tercerDigito == 0)) {
                echo "<p>El primer dígito ($primerDigito) es múltiplo de los otros dos dígitos.</p>";
            } else {
                echo "<p>El primer dígito ($primerDigito) no es múltiplo de los otros dos dígitos.</p>";
            }
        } else {
            echo "<p>Ingrese un número de tres dígitos válido.</p>";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="numero">Ingrese un número de tres dígitos:</label>
        <input type="number" id="numero" name="numero" required min="100" max="999">
        <button type="submit" name="submit">Validar</button>
    </form>
</body>
</html>
