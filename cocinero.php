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

      <form action="includes/back/crear_comanda_back.php" method="post">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Platillos pendientes</h3>
          </div>
          <div class="box-body">

            <table class="table table-bordered table-striped tablas dt-responsive">

            <thead>

              <tr>

                <th style="width:10px;">No.</th>
                <th>Mesa</th>
                <th>Platillos</th>
                <th>Preparar</th>
                <th>Listo</th>


              </tr>

            </thead>

            <tbody>

              <?php
              $Q_ComandaCocinar = "SELECT tickets.id_ticket, menu.descripcion, sum(pedidos.cantidad_menu), tickets.mesa FROM pedidos
              inner join menu on pedidos.id_menu = menu.id_menu
              inner join tickets on pedidos.id_ticket = tickets.id_ticket where tickets.id_ticket=1
              group by menu.descripcion, tickets.id_ticket";
              $E_ComandaCocinar = pg_query($conexionCon,$Q_ComandaCocinar) or die('Error en consulta');
              while ($row = pg_fetch_row($E_ComandaCocinar)){
                echo 'pendiente';
              }
               ?>

              <tr>

                <td>1</td>
                <td>5</td>
                <td>Jorge</td>
                <td>Christian</td>
                <td>Cocinando...</td>
                <td><button class="btn btn-success btn-xs">Pagado</button></td>

              </tr>

            </tbody>

          </table>

        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right">Aceptar</button>
        </div>

      </div>

      </form>


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
