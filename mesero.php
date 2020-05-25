<?php

include_once 'includes/funciones/conexiones.php';
if(isset($_SESSION['usuario'])):

 ?>
<?php include_once 'includes/templates/header.php';  ?>


<?php include_once 'includes/templates/aside_menu.php';  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Comandas
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Platillos para llevar</h3>
          </div>
          <div class="box-body">

            <table class="table table-bordered table-striped tablas dt-responsive">

            <thead>

              <tr>

                <th style="width:10px;">Ticket.</th>
                <th>Platillos</th>
                <th>Cantidad</th>
                <th>Mesa</th>
                <th>Llevar</th>
                <th>Entregado</th>


              </tr>

            </thead>

            <tbody>

              <?php
              $Q_ComandaLlevar = "SELECT tickets.id_ticket, menu.descripcion, sum(pedidos.cantidad_menu), tickets.mesa,
              estatus_pedido.llevando, estatus_pedido.llevado FROM pedidos
              inner join menu on pedidos.id_menu = menu.id_menu
              inner join tickets on pedidos.id_ticket = tickets.id_ticket
			        inner join estatus_pedido on estatus_pedido.id_ticket = pedidos.id_ticket
              where estatus_pedido.cocinado='1' and estatus_pedido.llevado='0'
              group by menu.descripcion, tickets.id_ticket, estatus_pedido.llevando, estatus_pedido.llevado
			        order by tickets.id_ticket ";
              $E_ComandaLlevar = pg_query($conexionCon,$Q_ComandaLlevar) or die('Error en consulta');
              while ($row = pg_fetch_row($E_ComandaLlevar)){
                echo '<tr>
                      <td>'.$row[0].'</td>
                      <td>'.$row[1].'</td>
                      <td>'.$row[2].'</td>
                      <td>'.$row[3].'</td>
                      <td>';
                      if($row[4]=='f'){
                        echo '<a href="includes/consultas/update_llevando.php?id_ticket='.$row[0].'" class="btn btn-warning">Llevar</a>';
                      }else{
                        echo '<button class="btn btn-success btn-xs">Llevando</button>';
                      }
              echo  '</td>
                      <td><a href="includes/consultas/update_llevado.php?id_ticket='.$row[0].'" class="btn btn-warning">Dar por entregado</a></td>
                      <tr/>';
              }
               ?>

              <tr>



              </tr>

            </tbody>

          </table>

        </div>



      </div>




    </section>
    <!-- /.content -->



  <!-- /.content-wrapper -->


  <div class="control-sidebar-bg"></div>
</div>


<!-- ./wrapper -->
<?php include_once 'includes/templates/footer.php';  ?>
<?php
  else:
  $_SESSION['error_login'] = '¡Error al ingresar sesión!';
  header('location: index.php');
  endif;
 ?>
