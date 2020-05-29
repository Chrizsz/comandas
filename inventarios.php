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
          <h3 class="box-title">Productos</h3><br>
          <button type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#crearProducto">Agregar producto</button>
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
            $Q_ComandaCobrar = "SELECT productos.id_producto, menu.descripcion, productos.precio_compra ,
            productos.cantidad_productos, proveedores.nombre_proveedor
            FROM menu inner join productos on menu.id_menu = productos.id_menu
            inner join proveedores on productos.id_proveedor = proveedores.id_proveedor";
            $E_ComandaCobrar = pg_query($conexionCon,$Q_ComandaCobrar) or die('Error en consulta');
            while ($row = pg_fetch_row($E_ComandaCobrar)){
              echo '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td><input type="number" style="width: 30%;" class="form-control input-sm modificarProducto" idProducto='.$row[0].' name="cantidadProducto" value="'.$row[3].'"</td>
                    <td>'.$row[4].'</td>
                    </tr>';
            }
             ?>

          </tbody>

        </table>

      </div>

    </div>

    </section>
    <!-- /.content -->


    <!-- Modal -->
<div class="modal fade" id="crearProducto">
  <div class="modal-dialog  modal-lg" role="document">

    <form class="" action="includes/back/nuevo_producto.php" method="post">

      <div class="modal-content">
        <div class="modal-header">
          <h4>Nuevo producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group col-md-12">

            <div class="col-md-6">
              <label for="">Descripción</label>
              <input type="text" class="form-control" name="descripcion" value="" required>
            </div>

            <div class="col-md-6">
              <label for="">Cantidad</label>
              <input type="number" class="form-control" name="cantidad" value="" required>
            </div>

          </div>

          <div class="form-group col-md-12">

            <div class="col-md-6">
              <label for="">Precio compra</label>
              <input type="number" class="form-control" name="precio_compra" value="" step="0.01" required>
            </div>

            <div class="col-md-6">
              <label for="">Precio venta</label>
              <input type="number" class="form-control" name="precio_venta" value="" step="0.01" required>
            </div>

          </div>

          <div class="form-group col-md-12">


            <div class="col-md-6">
              <label for="">Proveedor</label>
              <select class="form-control" name="id_proveedor">
                <?php
                $Q_Proveedores = "SELECT id_proveedor, nombre_proveedor FROM proveedores";
                $E_Proveedores = pg_query($conexionCon,$Q_Proveedores) or die('Error en consulta');
                while ($row = pg_fetch_row($E_Proveedores)){
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
<!-- ./wrapper -->


<?php include_once 'includes/templates/footer.php';  ?>
<?php
  else:
  $_SESSION['error_login'] = '¡Error al ingresar sesión!';
  header('location: index.php');
  endif;
 ?>
