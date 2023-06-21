<!-- Ingresar el cliente, producto, precio unitario y cantidad. por temporada se ofrece un 
descuento del 5% si el monto pasa de 100 dólares. se aplica el 14% IVA al subtotal. mostrar
los resultados.-->
<!DOCTYPE html>
<html>
<head> 
    <title>Calculadora de precios</title>
</head>
<body>
    <h1>Calculadora de precios</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cliente">Cliente:</label>
        <input type="text" name="cliente" required><br>

        <label for="producto">Producto:</label>
        <input type="text" name="producto" required><br>

        <label for="precio">Precio unitario:</label>
        <input type="number" name="precio" step="0.01" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cliente = $_POST["cliente"];
        $producto = $_POST["producto"];
        $precio = floatval($_POST["precio"]);
        $cantidad = intval($_POST["cantidad"]);

        $subtotal = $precio * $cantidad;
        $descuento = 0;
        $total = $subtotal;

        if ($subtotal > 100) {
            $descuento = $subtotal * 0.05;
            $total = $subtotal - $descuento;
        }

        $iva = $total * 0.14;
        $totalConIVA = $total + $iva;
        ?>

        <h2>Resultados:</h2>
        <p><strong>Cliente:</strong> <?php echo $cliente; ?></p>
        <p><strong>Producto:</strong> <?php echo $producto; ?></p>
        <p><strong>Precio unitario:</strong> <?php echo $precio; ?></p>
        <p><strong>Cantidad:</strong> <?php echo $cantidad; ?></p>
        <p><strong>Subtotal:</strong> <?php echo $subtotal; ?></p>
        <p><strong>Descuento:</strong> <?php echo $descuento; ?></p>
        <p><strong>Total:</strong> <?php echo $total; ?></p>
        <p><strong>IVA:</strong> <?php echo $iva; ?></p>
        <p><strong>Total con IVA:</strong> <?php echo $totalConIVA; ?></p>
    <?php } ?>
</body>
</html>
