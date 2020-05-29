<?php
include_once '../funciones/conexiones.php';

  $idProducto = $_POST['idProducto'];
  $cantidadProducto = $_POST['cantidadProducto'];


    $Q_ModificarCantidad = "UPDATE productos SET cantidad_productos=$cantidadProducto where id_producto=$idProducto";
    $E_ModificarCantidad = pg_query($conexionCon,$Q_ModificarCantidad) or die('Error en edición');






 ?>
