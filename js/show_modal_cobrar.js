function mostrarDetalles(id_ticket){
    var ruta = "includes/consultas/modal_cobrar.php?id_ticket="+id_ticket;
    $.get(ruta, function(data){
      $("#resultadoModalCobrar").html(data);
      $("#modalCobrar").modal("show");
    });
  }

  function editarUsuario(id_usuario){
      var ruta = "includes/consultas/modal_editar_usuario.php?id_usuario="+id_usuario;
      $.get(ruta, function(data){
        $("#resultadoEditarUsuario").html(data);
        $("#modalEditarUsuario").modal("show");
      });
    }
