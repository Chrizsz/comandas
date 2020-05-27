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
        Gestión de usuarios
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Usuarios</h3> <br>
          <button type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#crearUsuarios">Agregar usuario</button>
        </div>
        <div class="box-body">

          <table class="table table-bordered table-striped tablas dt-responsive">

          <thead>

            <tr>

              <th style="width:10px;">No.</th>
              <th>Nombre</th>
              <th>Usuario</th>

              <th>Área</th>
              <th>Estado</th>

              <th>Editar</th>

            </tr>

          </thead>

          <tbody>

            <?php
            $Q_Usuarios = "SELECT empleados.id_empleado, empleados.nombres, empleados.apellido_paterno,
            empleados.apellido_materno, empleados.usuario, area.area, empleados.id_estatus FROM
            empleados inner join area on empleados.id_area = area.id_area order by empleados.id_empleado";
            $E_Usuarios = pg_query($conexionCon,$Q_Usuarios) or die('Error en consulta');
            while ($row = pg_fetch_row($E_Usuarios)){
              echo '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].' '.$row[2].' '.$row[3].'</td>
                    <td>'.$row[4].'</td>
                    <td>'.$row[5].'</td>
                    <td>';
                    if($row[6]=='t'){
                      echo '<button class="btn btn-success btn-xs btnActivar" idUsuario='.$row[0].' estadoUsuario="1">Activado</button>';
                    }else{
                      echo '<button class="btn btn-danger btn-xs btnActivar" idUsuario='.$row[0].' estadoUsuario="0">Desactivado</button>';
                    }

              echo'</td>
                    <td><div class="btn-group">

                      <button class="btn btn-warning" onclick="editarUsuario('.$row[0].')"><i class="fa fa-pencil"></i></button>

                    </div></td>
                    <tr/>';
            }
             ?>


          </tbody>

        </table>

        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

    <div id="resultadoEditarUsuario"></div>

    <!-- Modal -->
<div class="modal fade" id="crearUsuarios">
  <div class="modal-dialog  modal-lg" role="document">

    <form class="" action="includes/back/usuario_nuevo.php" method="post">

      <div class="modal-content">
        <div class="modal-header">
          <h4>Nuevo usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group col-md-12">

            <div class="col-md-6">
              <label for="">Usuario</label>
              <input type="text" class="form-control" name="usuario" value="" required>
            </div>

            <div class="col-md-6">
              <label for="">Nombres</label>
              <input type="text" class="form-control" name="nombres" value="" required>
            </div>



          </div>

          <div class="form-group col-md-12">

            <div class="col-md-6">
              <label for="">Apellido Paterno</label>
              <input type="text" class="form-control" name="ap_paterno" value="" required>
            </div>

            <div class="col-md-6">
              <label for="">Apellido Materno</label>
              <input type="text" class="form-control" name="ap_materno" value="" required>
            </div>

          </div>

          <div class="form-group col-md-12">

            <div class="col-md-6">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" value="" required>
            </div>

            <div class="col-md-6">
              <label for="">Área</label>
              <select class="form-control" name="id_area">
                <?php
                $Q_Area = "SELECT * FROM area";
                $E_Area = pg_query($conexionCon,$Q_Area) or die('Error en consulta');
                while ($row = pg_fetch_row($E_Area)){
                  echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                }
                 ?>
              </select>
            </div>


          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>

    </form>

  </div>
</div>

  <div class="control-sidebar-bg"></div>
</div>
<!-- /.content-wrapper -->

<!-- ./wrapper -->
<?php include_once 'includes/templates/footer.php';  ?>
<?php
  else:
  $_SESSION['error_login'] = '¡Error al ingresar sesión!';
  header('location: index.php');
  endif;
 ?>
