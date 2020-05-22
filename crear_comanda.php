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
            <h3 class="box-title">Nueva comanda</h3>
          </div>
          <div class="box-body">

            <div class="form-group col-md-12">
              <div class="col-md-3">
                <label for="">Mesa</label>
                <select class="form-control" name="mesa">
                  <option value="">--Selecciona una opción--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
              </div>

              <div class="col-md-3">
                <label for="">Mesero</label>
                <select class="form-control" name="mesero">
                  <option value="">--Selecciona una opción--</option>
                  <?php
                  $Q_Mesero = "SELECT id_empleado, nombres, apellido_paterno from empleados where id_area=3 and id_estatus='t'";
                  $E_Mesero = pg_query($conexionCon,$Q_Mesero) or die('Error en consulta');
                  while ($row = pg_fetch_row($E_Mesero)){
                    echo '<option value="'.$row[0].'">'.$row[1].' '.$row[2].'</option>';
                  }
                   ?>
                </select>
              </div>

              <div class="col-md-3">
                <label for="">Cocinero</label>
                <select class="form-control" name="cocinero">
                  <option value="">--Selecciona una opción--</option>
                  <?php
                  $Q_Cocinero = "SELECT id_empleado, nombres, apellido_paterno from empleados where id_area=2 and id_estatus='t'";
                  $E_Cocinero = pg_query($conexionCon,$Q_Cocinero) or die('Error en consulta');
                  while ($row = pg_fetch_row($E_Cocinero)){
                    echo '<option value="'.$row[0].'">'.$row[1].' '.$row[2].'</option>';
                  }
                   ?>
                </select>
              </div>

              <div class="col-md-3">
                <label for="">Clientes por mesa</label>
                <select class="form-control" id="noClientesMesa" name="noClientesMesa">
                  <option value="">--Selecciona una opción--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>

            </div>

            <div id="resultadoClientesMesa">

            </div>

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
