<?php


$noClientesMesa = $_GET['noClientesMesa'];


for($i=0;$i<$noClientesMesa;$i++){

  echo '<div class="form-group col-md-12">
    <h3>Cliente '.($i+1).'</h3>
    <div class="col-md-3">
      <label for="">Platillos</label>
      <select class="form-control" name="platillo'.($i+1).'">
        <option value="">--Selecciona una opción--</option>
        <option value="1">Arrachera</option>
        <option value="2">Hamburguesa</option>
        <option value="3">Pizza</option>
        <option value="4">Tacos</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="">Cantidad</label>
      <input type="number" name="cantidadPlatillo'.($i+1).'" class="form-control">
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
</div>';
}


 ?>
