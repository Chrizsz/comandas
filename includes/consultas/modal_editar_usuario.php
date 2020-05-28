<?php

$id_usuario = $_GET['id_usuario'];

include_once '../funciones/conexiones.php';


echo '
<div class="modal fade" id="modalEditarUsuario">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Usuario '.$id_usuario.'</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="includes/back/update_usuario.php" method="post">

      <div class="modal-body">';

        $Q_CuentaPorCliente = "SELECT empleados.usuario, empleados.nombres, empleados.apellido_paterno,
        empleados.apellido_materno, empleados.password, empleados.id_area, area.area FROM empleados
        inner join area on empleados.id_area = area.id_area where empleados.id_empleado=$id_usuario";
        $E_CuentaPorCliente = pg_query($conexionCon,$Q_CuentaPorCliente) or die('Error en consulta');
        while ($row = pg_fetch_row($E_CuentaPorCliente)){


          echo '<div class="form-group col-md-12">
            <input type="hidden" class="form-control" name="id_usuario" value="'.$id_usuario.'">
            <div class="col-md-6">
              <label for="">Usuario</label>
              <input type="text" class="form-control" name="usuario" value="'.$row[0].'" required>
            </div>

            <div class="col-md-6">
              <label for="">Nombres</label>
              <input type="text" class="form-control" name="nombres" value="'.$row[1].'" required>
            </div>



          </div>

          <div class="form-group col-md-12">

            <div class="col-md-6">
              <label for="">Apellido Paterno</label>
              <input type="text" class="form-control" name="ap_paterno" value="'.$row[2].'" required>
            </div>

            <div class="col-md-6">
              <label for="">Apellido Materno</label>
              <input type="text" class="form-control" name="ap_materno" value="'.$row[3].'" required>
            </div>

          </div>

          <div class="form-group col-md-12">

            <div class="col-md-6">
              <label for="">Password</label>
              <input type="text" class="form-control" name="password" value="">
              <input type="hidden" class="form-control" name="password_actual" value="'.$row[4].'" >
            </div>

            <div class="col-md-6">
              <label for="">Área</label>
              <select class="form-control" name="id_area">
              <option value="'.$row[5].'">'.$row[6].'</option>';

                $Q_Area = "SELECT * FROM area where not id_area=$row[5]";
                $E_Area = pg_query($conexionCon,$Q_Area) or die('Error en consulta');
                while ($roww = pg_fetch_row($E_Area)){
                  echo '<option value="'.$roww[0].'">'.$roww[1].'</option>';
                }

        echo '</select>
            </div>


          </div>';


        }

    echo  '
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>

      </form>

    </div>
  </div>
</div>'


 ?>
