<?php
  session_start();
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
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
              <?php if(!empty($_SESSION["profile_picture"])){
                echo '<img src="data:image;base64,'. $_SESSION["profile_picture"] .'" class="user-image" alt="User Image">'; 
              }else{
                echo '<img src="../pictures/no_profile_picture.png" class="user-image" alt="User Image">';}?>
              <span class="hidden-xs"><?php echo $_SESSION["first_name"];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php if(!empty($_SESSION["profile_picture"])){
                 echo '<img src="data:image;base64,'. $_SESSION["profile_picture"] .'" class="img-circle" alt="User Image">'; 
               }
                    else{
                      echo '<img src="../pictures/no_profile_picture.png" class="user-image" alt="User Image">';
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
                  <a href="backend_pages/logout.php" class="btn btn-default btn-flat">Odjava</a>
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
                      echo '<img src="../pictures/no_profile_picture.png" class="user-image" alt="User Image">';
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
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-circle-o"></i> <span>Upravljanje</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="project_management.php"><i class="fa fa-minus"></i>Kreiranje projekta</a></li>
                  <li><a href="project_management_manipulation.php"><i class="fa fa-minus"></i>Prikaza projekata</a></li>
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
          <a href="calendar.php">
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
            <i class="fa fa-table"></i> <span>Finansije</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-circle-o"></i> <span>Uplate</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/invoice_create.php"><i class="fa fa-minus"></i>Dodavanje uplate</a></li>
                  <li><a href="pages/invoice.php"><i class="fa fa-minus"></i>Prikaz uplata</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-circle-o"></i> <span>Izveštaji</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-minus"></i>Pravljenje izveštaja</a></li>
                  <li><a href="pages/payments.php"><i class="fa fa-minus"></i>Prikaz izveštaja</a></li>
                </ul>
              </li>
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
      <h1 style="text-align: -webkit-center;">
        Prikaz projekata
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Projekti</a></li>
        <li class="active">Prikaz projekata</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Projekti</h3>
            </div>
            <!-- /.box-header -->
            <?php 
                //require_once('../database_connection.php');
                require_once('backend_pages/project_management_all_projects.php');
                require_once('backend_pages/project_management_all_pm.php');
                
                $j = 0;
            ?>
            <div class="box-body">
            <form role="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <?php if(!empty($message_fail)){?>
                  <div class="alert alert-error">
                    <?php echo $message_fail;?>
                  </div>
                  <?php } else if(!empty($message_success)){?>
                  <div class="alert alert-success">
                    <?php echo $message_success;?>
                  </div>
                  <?php } ?>
                  
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Šifra projekta</th>
                  <th>Ime projekta</th>
                  <th>Menadžer projekta</th>
                  <th>Timovi</th>
                  <th>Rok projekta</th>
                  <th>Finansijer projekta</th>
                  <th>Napomena</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($projects as $project){?>
                <tr>
                  <td><input type="text" style="height: 28px" name="id<?php echo $j?>" value="<?php echo $project["project_id"];?>" readonly></td>
                  <td><input type="text" style="height: 28px" name="name<?php echo $j?>" value="<?php echo $project["project_name"];?>" ></td>
                  <td>
                  <select name="pm<?php echo $j?>" style="height: 28px">
                    <?php foreach($pms as $pm){
                            if($project["project_manager"]==$pm["username"])
                                echo "<option selected>".$pm["username"]."</option>";
                            else echo "<option>".$pm["username"]."</option>";
                    }?>
                  </td>
                  <td>
                    <?php
                      require_once('../database_connection.php');
                      try{
                        $sql_query = "SELECT team_name FROM Teams";
                        $stmt = $connection->prepare($sql_query);
                        $stmt->execute();
                        $teams = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $teamsArr = array();
                        foreach($teams as $team){
                          array_push($teamsArr, $team["team_name"]);
                        }

                        $flagArr = array();
                        for($k=0; $k<count($teamsArr); $k++){
                          array_push($flagArr, 0);
                        }

                        $project_id_num = $project["project_id"];
                        $sql_query = "SELECT team_name FROM Teams WHERE project_id=$project_id_num";
                        $stmt = $connection->prepare($sql_query);
                        $stmt->execute();
                        $teamsOnProject = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $teamsOnProjectArr = array();
                        foreach($teamsOnProject as $teamOnProject){
                          array_push($teamsOnProjectArr, $teamOnProject["team_name"]);
                        }

                        for($k1 = 0; $k1 < count($teamsOnProjectArr);$k1++){
                          for($k2 = 0; $k2 < count($teamsArr); $k2++){
                            if($teamsOnProjectArr[$k1] == $teamsArr[$k2]){
                              $flagArr[$k2] = 1;
                            }
                          }
                        }

                      }catch(Exception $e){
                        echo $e->getMessage();
                      }finally{
                        //$connection = null;
                      }
                    ?>
                    <select name="timovi<?php echo $j?>[]" multiple>
                    <?php for($n=0; $n<count($flagArr); $n++){
                            if($flagArr[$n]==1)
                                echo "<option selected>".$teamsArr[$n]."</option>";
                            else echo "<option>".$teamsArr[$n]."</option>";
                    }?>

                  </td>
                  <td>
    
                    <div class="input-group">
                    <div class="input-group">
                      <div class="input-group-addon" >
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right"  style="height: 28px" name="deadline<?php echo $j?>" id="reservation" value="<?php echo $project["project_deadline"];?>">
                    </div>
                    <!-- /.input group -->
                  </td>
                  <td><input type="text" name="investor<?php echo $j?>" style="height: 28px" value="<?php echo $project["project_investor"];?>"></td>
                  <td><input type="text" name="notes<?php echo $j?>" style="height: 28px" value="<?php echo $project["project_notes"];?>"></td>
                      <td>
                        <button type="submit" name="izmeni<?php echo $j?>" class="btn btn-secondary">Izmeni podatke</button>
                        <button type="submit" name="obrisi<?php echo $j?>" class="btn btn-danger">Obriši projekat</button>
                      </td>
                  <?php 
                    $j++;
                } ?>
                  
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
              
             </form>
            </div>
            <!-- /.box-body -->
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
<?php
    $message_fail = $message_success = "";
    for($i=0; $i< $j; $i++){
        if(isset($_POST["izmeni".$i])){
            $projectID = $_POST["id".$i];
            $projectName = $_POST["name".$i];
            $PM = $_POST["pm".$i];
            $projectDeadline = $_POST["deadline".$i];
            $projectInvestor = $_POST["investor".$i];
            $projectNotes = $_POST["notes".$i];
            $timovi = $_POST["timovi".$i];
            try{
                $sql_update_project = "UPDATE Projects
                                       SET project_name = '$projectName', project_manager = '$PM',
                                           project_deadline = '$projectDeadline', project_investor= '$projectInvestor',
                                           project_notes = '$projectNotes'
                                       WHERE project_id = $projectID";
                $stmt = $connection->prepare($sql_update_project);
                $stmt->execute();

                for($num=0; $num < count($timovi);$num++){
                  $tim = $timovi[$num];
                  $sql_update_teams = "UPDATE Teams
                                        SET project_id = $projectID
                                        WHERE team_name = '$tim'";
                  $stmt = $connection->prepare($sql_update_teams);
                  $stmt->execute();
                }

                if($stmt->rowCount() > 0){
                    $message_success = "Projekat je uspešno promenjen";
                } else $message_fail = "Projekat je neuspešno promenjen"; 

                
            }catch(Exception $e){
                echo $e->getMessage();
            }finally{
                $connection = null;
                echo "<script>window.location.href='project_management_manipulation.php';</script>";
            }
            
        }
        else if(isset($_POST["obrisi".$i])){
            $projectID = $_POST["id".$i];
            try{
                $sql_delete_from_project = "DELETE FROM Projects WHERE project_id=$projectID";
                $stmt = $connection->prepare($sql_delete_from_project);
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    $message_success = "Projekat je uspešno promenjen";
                } else $message_fail = "Projekat je neuspešno promenjen"; 
                
            }catch(Exception $e){
                echo $e->getMessage();
            }finally{
                $connection = null;
                echo "<script>window.location.href='project_management_manipulation.php';</script>";
            }
        }
    }
?>