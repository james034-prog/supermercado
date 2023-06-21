<?php
if(isset($_POST['btnEnviar'])){
$codigo=$_POST['txtCodigo'];
$descripcion=$_POST['txtDescr'];
$marca=$_POST['cboMarca'];
$categoria=$_POST['cboCategoria'];
$precio_costo=$_POST['txtPrecioCosto'];
$precio_venta=$_POST['txtPrecioVenta'];
$stock=$_POST['txtStock'];
$paga_iva=$_POST['chkPagaIva'];
$nivel_azucar=$_POST['rbtNivel'];
$fecha_elab=$_POST['txtFechaElaboracion'];
$info_adic=$_POST['txtInfo'];
$foto=$_POST['imgProducto'];
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
    <label>Fotografia :</label><?php echo $foto;?>
    <hr>
</div>