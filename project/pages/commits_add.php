<?php 
    session_start();

    function reArrayFiles($file)
    {
        $file_ary = array();
        $file_count = count($file['name']);
        $file_key = array_keys($file);
        
        for($i=0;$i<$file_count;$i++)
        {
            foreach($file_key as $val)
            {
                $file_ary[$i][$val] = $file[$val][$i];
            }
        }
        return $file_ary;
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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
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
                  <li><a href="invoice_create.php"><i class="fa fa-minus"></i>Dodavanje uplate</a></li>
                  <li><a href="invoice.php"><i class="fa fa-minus"></i>Prikaz uplata</a></li>
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
        Dodavanje komita
        <small>Demo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Komitovi</a></li>
        <li class="active">Dodavanje komita</li>
      </ol>
    </section>

  <!-- /.content-wrapper -->
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
        <form role="form" enctype="multipart/form-data" action="commits_add.php" method="POST">
        <div class="box-body">
                        <?php if(!empty($_SESSION["message_fail"])){?>
                        <div class="alert alert-error">
                            <?php echo $_SESSION["message_fail"];
                                $_SESSION["message_fail"] = "";
                            ?>
                        </div>
                        <?php } else if(!empty($_SESSION["message_success"])){?>
                        <div class="alert alert-success">
                            <?php echo $_SESSION["message_success"];
                                $_SESSION["message_success"]="";
                            ?>
                        </div>
                        <?php }?>
                        <div class="form-group">
                        <label>Izaberi task</label><br>
                                <select name="task">
                                <?php
                                    require_once('../database_connection.php');
                                    if($_SESSION["role_id"] == 1){   
                                        $sql_query = "SELECT task_name FROM Tasks";
                                    } else {
                                        $user_id = $_SESSION["user_id"];
                                        $sql_query = "SELECT task_name FROM Tasks WHERE user_id=$user_id";
                                    }
                                    
                                    try{
                                        $stmt = $connection->prepare($sql_query);
                                        $stmt->execute();
                                        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    }catch(Exception $e){
                                        echo $e->getMessage();
                                    }finally{
                                        //$connection = null;
                                    }
                                    foreach($tasks as $task){
                                        echo "<option>".$task["task_name"]."</option>";
                                    }
                                ?>
                                </select>
                        </div>
                        <div class="form-group">
                        <label>Komentar</label>
                        <textarea class="form-control" rows="3" name="comment" id="comment" placeholder="Unesite komentar" required></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">Komit fajl</label>
                        <input type="file" id="exampleInputFile" name="commit_file[]" title="Izaberite fajl" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/pdf, text/plain, application/msword" multiple required>
                        </div>
                        
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" name="commit_add" value="Dodaj komit" class="btn btn-primary">
                    </div>

        </form>
          </div>
        </div>
      </div>
    </section>

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
<?php
    $uploaddir = '../commit_files/';

    if(isset($_POST["commit_add"])){

        $flag = true;
        $comment = $_POST["comment"];
        $task_id = $_POST["task"];
        $date = (string) date("m/d/y h:ia");
        $uploaddir= $uploaddir ."commit" . date("m-d-y_h-i") . "/";
        $files = $_FILES["commit_file"];

        if (!file_exists($uploaddir)) {
          mkdir($uploaddir, 0777, true);
        }

                
        try{
            /*$sql_insert_commit = "INSERT INTO Commits(commit_comment, commit_time, task_id)
                                  VALUES('$comment', '$date', (SELECT task_id FROM Tasks WHERE task_name = '$task_id'))";
            $stmt = $connection->prepare($sql_insert_commit);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $_SESSION["message_success"] = "Komit je prošao";*/

            if(!empty($files)){
              $sql_insert_commit = "INSERT INTO Commits(commit_comment, commit_time, task_id)
                                  VALUES('$comment', '$date', (SELECT task_id FROM Tasks WHERE task_name = '$task_id'))";
              $stmt = $connection->prepare($sql_insert_commit);
              $stmt->execute();
              if($stmt->rowCount()>0) $flag = $flag && true;
              else $flag = $flag && false;                                 
                      
              $file_desc = reArrayFiles($files);


              foreach($file_desc as $val){
                $uploadfile = $uploaddir . basename($val["name"]);
                //echo $uploadfile;
                if(move_uploaded_file($val["tmp_name"], $uploadfile)){
                  $sql_insert_file = "INSERT INTO Files(files_path)
                                      VALUES('$uploadfile')";
                  $stmt1 = $connection->prepare($sql_insert_file);
                  $stmt1->execute();
                  if($stmt1->rowCount() > 0) $flag = $flag && true;
                  else $flag = $flag && false;

                  $sql_insert_m2m = "INSERT INTO Commit_Files(commit_id, files_id)
                                     VALUES((SELECT commit_id FROM Commits WHERE commit_time = '$date'), (SELECT files_id FROM Files WHERE files_path = '$uploadfile'))";
                  $stmt2 = $connection->prepare($sql_insert_m2m);
                  $stmt2->execute();
                  if($stmt2->rowCount()>0) $flag = $flag && true;
                  else $flag = $flag && false;                                 
                 }
                }        
              } else $flag = false;

             
          
          if($flag) $_SESSION["message_success"] = "Komit je prošao";
          else $_SESSION["message_fail"] = "Komit nije prošao";

          echo "<script>window.location.href='commits_add.php';</script>";
        
        }catch(PDOException $e){
            echo $e->getMessage(); 
        }finally{
            $connection = null;
        }

    }
    
?>