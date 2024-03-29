<?php
  session_start();
  if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
    header("Location: ../login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buildira</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/buildira.min.css">
  <!-- buildira Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .error_var {color: #FF0000;}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
    <!-- Logo -->
    <a href="../../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Buildira</b></span>
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
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Imate 10 obaveštenja</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 novih članova danas
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Poslednja uplata nije prošla
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 2 nova tima su priključena projektu PROJEKAT 1
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> novi task je dodat na projekat PROJEKAT 2
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Postavljen je rukovodilac projektaPROJEKAT 2
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Vidi sve</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Imate 9 taskova</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Task 1
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% kompletiran</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Task 2
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% kompletiran</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Task 3
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% kompletiran</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                       Task 4
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% kompletiran</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Vidi sve taskove</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if(!empty($_SESSION["profile_picture"])){
                echo '<img src="data:image;base64,'. $_SESSION["profile_picture"] .'" class="user-image" alt="User Image">'; 
              }else{
                echo '<img src="../../pictures/no_profile_picture.png" class="user-image" alt="User Image">';}?>
              <span class="hidden-xs"><?php echo $_SESSION["first_name"];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php if(!empty($_SESSION["profile_picture"])){
                 echo '<img src="data:image;base64,'. $_SESSION["profile_picture"] .'" class="img-circle" alt="User Image">'; 
               }
                    else{
                      echo '<img src="../../pictures/no_profile_picture.png" class="user-image" alt="User Image">';
                    }?>

                <p>
                  <?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"] . " - " . $_SESSION["profession"]; ?>
                  <small>Član od Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Odjava</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if(!empty($_SESSION["profile_picture"])){
                 echo '<img src="data:image;base64,'. $_SESSION["profile_picture"] .'" class="img-circle" alt="User Image">'; 
               }
                    else{
                      echo '<img src="../../pictures/no_profile_picture.png" class="user-image" alt="User Image">';
                    }?>
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["first_name"];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pretraga...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         
       
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Projekti</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="project_management.html"><i class="fa fa-circle-o"></i> Upravljanje</a></li>
            <li><a href="teams.html"><i class="fa fa-circle-o"></i> Projektni timovi</a></li>
            <li><a href="commits.html"><i class="fa fa-circle-o"></i> Komitovi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tiketi</span>
            <span class="pull-right-container">
             
            </span>
          </a>
      
        </li>
        <li>
          <a href="calendar.html">
            <i class="fa fa-calendar"></i> <span>Kalendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Korisnici</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="users_management_register.php"><i class="fa fa-circle-o"></i> Registrovanje korisnika</a></li>
            <li><a href="users_management_users_manipulation.php"><i class="fa fa-circle-o"></i> Pregled korisnika</a></li>
         </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Finansije</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Uplate</a></li>
            <li><a href="payments.html"><i class="fa fa-circle-o"></i> Izvestaji</a></li>
         </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Izmena podataka o uplatama
        <small>Demo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Početna strana</a></li>
        <li class="active">Izmena podataka o uplatama</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="edit_invoice_logic_logic.php" enctype="multipart/form-data">

              <div class="box-body">
              	<div class="form-group">
              	<a href="../invoice.php"><button type="button" class="btn btn-default btn-sm">
          			<span class="glyphicon glyphicon-arrow-left"></span> Nazad
        		</button></a>
        		</div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputId" name="id" value="<?php echo $_POST['hidden_field_id'];?>">
                  <label for="exampleInputId1">ID projekta</label>
                  <input type="number" class="form-control" id="exampleInputFirstName" placeholder="Unesite ID projekta" name="idproj" value="<?php echo $_POST['hidden_field_project_id'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputSender1">Uplatilac</label>
                  <input type="text" class="form-control" id="exampleInputLastName" placeholder="Unesite naziv uplatioca" name="uplatilac" value="<?php echo $_POST['hidden_field_sender'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputReciever1">Primalac</label>
                  <input type="text" class="form-control" id="exampleInputUsername" placeholder="Unesite naziv primaoca" name="primalac" value="<?php echo $_POST['hidden_field_reciever'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputAmount1">Količina</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Unesite količinu novca" name="novac" value="<?php echo $_POST['hidden_field_amount'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputTime1">Vreme</label>
                  <input type="datetime" class="form-control" id="exampleInputPassword1" placeholder="Unesite vreme" name="vreme" value="<?php echo $_POST['hidden_field_time'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPurpose1">Svrha</label>
                  <input type="text" class="form-control" id="exampleInputNumber" placeholder="Unesite svrhu" name="svrha" value="<?php echo $_POST['hidden_field_purpose'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputComment1">Komentar</label>
                  <input type="text" class="form-control" id="exampleInputLastName" placeholder="Unesite komentar" name="komentar" value="<?php echo $_POST['hidden_field_comment'];?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="edit" value="Izmeni podatke" class="btn">
              </div>

            </form>

          </div>
        </div>
      </div>
    </section>
  

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
      <strong>Copyright &copy; 2019 SciTech team.</strong> 

  </footer>

  <!-- Control Sidebar -->
  
      <!-- /.tab-pane -->

     
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- buildira App -->
<script src="../dist/js/buildira.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- buildira for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
