<?php

$id_ticket = $_GET['id_ticket'];

//include_once '../funciones/conexiones.php';



echo '
<div class="modal fade" id="modalCobrar">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Ticket '.$id_ticket.'</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group col-md-12">

        <div class="col-md-3">
          <label for="">No. Pedido</label>
          <select class="form-control" name="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>

      </div>

      <div class="form-group col-md-12">

        <div class="col-md-3">
          <label for="">Platillo</label>
          <input type="text" class="form-control" name="" value="Arrachera">
        </div>

        <div class="col-md-3">
          <label for="">Cantidad</label>
          <input type="number" name="" class="form-control" value="1">
        </div>

        <div class="col-md-3">
          <label for="">Total</label>
          <input type="number" name="" class="form-control" value="150">
        </div>



    </div>

    <div class="form-group col-md-12">

      <div class="col-md-3">
        <label for="">Bebidas</label>
        <input type="text" class="form-control" name="" value="Refresco">
      </div>

      <div class="col-md-3">
        <label for="">Cantidad</label>
        <input type="number" name="" class="form-control" value="2">
      </div>

      <div class="col-md-3">
        <label for="">Total</label>
        <input type="number" name="" class="form-control" value="30">
      </div>

    </div>

    <div class="form-group col-md-12">

      <div class="col-md-3">
        <label for="">Postre</label>
        <input type="text" class="form-control" name="" value="Helado">
      </div>

      <div class="col-md-3">
        <label for="">Cantidad</label>
        <input type="number" name="" class="form-control" value="2">
      </div>

      <div class="col-md-3">
        <label for="">Total</label>
        <input type="number" name="" class="form-control" value="25">
      </div>

    </div>

    <div class="form-group col-md-12">

      <div class="col-md-3">
        <label for="">Total</label>
        <input type="text" class="form-control" name="" value="205">
      </div>

      <div class="col-md-3">
        <label for="">Tipo de pago</label>
        <select class="form-control" name="">
          <option value="4">Efectivo</option>
          <option value="2">Tajeta credito</option>
          <option value="3">Tarjeta debito</option>

        </select>
      </div>

      <div class="col-md-3">
        <label for="">División cuenta</label>
        <input type="number" name="" class="form-control" value="5">
      </div>

    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Cobrar</button>
      </div>
    </div>
  </div>
</div>'


 ?>
