<?php
   include_once "../funciones/funcionesProductos.php";
     
   $datos=getAllProductos();
?>

<?php
include_once "head.php"; 
?>

<h3>Aqui va el CRUD</h3>
<a href="nuevoproducto.php" class="btn btn-primary">Nuevo producto</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descripción</th>
      <th scope="col">P.Costo</th>
      <th scope="col">Marca</th>
      <th scope="col">Categoría</th>
      <th scope="col">Azúcar</th>
      <th scope="col">IVA</th>
      <th scope="col">Foto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php
        if($datos !=null){
            foreach($datos as $indice => $row){
        
      ?>
    <tr>
      <th scope="row"><?php echo $row['id_pro'];?></th>
      <td><?php echo $row['desc_pro'];?></td>
      <td><?php echo $row['precio_c_pro'];?></td>
      <td><?php echo $row['id_marca'];?></td>
      <td><?php echo $row['id_categorias'];?></td>
      <td><?php echo $row['nivel_azucar_pro'];?></td>
      <td><?php echo $row['aplicaIVA_pro'];?></td>
      <td>
          <img src="../img/<?php echo $row['imagen'];?>" width="70" high="70">
        |</td>
      
      
      <td>
          <a href="#" class="btn btn-sm btn-info">Ver</a>
          <a href="#" class="btn btn-sm btn-warning">Editar</a>
          <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
      </td>
    </tr>
    <?php
            } //foreach
        } //if
    ?>
  </tbody>
</table>


<?php
include_once "footer.php";
?>