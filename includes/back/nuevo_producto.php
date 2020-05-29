<?php

include_once '../funciones/conexiones.php';


/*Menu*/
$precio_venta = $_POST['precio_venta'];
$descripcion = $_POST['descripcion'];
$id_tipo_menu = 3;

/*Productos*/
$cantidad = $_POST['cantidad'];
$precio_compra = $_POST['precio_compra'];
$id_proveedor = $_POST['id_proveedor'];



$I_Menu = "INSERT INTO menu(precio, descripcion, id_tipo_menu, producto)
values ($precio_venta, '$descripcion', $id_tipo_menu, '1')";
$E_Menu = pg_query($conexionCon, $I_Menu) or die ('Error ingresando datos de usuario');

$Q_IdMenu = "SELECT MAX(id_menu) from menu";
$E_IdMenu = pg_query($conexionCon,$Q_IdMenu) or die('Error en consulta');
while ($row = pg_fetch_row($E_IdMenu)){
  $id_menu = $row[0];
}

$I_Productos = "INSERT INTO productos(cantidad_productos, precio_compra, id_proveedor, id_menu)
values ($cantidad, $precio_compra, $id_proveedor, $id_menu)";
$E_Productos = pg_query($conexionCon, $I_Productos) or die ('Error ingresando datos de usuario');

header('Location: ../../inventarios.php');

 ?>
