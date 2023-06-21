<?php
if(isset($_GET['btnEnviar'])){
    $codigo=$_GET['txtCodigo'];
    $descripcion=$_GET['txtDescr'];
    $marca=$_GET['cboMarca'];
    $categoria=$_GET['cboCategoria'];
    $precio_costo=$_GET['txtPrecioCosto'];
    $precio_venta=$_GET['txtPrecioVenta'];
    $stock=$_GET['txtStock'];
    $paga_iva=$_GET['chkPagaIva'];
    $nivel_azucar=$_GET['rbtNivel'];
    $fecha_elab=$_GET['txtFechaElaboracion'];
    $info_adic=$_GET['txtInfo'];
    if (isset($_FILES['imgProducto'])) {
        // Verificar si se envió correctamente el archivo
        if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES['imagen']['imgProducto'];
            $rutaTemporal = $_FILES['imagen']['tmp_name'];
    
            // Mover el archivo a una ubicación permanente
            $rutaDestino = "img/" . $nombreArchivo;
            move_uploaded_file($rutaTemporal, $rutaDestino);
    
            echo "La imagen se ha subido correctamente.";
        } else {
            echo "Error al subir la imagen: " . $_FILES['imagen']['error'];
        }
    } else {
        echo "No se ha enviado ninguna imagen.";
    }
  //  $foto=$_GET['imgProducto'];
}else{
    echo "El parámetro no está presente en la URL.";
}
?>
<div>
    <h3>Datos Ingresados</h3>
    <hr>
    <label>Codigo :</label><?php echo $codigo;?>
    <hr>
    <label>Descripcion :</label><?php echo $descripcion;?>
    <hr>
    <label>Marca :</label><?php echo $marca;?>
    <hr>
    <label>Categoria :</label><?php echo $categoria;?>
    <hr>
    <label>Precio Costo :</label><?php echo $precio_costo;?>
    <hr>
    <label>Precio Venta :</label><?php echo $precio_venta;?>
    <hr>
    <label>Stock :</label><?php echo $stock;?>
    <hr>
    <label>Paga IVA :</label><?php echo $paga_iva;?>
    <hr>
    <label>Nivel de Azucar :</label><?php echo $nivel_azucar;?>
    <hr>
    <label>Fecha Elaboracion :</label><?php echo $fecha_elab;?>
    <hr>
    <label>Informacion Adicional :</label><?php echo $info_adic;?>
    <hr>
    <label>Fotografia :</label><?php echo '<img src="' . $rutaDestino . '" alt="Imagen subida">';?>
    <hr>
</div>