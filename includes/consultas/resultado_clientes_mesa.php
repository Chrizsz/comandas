<?php
include_once '../funciones/conexiones.php';

$noClientesMesa = $_GET['noClientesMesa'];


for($i=0;$i<$noClientesMesa;$i++){

  echo '<div class="form-group col-md-12">
    <h3>Cliente '.($i+1).'</h3>
    <div class="col-md-3">
      <label for="">Platillos</label>
      <select class="form-control" name="platillo'.($i+1).'">
        <option value="">--Selecciona una opción--</option>
        ';
        $Q_Platillo = "SELECT id_menu, descripcion from menu where id_tipo_menu=1";
        $E_Platillo = pg_query($conexionCon,$Q_Platillo) or die('Error en consulta');
        while ($row = pg_fetch_row($E_Platillo)){
          echo '<option value="'.$row[0].'">'.$row[1].'</option>';
        }
echo '</select>
    </div>

    <div class="col-md-3">
      <label for="">Cantidad</label>
      <input type="number" name="cantidadPlatillo'.($i+1).'" class="form-control">
    </div>



</div>

<div class="form-group col-md-12">
  <div class="col-md-3">
    <label for="">Bebidas</label>
    <select class="form-control" name="bebidas'.($i+1).'">
      <option value="">--Selecciona una opción--</option>
      ';
      $Q_Bebidas = "SELECT id_menu, descripcion from menu where id_tipo_menu=3";
      $E_Bebidas = pg_query($conexionCon,$Q_Bebidas) or die('Error en consulta');
      while ($row = pg_fetch_row($E_Bebidas)){
        echo '<option value="'.$row[0].'">'.$row[1].'</option>';
      }
echo '</select>
  </div>

  <div class="col-md-3">
    <label for="">Cantidad</label>
    <input type="number" name="bebidasCantidad'.($i+1).'" class="form-control">
  </div>

</div>

<div class="form-group col-md-12">
  <div class="col-md-3">
    <label for="">Postre</label>
    <select class="form-control" name="postre'.($i+1).'">
      <option value="">--Selecciona una opción--</option>
      ';
      $Q_Platillo = "SELECT id_menu, descripcion from menu where id_tipo_menu=2";
      $E_Platillo = pg_query($conexionCon,$Q_Platillo) or die('Error en consulta');
      while ($row = pg_fetch_row($E_Platillo)){
        echo '<option value="'.$row[0].'">'.$row[1].'</option>';
      }
echo '</select>
  </div>

  <div class="col-md-3">
    <label for="">Cantidad</label>
    <input type="number" name="postreCantidad'.($i+1).'" class="form-control">
  </div>
</div>';
}


 ?>
