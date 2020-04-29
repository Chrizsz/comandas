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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-black-light.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Com</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistema</b> comandas</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <span class="hidden-xs">Christian Gómez</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <p>
                  Christian Gómez
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">

              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ</li>

        <li class="treeview">
          <a href="#">
             <span>EMPLEADOS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuarios.php"><i class="fa fa-circle-o"></i> USUARIOS</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
             <span>COMANDAS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> USUARIOS</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> COMANDAS</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
             <span>REPORTES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> USUARIOS</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> COMANDAS</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
             <span>INVENTARIOS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> USUARIOS</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> COMANDAS</a></li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Comandas
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cobrar comanda</h3>
        </div>
        <div class="box-body">

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

      <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Cobrar</button>
      </div>


    </section>
    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
