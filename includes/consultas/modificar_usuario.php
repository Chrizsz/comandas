<?php
include_once '../funciones/conexiones.php';

  $id_usuario = $_POST['id_usuario'];
  $estado = $_POST['estado'];

  if($estado==0 || $estado=='0'){
    $Q_activarProveedor = "UPDATE empleados SET id_estatus='1' where id_empleado=$id_usuario";
    $E_activarProveedor = pg_query($conexionCon,$Q_activarProveedor) or die('Error en edición');
  }else{
    $Q_activarProveedor = "UPDATE empleados SET id_estatus='0' where id_empleado=$id_usuario";
    $E_activarProveedor = pg_query($conexionCon,$Q_activarProveedor) or die('Error en edición');
  }





 ?>
