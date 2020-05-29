<?php
include_once '../funciones/conexiones.php';

if(isset($_POST)){

if(isset($_SESSION['error_login'])){

  session_unset($_SESSION['error_login']);

}

  $usuario = pg_escape_string($conexionCon, trim($_POST['usuario']));
  $password = pg_escape_string($conexionCon, $_POST['password']);

  //Consulta para comprobar las credenciales del usuario
  $Q_ValidadorUsuario = "SELECT * from empleados where usuario='$usuario' and id_estatus='1' LIMIT 1";
  $login = pg_query($conexionCon,$Q_ValidadorUsuario) or die('Error en consulta de login');
  if($login and pg_num_rows($login)==1){
    $user = pg_fetch_assoc($login);

    //Comprobar contraseña
    $verify = password_verify($password, $user['password']);

    if($verify){
      //Utilizar session para guardar los datos del usuario
      $_SESSION['usuario']=$user;

      switch ($_SESSION['usuario']['id_area']) {
        case '1':
          header('location: ../../gestion_comanda.php');
          break;

          case '2':
            header('location: ../../cocinero.php');
            break;

            case '3':
              header('location: ../../crear_comanda.php');
              break;

              case '4':
                header('location: ../../cobrar_comanda.php');
                break;

      }

      //Si los datos son corectos redirigir a la pagina

    }else{
      //Si algo falla envíar session con el fallo
      $_SESSION['error_login'] = '¡Error al ingresar sesión!';
      //Redirigir al index
      header('location: ../../index.php');
    }
  }else{
    // Mensaje error
    $_SESSION['error_login'] = '¡Error al ingresar sesión!';
    //Redirigir al index
    header('location: ../../index.php');
  }

}else{
  //Redirigir al index
  header('location: ../../index.php');
}



 ?>
