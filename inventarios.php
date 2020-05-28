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
        Inventarios
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Productos</h3>
        </div>
        <div class="box-body">

          <table class="table table-bordered table-striped tablas dt-responsive">

          <thead>

            <tr>

              <th style="width:10px;">Id</th>
              <th>Descripción</th>
              <th>Precio Compra</th>
              <th>Cantidad</th>
              <th>Proveedor</th>


            </tr>

          </thead>

          <tbody>

            <?php
            $Q_ComandaCobrar = "SELECT tickets.id_ticket, tickets.fecha, tickets.cantidad_clientes, tickets.mesa from
            tickets inner join estatus_pedido on tickets.id_ticket = estatus_pedido.id_ticket
            where estatus_pedido.llevado='t'";
            $E_ComandaCobrar = pg_query($conexionCon,$Q_ComandaCobrar) or die('Error en consulta');
            while ($row = pg_fetch_row($E_ComandaCobrar)){
              echo '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td><input type="password" style="width: 30%;" class="form-control input-sm" name="password" value="" required></td>
                    <td></td>
                    </tr>';
            }
             ?>

          </tbody>

        </table>

      </div>

    </div>

    </section>
    <!-- /.content -->




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
