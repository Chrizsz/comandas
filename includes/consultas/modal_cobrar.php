<?php

$id_ticket = $_GET['id_ticket'];

include_once '../funciones/conexiones.php';

$Q_CantidadClientes = "SELECT max(cliente) from pedidos where id_ticket=$id_ticket";
$E_CantidadClientes = pg_query($conexionCon,$Q_CantidadClientes) or die('Error en consulta');
while ($row = pg_fetch_row($E_CantidadClientes)){
  $cantidad_clientes = $row[0];
}

$Q_Fecha = "SELECT fecha from tickets where id_ticket=$id_ticket";
$E_Fecha = pg_query($conexionCon,$Q_Fecha) or die('Error en consulta');
while ($row = pg_fetch_row($E_Fecha)){
  $fecha = $row[0];
}

$total_general=0;

echo '
<div class="modal fade" id="modalCobrar">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Ticket '.$id_ticket.'<br>'.$fecha.'</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="includes/back/cobrar.php" method="post">
      <div class="modal-body">';

      for($i=0;$i<$cantidad_clientes;$i++){

        $total=0;



        echo '<h3>Cliente '.($i+1).'</h3>';

        $Q_CuentaPorCliente = "SELECT menu.descripcion, sum(menu.precio), pedidos.cantidad_menu FROM
        menu inner join pedidos on menu.id_menu = pedidos.id_menu
        WHERE id_ticket=$id_ticket and cliente=($i+1) GROUP BY menu.descripcion, pedidos.cantidad_menu, pedidos.id_menu";
        $E_CuentaPorCliente = pg_query($conexionCon,$Q_CuentaPorCliente) or die('Error en consulta');
        while ($row = pg_fetch_row($E_CuentaPorCliente)){
          echo '<div class="form-group col-md-12">

                  <div class="col-md-3">
                    <label for="">Menú</label>
                    <input type="text" class="form-control" name="" value="'.$row[0].'" readonly>
                  </div>

                  <div class="col-md-3">
                    <label for="">Precio</label>
                    <input type="text" class="form-control" name="" value="'.$row[1].'" readonly>
                  </div>

                  <div class="col-md-3">
                    <label for="">Cantidad</label>
                    <input type="text" class="form-control" name="" value="'.$row[2].'" readonly>
                  </div>

                  <div class="col-md-3">
                    <label for="">Total</label>
                    <input type="text" class="form-control" name="" value="'.($row[1]*$row[2]).'" readonly>
                  </div>

                </div>';

                $total+= ($row[1]*$row[2]);
        }

        echo '<div class="form-group col-md-12">

                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>

                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                  <label for="">Gran total</label>
                  <input type="text" class="form-control" name="" value="'.$total.'" readonly>
                </div>

              </div>';

              $total_general += $total;


      }

echo  '<div class="form-group col-md-12">

          <div class="col-md-3">

          </div>

          <div class="col-md-3">

          </div>

          <div class="col-md-3">
            <label for="">Tipo de pago</label>
            <select class="form-control" name="id_tipo_pago">';
            $Q_TipoPago = "SELECT * FROM tipo_pago";
            $E_TipoPago = pg_query($conexionCon,$Q_TipoPago) or die('Error en consulta');
            while ($row = pg_fetch_row($E_TipoPago)){
              echo '<option value="'.$row[0].'">'.$row[1].'</option>';
            }
        echo'</select>
          </div>

          <div class="col-md-3">
            <label for="">Total general</label>
            <input type="text" class="form-control" name="total_general" value="'.$total_general.'" readonly>
            <input type="hidden" class="form-control" name="id_ticket" value="'.$id_ticket.'">
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Cobrar</button>
      </div>
      </form>
    </div>
  </div>
</div>'


 ?>
