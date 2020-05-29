<?php
  $area = $_SESSION['usuario']['id_area'];
 ?>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENÚ</li>

      <?php switch ($area) {
        case '1':
          ?>

          <li class="treeview">
            <a href="#">
               <span>COMANDAS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="gestion_comanda.php"><i class="fa fa-circle-o"></i> GESTIÓN COMANDA</a></li>
              <li><a href="crear_comanda.php"><i class="fa fa-circle-o"></i> NUEVA COMANDA</a></li>
              <li><a href="cocinero.php"><i class="fa fa-circle-o"></i> COCINERO</a></li>
              <li><a href="mesero.php"><i class="fa fa-circle-o"></i> MESERO</a></li>
              <li><a href="cobrar_comanda.php"><i class="fa fa-circle-o"></i> COBRAR</a></li>
            </ul>
          </li>

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
               <span>REPORTES</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="reportes.php"><i class="fa fa-circle-o"></i> Ventas</a></li>
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
              <li><a href="inventarios.php"><i class="fa fa-circle-o"></i> PRODUCTOS</a></li>
            </ul>
          </li>

          <?php
          break;

        case '2':
          ?>
          <li class="treeview">
            <a href="#">
               <span>COMANDAS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="cocinero.php"><i class="fa fa-circle-o"></i> COCINERO</a></li>
            </ul>
          </li>

          <?php
          break;

          case '3':
          ?>

          <li class="treeview">
            <a href="#">
               <span>COMANDAS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="crear_comanda.php"><i class="fa fa-circle-o"></i> NUEVA COMANDA</a></li>
              <li><a href="mesero.php"><i class="fa fa-circle-o"></i> MESERO</a></li>
            </ul>
          </li>

          <?php
            break;

          case '4':
          ?>

          <li class="treeview">
            <a href="#">
               <span>COMANDAS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="cobrar_comanda.php"><i class="fa fa-circle-o"></i> COBRAR</a></li>
            </ul>
          </li>

          <?php
          break;
      }
       ?>




    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
