<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>MI PAGINA DE PRODUCTOS</h1>
    <hr>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="img/png logo.png" class="card-img-top" alt="...">
            <div class="card-body">
                <form method="get" action="datos2.php" enctype="multipart/form-data"> <!--se envia a la otra pagina  -->
                    <div>
                        <label>Ingrese Codigo :</label>
                        <input type="text" name="txtCodigo" placeholder="solo numeros">
                    </div><br>
                    <div>
                        <label>Ingrese Descripcion :</label>
                        <input type="text" name="txtDescr" maxlength="20">
                    </div><br>
                    <div>
                        <label>Marca</label>
                        <select name="cboMarca" required>
                            <option value="">Seleccione Marca</option>
                            <option value="Gelatina">Rica Gelatina</option>
                            <option value="Sumesa">Sumesa</option>
                            <option value="Family">Familia</option>
                        </select>
                    </div><br>
                    <div>
                        <label>Categorias</label>
                        <select name="cboCategoria" required>
                            <option value="">Seleccione Categoria</option>
                            <option value="Confites">Confites</option>
                            <option value="Licores">Licores</option>
                            <option value="Limpieza">Productos de aseo</option>
                        </select>
                    </div><br>
                    <div>
                        <label>Precio Costo :</label>
                        <input type="number" name="txtPrecioCosto">
                    </div><br>
                    <div>
                        <label>Precio Venta :</label>
                        <input type="number" name="txtPrecioVenta">
                    </div><br>
                    <div>
                        <label>Stock :</label>
                        <input type="number" name="txtStock">
                    </div><br>
                    <div>
                        <input type="checkbox" name="chkPagaIva">
                        <label>Paga Iva</label>
                    </div><br>
                    <div>
                        <input type="radio" name="rbtNivel" value="Alto">
                        <label>Alto</label>
                        <input type="radio" name="rbtNivel" value="Medio">
                        <label>Medio</label>
                        <input type="radio" name="rbtNivel" value="Bajo">
                        <label>Bajo</label>
                    </div><br>
                    <div>
                        <label>Informacion del Producto</label>
                        <textarea name="txtInfo"></textarea>
                    </div><br>
                    <div>
                        <label>Fecha Elaboracion :</label>
                        <input type="date" name="txtFechaElaboracion">
                    </div><br>
                    <div>
                        <img src="img/png logo.png" class="img-circle" height="150" width="150" />
                        <input type="file" name="imgProducto" accept="image/*"><br>
                        <label for="ejemplo_archivo_1">Foto (Tam. maximo archivo 1 MB)</label>
                    </div><br>
                    <div>
                        <button type="submit" name="btnEnviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <a href="datosget.php?cedula=<?php echo '1002003001'; ?>&nom=<?php echo 'PEPITO' ?>">Ejecutar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </div>
</body>

</html>