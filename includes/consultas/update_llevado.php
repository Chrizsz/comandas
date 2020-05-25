<?php

$id_ticket = $_GET['id_ticket'];

include_once '../funciones/conexiones.php';

$Q_Cocinando = "UPDATE estatus_pedido SET llevado='1' where id_ticket=$id_ticket";
$E_Cocinando = pg_query($conexionCon,$Q_Cocinando) or die('Error en update');

header('Location:../../mesero.php');



 ?>
