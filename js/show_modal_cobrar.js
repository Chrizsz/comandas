function mostrarDetalles(id_ticket){
    var ruta = "includes/consultas/modal_cobrar.php?id_ticket="+id_ticket;
    $.get(ruta, function(data){
      $("#resultadoModalCobrar").html(data);
      $("#modalCobrar").modal("show");
    });
  }
