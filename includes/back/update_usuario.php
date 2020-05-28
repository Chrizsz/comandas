<?php

include_once '../funciones/conexiones.php';

$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$nombres = $_POST['nombres'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];

if(empty($_POST['password'])){
  $password = $_POST['password_actual'];
}else{
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost'=>4]);
}

$id_area = $_POST['id_area'];

$Q_updateUsuario = "UPDATE empleados SET usuario='$usuario', nombres='$nombres', apellido_paterno='$ap_paterno',
apellido_materno='$ap_materno', password='$password', id_area=$id_area WHERE id_empleado=$id_usuario";
$E_updateUsuario = pg_query($conexionCon,$Q_updateUsuario) or die('Error en update');

header('Location:../../usuarios.php');
 ?>
