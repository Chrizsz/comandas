<?php

include_once '../funciones/conexiones.php';

$id_tipo_pago = $_POST['id_tipo_pago'];
$total_general = $_POST['total_general'];
$id_ticket = $_POST['id_ticket'];


$Q_updateUsuario = "UPDATE tickets SET id_tipo_pago=$id_tipo_pago, total=$total_general WHERE id_ticket=$id_ticket";
$E_updateUsuario = pg_query($conexionCon,$Q_updateUsuario) or die('Error en update');

$Q_Mesa = "SELECT mesa FROM tickets where id_ticket=$id_ticket";
$E_Mesa = pg_query($conexionCon,$Q_Mesa) or die('Error en consulta');
while ($row = pg_fetch_row($E_Mesa)){
  $mesa = $row[0];
}

$Q_updateMesa = "UPDATE mesa SET disponible='1' WHERE id_mesa=$mesa";
$E_updateMesa = pg_query($conexionCon,$Q_updateMesa) or die('Error en update');

$Q_updatePagado = "UPDATE estatus_pedido SET pagado='1' where id_ticket=$id_ticket";
$E_updatePagado = pg_query($conexionCon,$Q_updatePagado) or die('Error en update');

header('Location:../../cobrar_comanda.php');
 ?>
