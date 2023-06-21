<!DOCTYPE html>
<html>
<head>
    <title>Verificar suma par/impar</title>
</head>
<body>
    <h1>Verificar suma par/impar</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero1">Primer número:</label>
        <input type="number" name="numero1" required><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" name="numero2" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);

        $suma = $numero1 + $numero2;

        ?>

        <h2>Resultados:</h2>
        <p><strong>Primer número:</strong> <?php echo $numero1; ?></p>
        <p><strong>Segundo número:</strong> <?php echo $numero2; ?></p>
        <p><strong>Suma:</strong> <?php echo $suma; ?></p>
        <p><strong>Resultado:</strong> <?php echo ($suma % 2 == 0) ? 'Par' : 'Impar'; ?></p>

    <?php } ?>
</body>
</html>
