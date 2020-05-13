<?php include_once 'includes/funciones/conexiones.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Comandas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-color: blue;">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="color:#FFF;"><b>Login</b></a>

    <?php if(isset($_SESSION['error_login'])): ?>
      <div class="">
        <p style="color:#f56954; font-weight: 600;"><?=$_SESSION['error_login'];?></p>
      </div>
      <?php endif; ?>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar</p>

    <form action="includes/back/login.php" method="post">
      <div class="form-group has-feedback">
        <input name="usuario" type="text" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
      </div>

    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
</html>
