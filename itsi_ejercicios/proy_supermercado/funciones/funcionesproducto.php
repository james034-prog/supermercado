<?php
include_once"../config/conectarbd.php"; //nos conectamos a la configuracion y base de datos.
//RETORNA UNA LISTA (VARIOS REGISTROS)
function getAllProductos()
{
  try {
    $sql = "SELECT * FROM tab_productos 
        ORDER BY pro_descripcion";
    $conexion = conectaBaseDatos();
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    } else
      return null;
  } catch (PDOException $e) {
    echo $e->getMessage();
    return null;
  }
}


?>