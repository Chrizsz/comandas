<?php

// include_once 'includes/funciones/conexiones.php';
// if(isset($_SESSION['usuario'])):

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
          <h3 class="box-title">Nueva comanda</h3>
        </div>
        <div class="box-body">

          <div class="form-group col-md-12">
            <div class="col-md-3">
              <label for="">Mesa</label>
              <select class="form-control" name="">
                <option value="">--Selecciona una opción--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
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

          <!-- <div class="form-group col-md-12">
            <h3>Cliente 1</h3>
            <div class="col-md-3">
              <label for="">Platillos</label>
              <select class="form-control" name="">
                <option value="">--Selecciona una opción--</option>
                <option value="1">Arrachera</option>
                <option value="2">Hamburguesa</option>
                <option value="3">Pizza</option>
                <option value="4">Tacos</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="">Cantidad</label>
              <input type="number" name="" class="form-control">
            </div>



        </div>

        <div class="form-group col-md-12">
          <div class="col-md-3">
            <label for="">Bebidas</label>
            <select class="form-control" name="">
              <option value="">--Selecciona una opción--</option>
              <option value="1">Refresco</option>
              <option value="2">Agua de sabor</option>
              <option value="3">Cerveza</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="">Cantidad</label>
            <input type="number" name="" class="form-control">
          </div>

        </div>

        <div class="form-group col-md-12">
          <div class="col-md-3">
            <label for="">Postre</label>
            <select class="form-control" name="">
              <option value="">--Selecciona una opción--</option>
              <option value="1">Pay</option>
              <option value="2">Gelatina</option>
              <option value="3">Chocolate</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="">Cantidad</label>
            <input type="number" name="" class="form-control">
          </div>
        </div> -->

      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Aceptar</button>
      </div>


    </section>
    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->


  <div class="control-sidebar-bg"></div>
</div>


<!-- ./wrapper -->
<?php include_once 'includes/templates/footer.php';  ?>
<?php
  // else:
  // $_SESSION['error_login'] = '¡Error al ingresar sesión!';
  // header('location: index.php');
  // endif;
 ?>
