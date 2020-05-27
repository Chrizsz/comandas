<?php

include_once '../funciones/conexiones.php';

$usuario = $_POST['usuario'];
$nombres = $_POST['nombres'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$password = $_POST['password'];
$id_area = $_POST['id_area'];

$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

$I_Usuarios = "INSERT INTO empleados(usuario, nombres, apellido_paterno, apellido_materno, password, id_area, id_estatus)
values ('$usuario', '$nombres', '$ap_paterno', '$ap_materno', '$password_segura', $id_area, '1')";
$E_Usuarios = pg_query($conexionCon, $I_Usuarios) or die ('Error ingresando datos de usuario');

header('Location: ../../usuarios.php');

 ?>
