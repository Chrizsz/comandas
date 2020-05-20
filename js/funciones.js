

$('#noClientesMesa').change(function(){

  let noClientesMesa=$('#noClientesMesa').val();

 $('#resultadoClientesMesa').load('http://localhost/comandas/includes/consultas/resultado_clientes_mesa.php?noClientesMesa='+noClientesMesa);

})
