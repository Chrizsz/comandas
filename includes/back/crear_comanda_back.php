<?php
include_once '../funciones/conexiones.php';
date_default_timezone_set('America/Mexico_City');

$fecha = date('d-m-Y H:i');
$noClientesMesa = $_POST['noClientesMesa'];
$mesa = $_POST['mesa'];
$mesero = $_POST['mesero'];
$cocinero = $_POST['cocinero'];


$I_Ticket = "INSERT INTO tickets(fecha, cantidad_clientes, mesa, id_mesero, id_cocinero)
values ('$fecha', $noClientesMesa, $mesa, $mesero, $cocinero)";
$E_Ticket = pg_query($conexionCon, $I_Ticket) or die ('Error ingresando datos');

      $Q_IdTicket = "SELECT MAX(id_ticket) from tickets";
      $E_IdTicket = pg_query($conexionCon,$Q_IdTicket) or die('Error en consulta');
      while ($row = pg_fetch_row($E_IdTicket)){
        $idticket = $row[0];
      }

for($i=0;$i<$noClientesMesa;$i++){
  $cliente = ($i+1);
  $platillo = $_POST['platillo'.($i+1)];
  $cantidadPlatillo = $_POST['cantidadPlatillo'.($i+1)];
  $bebidas = $_POST['bebidas'.($i+1)];
  $bebidasCantidad = $_POST['bebidasCantidad'.($i+1)];
  $postre = $_POST['postre'.($i+1)];
  $postreCantidad = $_POST['postreCantidad'.($i+1)];

  $Q_ifProducto = "SELECT producto FROM menu where id_menu=$bebidas";
  $E_ifProducto = pg_query($conexionCon,$Q_ifProducto) or die('Error en consulta');
  while ($row = pg_fetch_row($E_ifProducto)){
    if($row[0]=='t'){

      $Q_cantidadProductos = "SELECT cantidad_productos FROM productos WHERE id_menu=$bebidas";
      $E_cantidadProductos = pg_query($conexionCon,$Q_cantidadProductos) or die('Error en consulta');
      while ($roww = pg_fetch_row($E_cantidadProductos)){
        $cantidadProductos = $roww[0] - $bebidasCantidad;

        $Q_updateProductos = "UPDATE productos SET cantidad_productos=$cantidadProductos WHERE id_menu=$bebidas";
        $E_updateProductos = pg_query($conexionCon,$Q_updateProductos) or die('Error en update');

      }

    }
  }

  $I_Pedidos = "INSERT INTO pedidos(id_ticket, id_menu, cantidad_menu, cliente)
  values ($idticket, $platillo, $cantidadPlatillo, $cliente)";
  $E_Pedidos = pg_query($conexionCon, $I_Pedidos) or die ('Error ingresando datos');

  $I_PedidosBebida = "INSERT INTO pedidos(id_ticket, id_menu, cantidad_menu, cliente)
  values ($idticket, $bebidas, $bebidasCantidad, $cliente)";
  $E_PedidosBebida = pg_query($conexionCon, $I_PedidosBebida) or die ('Error ingresando datos');

  $I_PedidosPostre = "INSERT INTO pedidos(id_ticket, id_menu, cantidad_menu, cliente)
  values ($idticket, $postre, $postreCantidad, $cliente)";
  $E_PedidosPostre = pg_query($conexionCon, $I_PedidosPostre) or die ('Error ingresando datos');

}

$I_Estatus = "INSERT INTO estatus_pedido(solicitado, cocinando, cocinado, llevando, llevado,
  pagado, id_ticket)
values ('1', '0', '0', '0', '0', '0', $idticket)";
$E_Estatus = pg_query($conexionCon, $I_Estatus) or die ('Error ingresando datos');

$Q_Mesa = "UPDATE mesa SET disponible='0' where id_mesa=$mesa";
$E_Mesa = pg_query($conexionCon,$Q_Mesa) or die('Error en update');

header('Location:../../crear_comanda.php');


 ?>
