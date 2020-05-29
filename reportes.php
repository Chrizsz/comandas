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
        Reportes
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ventas</h3>
        </div>
        <div class="box-body">

          <table class="table table-bordered table-striped tablas dt-responsive">

          <thead>

            <tr>

              <th style="width:10px;">Ticket</th>
              <th>fecha</th>
              <th>Total</th>


            </tr>

          </thead>

          <tbody>

            <?php
            date_default_timezone_set('America/Mexico_City');
            $dia_actual = date('d');
            $mes_actual = date('m');
            $year_actual = date('Y');
            $venta_total = 0;
            $Q_VentasDia = "SELECT id_ticket, fecha, total FROM tickets WHERE extract(day from fecha)=$dia_actual
            and extract(month from fecha)=$mes_actual and extract(year from fecha)=$year_actual";
            $E_VentasDia = pg_query($conexionCon,$Q_VentasDia) or die('Error en consulta');
            while ($row = pg_fetch_row($E_VentasDia)){
              echo '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>$ '.$row[2].'</td>
                    </tr>';

                    $venta_total += $row[2];
            }

            echo '<tr>
                  <td><b>Total</b></td>
                  <td></td>
                  <td><b>$ '.$venta_total.'</b></td>
                  </tr>';
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
