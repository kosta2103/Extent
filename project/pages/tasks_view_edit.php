<?php 
  session_start();
  $_SESSION['editable'] = false;
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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
  
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/buildira.min.css">
  <!-- buildira Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
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
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Aca</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Aca - Web Developer
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
                  <a href="#" class="btn btn-default btn-flat">Odjava</a>
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
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Aca</p>
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
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Upravljanje</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="project_management.php"><i class="fa fa-minus"></i>Kreiranje projekta</a></li>
                <li><a href="project_management_manipulation.php"><i class="fa fa-minus"></i>Prikaz projekata</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Projektni timovi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="project_teams.php"><i class="fa fa-minus"></i> Dodavanje</a></li>
                <li><a href="project_teams_view.php"><i class="fa fa-minus"></i> Prikaz</a></li>
              </ul>
            </li>
          </ul>
        </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Tiketi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Komitovi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="commits_add.php"><i class="fa fa-minus"></i>Dodavanje komita</a></li>
                <li><a href="commits_view.php"><i class="fa fa-minus"></i>Prikaz komitova</a></li>
              </ul>
            </li>

            <li class="treeview">
                <a href="#">
                  <i class="fa fa-circle-o"></i> <span>Taskovi</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tasks_add.php"><i class="fa fa-minus"></i>Dodavanje taska</a></li>
                  <li><a href="tasks_view.php"><i class="fa fa-minus"></i>Prikaz taskova</a></li>
                </ul>
              </li>
           </ul> 
    
      </li>
      <li>
        <a href="pages/calendar.html">
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
      </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

    <?php
        require_once("backend_pages/tasks_view_edit_backend.php");
    ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Demo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

  <!-- /.content-wrapper -->

    <?php 
    if($_SESSION['editable'] == 1)
    {
    ?>

      <div class="container" style="margin-top: 30px;">
          <div class="box box-info">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
              <div class="container" style="width: 95%;">
                <div class="box-header with-border">
                  <div class="row">
                    <textarea type='text' rows=1 name="task_name" style="font-size: 30px;padding-top: 20px; padding-bottom:20px;border: none; width:100%;padding-left:15px;padding-right:15px;" value=""><?php echo $arr[0]['task_name'] ?></textarea>
                  </div>
                </div>

                <div class="box-header with-border" style="padding-top: 35px; padding-bottom:35px;">
                  <textarea type='text' rows=2 name="task_description" style="font-size: 18px;padding-top: 20px; padding-bottom:20px;border: none; width:100%;" value=""><?php echo $arr[0]['task_description'] ?></textarea>
                </div>

                <div class="box-header with-border" style="padding-top: 15px; padding-bottom:15px;display:flex;">
                    <label for="inputEmail3" style="width: 10.3%;" class="control-label">Rok taska</label>
                    <div class="input-group task_input_group" style="width: 25%;">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="task_deadline" id="reservation" value="<?php echo $arr[0]['task_deadline'] ?>">
                  </div>
                </div>


                <div class="box-header with-border" style="padding-top: 15px; padding-bottom:15px;display:flex;">
                      <label for="inputPassword3" style="width: 10.3%;" class="control-label">Izvrsitelj</label>
                      <select name="as_username" style="width: 25%;" class="form-control select2 select2-hidden-accessible" style="width: 50% !important;" tabindex="-1" aria-hidden="true">
                        <?php 
                          foreach($assignee_arr_for_proj as $assignee1)
                          {
                            if($assignee1['username'] == $assignee)
                            {
                              echo "<option selected>@".$assignee1['username']."</option>";
                            }
                            else
                            {
                              echo "<option>@".$assignee1['username']."</option>";
                            }
                          }
                        ?>
                      </select>
                </div>

                <div class="box-header with-border" style="padding-top: 15px; padding-bottom:15px;">
                  <h3 class="box-title" style="font-size:15px !important;"><b>Projekat - </b><?php echo $arr[0]['project_name'] ?></h3>
                </div>

                <div class="box-header with-border" style="padding-top: 15px; padding-bottom:15px;display:flex;">
                    <label for="inputPassword3" style="width: 10.3%;" class="control-label"><b>Prioritet taska - </b></label>
                    <input type="number" style="width: 25%;" class="form-control" id="inputEmail3" name="task_priority" placeholder="<?php echo $arr[0]['task_priority'] ?>">
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-footer" style="border-bottom: 1px solid #f4f4f4;">
                    <button type="submit" class="btn btn-default">Zatvori task</button>
                    <button type="submit" name="submit_btn" class="btn btn-info pull-right"><i class="glyphicon glyphicon-save"></i> Sacuvaj promene</button>
                </div>
              </form>
            </div>
          </div>

          <div class="box box-info">
              <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" class="form-horizontal">
                <div class="box-body">
                  <div class="container" style="width: 95%;">
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-1 control-label" style="text-align:center;">Komentari</label>
                          <div class="col-sm-11">
                              <textarea class="form-control" name="team_description" rows="5" placeholder="Komentar ..." ></textarea>
                          </div>
                      </div>
                      <div class="form-group" style="margin-right: 4px;">  
                          <button type="submit" name="submit_btn" class="btn btn-info pull-right"><i class="glyphicon glyphicon-plus"></i> Dodaj komentar</button>
                      </div>
                  </div>
                  
      
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
              
                </div>
              </form>
          </div>

      </div>

<?php } 
      
      else
      {
      ?>
          <div class="container" style="margin-top: 30px;">
            <div class="box box-info">
              <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="container" style="width: 95%;">
                  <div class="box-header with-border">
                    <div class="row">
                      <h1 class="box-title col-sm-10" style="font-size: 30px;padding-top: 20px; padding-bottom:20px;"><b><?php echo $arr[0]['task_name'] ?></b></h1>
                      <a href='?task_id=<?php echo $_SESSION['task_id'] ?>&edit=1'><i class="glyphicon glyphicon-edit col-sm-2" style="font-size: 30px;padding-top: 20px; padding-bottom:20px; text-align:right;"></i></a>
                    </div>
                  </div>

                  <div class="box-header with-border" style="padding-top: 35px; padding-bottom:35px;">
                    <h3 class="box-title" style="font-size:18px !important;"><?php echo $arr[0]['task_description'] ?></h3>
                  </div>

                  <div class="box-header with-border" style="padding-top: 15px; padding-bottom:15px;">
                      <h3 class="box-title" style="font-size:15px !important;">Rok taska - <b><?php echo $arr[0]['task_deadline'] ?></b></h3>
                  </div>

                  <div class="box-header with-border" style="font-size: 7px;padding-top: 15px; padding-bottom:15px;">
                    <h3 class="box-title" style="font-size:15px !important;">Izvrsitelj - <b>@<?php echo $assignee ?></b></h3>
                  </div>

                  <div class="box-header with-border" style="font-size: 7px;padding-top: 15px; padding-bottom:15px;">
                    <h3 class="box-title" style="font-size:15px !important;">Projekat - <b><?php echo $arr[0]['project_name'] ?></b></h3>
                  </div>

                  <div class="box-header with-border" style="padding-top: 15px; padding-bottom:15px;">
                      <h3 class="box-title" style="font-size:15px !important;">Prioritet taska - <b><?php echo $arr[0]['task_priority'] ?></b></h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->


                  <div class="box-footer" style="border-bottom: 1px solid #f4f4f4;">
                    <div class="row">
                      <div class="col-sm-2">
                        <button type="submit" class="btn btn-default">Zatvori task</button>
                      </div>
                      <div class="col-sm-10" style="text-align:right;">
                        <a href='?task_id=<?php echo $_SESSION['task_id'] ?>&rm=1'><i class="glyphicon glyphicon-remove" style="font-size: 30px; text-align:right;"></i></a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="box box-info">
                <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" class="form-horizontal">
                  <div class="box-body">
                    <div class="container" style="width: 95%;">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-1 control-label" style="text-align:center;">Komentari</label>
                            <div class="col-sm-11">
                                <textarea class="form-control" name="team_description" rows="5" placeholder="Komentar ..." ></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="margin-right: 4px;">  
                            <button type="submit" name="submit_btn" class="btn btn-info pull-right"><i class="glyphicon glyphicon-plus"></i> Dodaj komentar</button>
                        </div>
                    </div>
                    
        
                <!-- /.box-body -->
                
                <!-- /.box-footer -->
                
                  </div>
                </form>
            </div>

        </div>

<?php } ?>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
      <strong>Copyright &copy; 2019 SciTech team.</strong> 

  </footer>

  <!-- Control Sidebar -->
  
      <!-- /.tab-pane -->

     
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>

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


<script>
 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })


    })

</script>

</body>
</html>
