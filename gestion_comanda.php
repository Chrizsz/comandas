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
          <h3 class="box-title">Estatus de comandas</h3>
        </div>
        <div class="box-body">

          <table class="table table-bordered table-striped tablas dt-responsive">

          <thead>

            <tr>


              <th>Solicitado</th>
              <th>Cocinando/Procesando</th>
              <th>Cocinado/Listo</th>
              <th>Entregando</th>
              <th>Entregado</th>
              <th>Pagado</th>
              <th style="width:10px;">Ticket.</th>


            </tr>

          </thead>

          <tbody>

            <?php
            date_default_timezone_set('America/Mexico_City');
            $dia_actual = date('d');
            $mes_actual = date('m');
            $year_actual = date('Y');
            $Q_gestionComanda = "SELECT estatus_pedido.solicitado, estatus_pedido.cocinando, estatus_pedido.cocinado,
            estatus_pedido.llevando, estatus_pedido.llevado, estatus_pedido.pagado, estatus_pedido.id_ticket FROM estatus_pedido
            inner join tickets on estatus_pedido.id_ticket = tickets.id_ticket WHERE extract(day from tickets.fecha)=$dia_actual
            and extract(month from tickets.fecha)=$mes_actual and extract(year from tickets.fecha)=$year_actual";
            $E_gestionComanda = pg_query($conexionCon,$Q_gestionComanda) or die('Error en consulta');
            while ($row = pg_fetch_row($E_gestionComanda)){
              echo '<tr>
                    <td>';

                    if($row[0]=='t'){
                      echo '<button type="button" class="btn btn-success" name="button">Ok</button>';
                    }else{
                      echo '<button type="button" class="btn btn-warning" name="button">En proceso</button>';
                    }

               echo'</td>
                    <td>';
                    if($row[1]=='t'){
                      echo '<button type="button" class="btn btn-success" name="button">Ok</button>';
                    }else{
                      echo '<button type="button" class="btn btn-warning" name="button">En proceso</button>';
                    }
                echo'</td>
                     <td>';
                     if($row[2]=='t'){
                       echo '<button type="button" class="btn btn-success" name="button">Ok</button>';
                     }else{
                       echo '<button type="button" class="btn btn-warning" name="button">En proceso</button>';
                     }
                 echo'</td>
                      <td>';
                      if($row[3]=='t'){
                        echo '<button type="button" class="btn btn-success" name="button">Ok</button>';
                      }else{
                        echo '<button type="button" class="btn btn-warning" name="button">En proceso</button>';
                      }
                  echo'</td>
                       <td>';
                       if($row[4]=='t'){
                         echo '<button type="button" class="btn btn-success" name="button">Ok</button>';
                       }else{
                         echo '<button type="button" class="btn btn-warning" name="button">En proceso</button>';
                       }
                   echo'</td>
                        <td>';
                        if($row[5]=='t'){
                          echo '<button type="button" class="btn btn-success" name="button">Ok</button>';
                        }else{
                          echo '<button type="button" class="btn btn-warning" name="button">En proceso</button>';
                        }
                    echo'</td>
                         <td>';
                        echo $row[6];
                     echo'</td>
                          </tr>';
            }
             ?>

          </tbody>

        </table>

      </div>


    </section>
    <!-- /.content -->
  </div>


  <div id="resultadoModalCobrar"></div>


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
