

$('#noClientesMesa').change(function(){

  let noClientesMesa=$('#noClientesMesa').val();

 $('#resultadoClientesMesa').load('http://localhost/comandas/includes/consultas/resultado_clientes_mesa.php?noClientesMesa='+noClientesMesa);

})

//Usuarios
$(document).on('click','.btnActivar',function(){


    var idUsuario = $(this).attr('idUsuario');
    var estadoUsuario = $(this).attr('estadoUsuario');

    var datos = new FormData();
    datos.append('id_usuario', idUsuario);
    datos.append('estado', estadoUsuario);

    $.ajax({

      url: 'includes/consultas/modificar_usuario.php',
      method: 'POST',
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
    success: function(respuesta){

      if(window.matchMedia('(max-width:767px)').matches){

        window.location = 'usuarios.php';

      }

    }

    })

    if(estadoUsuario==1){

      $(this).removeClass('btn-success');
      $(this).addClass('btn-danger');
      $(this).html('Desactivado');
      $(this).attr('estadoUsuario', 1);

    }else if(estadoUsuario==0){

      $(this).addClass('btn-success');
      $(this).removeClass('btn-danger');
      $(this).html('Activado');
      $(this).attr('estadoUsuario', 0);

    }


})

//Cantidad productos
$('.modificarProducto').change(function(){

  var idProducto = $(this).attr('idProducto');
  var cantidadProducto = $(this).val();

  var datos = new FormData();
  datos.append('idProducto', idProducto);
  datos.append('cantidadProducto', cantidadProducto);

  $.ajax({

    url: 'includes/consultas/modificar_cantidad.php',
    method: 'POST',
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
  success: function(respuesta){

    if(window.matchMedia('(max-width:767px)').matches){

      window.location = 'usuarios.php';

    }

  }

  })



})
