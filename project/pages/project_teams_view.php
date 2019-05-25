<?php
  session_start();
  $_SESSION["editable"] = false;
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

  
  <link rel="stylesheet" href="../dist/css/project_teams.css">


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
    <a href="../index.html" class="logo">
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
                <li><a href="#"><i class="fa fa-minus"></i> Prikaz</a></li>
              </ul>
            </li>
            <li><a href="pages/commits.html"><i class="fa fa-circle-o"></i> Komitovi</a></li>
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
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Kalendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Korisnici</span>

          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Finansije</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/invoice.html"><i class="fa fa-circle-o"></i> Uplate</a></li>
            <li><a href="pages/payments.html"><i class="fa fa-circle-o"></i> Izvestaji</a></li>


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
      <h1 class="pt_h1">
        Projektni timovi
        <small>Demo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
    <?php
        require_once("backend_pages/project_teams_view_backend.php");
        $id = 0;
        $j = 0;
    ?>
  <!-- /.content-wrapper -->
    <div class="container pt_container">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Prikaz projektnih timova</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

      <?php 
        if($_SESSION['role_id'] == 1)
        {
      ?>
          <form method="POST" action="project_teams_view.php" class="form-horizontal" id='team_form'>
              <div class="box-body">
                  <ul class="sidebar-menu" data-widget="tree">
                      <?php
                      foreach($arr as $line)
                      {
                        $team_id = $line['team_id'];
                        $team_leader = $line['team_leader_username'];
                        $arr_members = $connection->query("SELECT username FROM User WHERE team_id = '$team_id' AND username != '$team_leader'")->fetchAll();

                        if($_SESSION['editable'] && $edit == $id)
                        {
                          $_SESSION['id'] = $id;
                        
                      ?>
                      <li class="treeview pt_li_hover">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span><?php echo $line['team_name'] ?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu pt_ul">
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i>Ime tima - </a><input class="pt_input" type="text" name="team_name_<?php echo $id ?>" value="<?php echo $line['team_name'] ?>"><a title="Obrisi tim" class="pt_a" href='?edit=<?php echo $id ?>&team_id=<?php echo $team_id ?>'><i class='glyphicon glyphicon-remove'></i></a>
                              </li>
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i>Tim lider - @</a><input class="pt_input" type="text" name="team_leader_<?php echo $id ?>" value="<?php echo $line['team_leader_username'] ?>">
                              </li>
                              <li class="treeview">
                                  <a href="#">
                                  <i class="fa fa-minus"></i> <span>Clanovi tima</span>
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu pt_ul">
                                      <form action="" method="POST" id="form_plus">
                                        <li style="display: flex">
                                          <a href="#" class="pt_a" onclick="popup()"><i class="glyphicon glyphicon-plus"></i></a>
                                          <?php 
                                            if(isset($_GET['usernameAdd']))
                                            {
                                              $_SESSION['username'] = $_GET['usernameAdd'];
                                              $usernames = explode(" ", $_SESSION['username']);

                                              foreach($usernames as $username)
                                              {
                                                $ses_id = $_SESSION['id'];
                                                if(checkUsername($username, $connection) == 1) $connection->query("UPDATE User SET team_id='$team_id' WHERE username='$username'");
                                                else if (checkUsername($username, $connection) == -1) echo "<script> alert('Korisnik @$username je clan tima.') </script>";
                                                else if (checkUsername($username, $connection) == 0) echo "<script> alert('Korisnik @$username ne postoji.') </script>";
                                              }
                                              echo "<script> window.location.href='project_teams_view.php?edit=$ses_id'</script>";
                                            }
                                          ?>
                                        </li>
                                      </form>
                                      <?php foreach($arr_members as $member)
                                        {
                                      ?>
                                      <li style="display: flex">
                                        <a href="#"><i class="fa fa-minus"></i>@ <?php echo $member['username'] ?></a><a class="pt_a" href='?edit=<?php echo $id ?>&username=<?php echo $member['username'] ?>'><i class='glyphicon glyphicon-remove'></i></a>
                                      </li><?php }?>
                                  </ul>
                              </li>
                              <li style="display: flex; margin-top: 10px; margin-bottom: 10px;">
                                  <a href="#"><i class="fa fa-minus"></i>Zaduzenje - </a>
                                  <select name="team_task_<?php echo $id ?>" class="form-control select2 select2-hidden-accessible pt_select">
                                    <option selected hidden disabled><?php echo $line['team_task'] ?> </option>
                                    <option>A</option>
                                    <option>A2</option>
                                    <option>A3</option>
                                    <option>A4</option>
                                    <option>A5</option>
                                    <option>A6</option>
                                    <option>A7</option>
                                  </select>
                              </li>
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i>Opis - </a><input class="pt_input" name="team_description_<?php echo $id ?>" type="text" value="<?php echo $line['team_description'] ?>">
                              </li>
                              <input type="hidden" name="team_id_<?php echo $id ?>" value="<?php echo $team_id ?>">
                              <li class="pt_li1">
                                <a class="pt_a"><button title="Potvrdi izmene" class="pt_btn" type="submit" id="submit_<?php echo $id ?>" name="submit_<?php echo $id ?>"><i class='glyphicon glyphicon-ok'></i></button></a><a title="Ponisti izmene" class="pt_a" href='?edit=-1'><button class="pt_btn"><i class='glyphicon glyphicon-remove'></i></button></a>
                              </li>
                          </ul>
                      </li>
                      
                      <?php }

                      else
                      {?>
                        <li class="treeview pt_li_hover">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span><?php echo $line['team_name'] ?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu pt_ul">
                              <li style="display: flex">
                                <a href="#" class="pt_a"><i class="fa fa-minus"></i> Tim lider - @<?php echo $line['team_leader_username'] ?></a>
                              </li>
                              <li class="treeview">
                                  <a href="#" class="pt_a">
                                  <i class="fa fa-minus"></i> <span>Clanovi tima</span>
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu pt_ul">
                                      <?php 
                                        foreach($arr_members as $member)
                                        {
                                      ?>
                                      <li style="display: flex">
                                        <a href="#" class="pt_a"><i class="fa fa-minus"></i> <?php echo "@".$member["username"] ?></a>
                                      </li><?php } ?>
                                  </ul>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Zaduzenje - <?php echo $line['team_task'] ?></a>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Opis - <?php echo $line['team_description'] ?></a>
                              </li>
                              <li class="pt_li1">
                                  <a class="pt_a" href="?edit=<?php echo $id ?>" >Izmena</a>
                              </li>
                          </ul>
                      </li>
                      <?php }               
                      $id++;
                      }
                      

                      for($i = 0; $i < $id; $i++)
                      {
                          if(isset($_POST['submit_'.$i]))
                          {
                              $team_id = $_POST['team_id_'.$i];
                              $arr = $connection->query("SELECT * FROM Teams WHERE team_id='$team_id'")->fetchAll();
                              $old_tl = $team_leader = $arr[0]['team_leader_username'];
                              $ses_id = $_SESSION['id'];

                              isset($_POST['team_name_'.$i]) ? $team_name = $_POST['team_name_'.$i] : $team_name = $arr[0]['team_name'];
                              isset($_POST['team_leader_'.$i]) ? $team_leader = $_POST['team_leader_'.$i] : $team_leader = $arr[0]['team_leader_username'];
                              isset($_POST['team_task_'.$i]) ? $team_task = $_POST['team_task_'.$i] : $team_task = $arr[0]['team_task'];
                              isset($_POST['team_description_'.$i]) ? $team_description = $_POST['team_description_'.$i] : $team_description = $arr[0]['team_description'];

                              $connection->query("UPDATE Teams SET team_task='$team_task', team_description='$team_description' WHERE team_id='$team_id'");
                            
                              if($team_name != $arr[0]['team_name'])
                              {
                                if(!checkTeamname($team_name, $connection))
                                {
                                  $connection->query("UPDATE Teams SET team_name='$team_name' WHERE team_id = '$team_id'"); 
                                }
                                else
                                {
                                  echo "<script> alert('Ime tima $team_name je zauzeto.') </script>";
                                }
                              }

                              if($team_leader != $arr[0]['team_leader_username'])
                              {
                                if(checkUsername($team_leader, $connection) == 0)
                                {
                                  echo "<script> alert('Korisnik @$team_leader ne postoji.') </script>";
                                }
                                else if(checkUsername($team_leader, $connection) == -1)
                                {
                                  echo "<script> alert('Korisnik @$team_leader je clan tima.') </script>";
                                }
                                else
                                {
                                  $connection->query("UPDATE Teams SET team_leader_username='$team_leader' WHERE team_id = '$team_id'"); 
                                  $connection->query("UPDATE User SET team_id='0' WHERE username='$old_tl'");
                                  $connection->query("UPDATE User SET team_id='$team_id' WHERE username='$team_leader'");
                                }
                              }
                              echo "<script> window.location.href='project_teams_view.php'</script>";
                          }
                      }
                      ?>
                      

                      
                  </ul>

                              
              </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </form>
      <?php } ?>

      <?php 
        if($_SESSION['role_id'] == 2)
        {
          $pm_username = $_SESSION['username'];
          $project_id_arr = $connection->query("SELECT * FROM Projects WHERE project_manager = '$pm_username'")->fetchAll();
      ?>
          <form method="POST" action="project_teams_view.php" class="form-horizontal" id='team_form'>
              <div class="box-body">
                  <ul class="sidebar-menu" data-widget="tree">
                      <?php
                      foreach($arr as $line)
                      {
                        $team_id = $line['team_id'];
                        $team_leader = $line['team_leader_username'];
                        $arr_members = $connection->query("SELECT username FROM User WHERE team_id = '$team_id' AND username != '$team_leader'")->fetchAll();

                        if($line['project_id'] == $project_id_arr[0]['project_id'])
                        {
                          if($_SESSION['editable'] && $edit == $id)
                          {
                            $_SESSION['id'] = $id;
                        
                      ?>
                      <li class="treeview pt_li_hover">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span><?php echo $line['team_name'] ?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu pt_ul">
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i>Ime tima - </a><input class="pt_input" type="text" name="team_name_<?php echo $id ?>" value="<?php echo $line['team_name'] ?>"><a title="Obrisi tim" class="pt_a" href='?edit=<?php echo $id ?>&team_id=<?php echo $team_id ?>'><i class='glyphicon glyphicon-remove'></i></a>
                              </li>
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i>Tim lider - @</a><input class="pt_input" type="text" name="team_leader_<?php echo $id ?>" value="<?php echo $line['team_leader_username'] ?>">
                              </li>
                              <li class="treeview">
                                  <a href="#">
                                  <i class="fa fa-minus"></i> <span>Clanovi tima</span>
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu pt_ul">
                                      <form action="" method="POST" id="form_plus">
                                        <li style="display: flex">
                                          <a href="#" class="pt_a" onclick="popup()"><i class="glyphicon glyphicon-plus"></i></a>
                                          <?php 
                                            if(isset($_GET['usernameAdd']))
                                            {
                                              $_SESSION['username'] = $_GET['usernameAdd'];
                                              $usernames = explode(" ", $_SESSION['username']);

                                              foreach($usernames as $username)
                                              {
                                                $ses_id = $_SESSION['id'];
                                                if(checkUsername($username, $connection) == 1) $connection->query("UPDATE User SET team_id='$team_id' WHERE username='$username'");
                                                else if (checkUsername($username, $connection) == -1) echo "<script> alert('Korisnik @$username je clan tima.') </script>";
                                                else if (checkUsername($username, $connection) == 0) echo "<script> alert('Korisnik @$username ne postoji.') </script>";
                                              }
                                              echo "<script> window.location.href='project_teams_view.php?edit=$ses_id'</script>";
                                            }
                                          ?>
                                        </li>
                                      </form>
                                      <?php foreach($arr_members as $member)
                                        {
                                      ?>
                                      <li style="display: flex">
                                        <a href="#"><i class="fa fa-minus"></i>@ <?php echo $member['username'] ?></a><a class="pt_a" href='?edit=<?php echo $id ?>&username=<?php echo $member['username'] ?>'><i class='glyphicon glyphicon-remove'></i></a>
                                      </li><?php }?>
                                  </ul>
                              </li>
                              <li style="display: flex; margin-top: 10px; margin-bottom: 10px;">
                                  <a href="#"><i class="fa fa-minus"></i>Zaduzenje - </a>
                                  <select name="team_task_<?php echo $id ?>" class="form-control select2 select2-hidden-accessible pt_select">
                                    <option selected hidden disabled><?php echo $line['team_task'] ?> </option>
                                    <option>A</option>
                                    <option>A2</option>
                                    <option>A3</option>
                                    <option>A4</option>
                                    <option>A5</option>
                                    <option>A6</option>
                                    <option>A7</option>
                                  </select>
                              </li>
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i>Opis - </a><input class="pt_input" name="team_description_<?php echo $id ?>" type="text" value="<?php echo $line['team_description'] ?>">
                              </li>
                              <input type="hidden" name="team_id_<?php echo $id ?>" value="<?php echo $team_id ?>">
                              <li class="pt_li1">
                                <a class="pt_a"><button title="Potvrdi izmene" class="pt_btn" type="submit" id="submit_<?php echo $id ?>" name="submit_<?php echo $id ?>"><i class='glyphicon glyphicon-ok'></i></button></a><a title="Ponisti izmene" class="pt_a" href='?edit=-1'><button class="pt_btn"><i class='glyphicon glyphicon-remove'></i></button></a>
                              </li>
                          </ul>
                      </li>
                      
                      <?php }
                      

                      else
                      {?>
                        <li class="treeview pt_li_hover">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span><?php echo $line['team_name'] ?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu pt_ul">
                              <li style="display: flex">
                                <a href="#" class="pt_a"><i class="fa fa-minus"></i> Tim lider - @<?php echo $line['team_leader_username'] ?></a>
                              </li>
                              <li class="treeview">
                                  <a href="#" class="pt_a">
                                  <i class="fa fa-minus"></i> <span>Clanovi tima</span>
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu pt_ul">
                                      <?php 
                                        foreach($arr_members as $member)
                                        {
                                      ?>
                                      <li style="display: flex">
                                        <a href="#" class="pt_a"><i class="fa fa-minus"></i> <?php echo "@".$member["username"] ?></a>
                                      </li><?php } ?>
                                  </ul>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Zaduzenje - <?php echo $line['team_task'] ?></a>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Opis - <?php echo $line['team_description'] ?></a>
                              </li>
                              <li class="pt_li1">
                                  <a class="pt_a" href="?edit=<?php echo $id ?>" >Izmena</a>
                              </li>
                          </ul>
                      </li>
                      <?php } }              
                      $id++;
                      }
                      

                      for($i = 0; $i < $id; $i++)
                      {
                          if(isset($_POST['submit_'.$i]))
                          {
                              $team_id = $_POST['team_id_'.$i];
                              $arr = $connection->query("SELECT * FROM Teams WHERE team_id='$team_id'")->fetchAll();
                              $old_tl = $team_leader = $arr[0]['team_leader_username'];
                              $ses_id = $_SESSION['id'];

                              isset($_POST['team_name_'.$i]) ? $team_name = $_POST['team_name_'.$i] : $team_name = $arr[0]['team_name'];
                              isset($_POST['team_leader_'.$i]) ? $team_leader = $_POST['team_leader_'.$i] : $team_leader = $arr[0]['team_leader_username'];
                              isset($_POST['team_task_'.$i]) ? $team_task = $_POST['team_task_'.$i] : $team_task = $arr[0]['team_task'];
                              isset($_POST['team_description_'.$i]) ? $team_description = $_POST['team_description_'.$i] : $team_description = $arr[0]['team_description'];

                              $connection->query("UPDATE Teams SET team_task='$team_task', team_description='$team_description' WHERE team_id='$team_id'");
                            
                              if($team_name != $arr[0]['team_name'])
                              {
                                if(!checkTeamname($team_name, $connection))
                                {
                                  $connection->query("UPDATE Teams SET team_name='$team_name' WHERE team_id = '$team_id'"); 
                                }
                                else
                                {
                                  echo "<script> alert('Ime tima $team_name je zauzeto.') </script>";
                                }
                              }

                              if($team_leader != $arr[0]['team_leader_username'])
                              {
                                if(checkUsername($team_leader, $connection) == 0)
                                {
                                  echo "<script> alert('Korisnik @$team_leader ne postoji.') </script>";
                                }
                                else if(checkUsername($team_leader, $connection) == -1)
                                {
                                  echo "<script> alert('Korisnik @$team_leader je clan tima.') </script>";
                                }
                                else
                                {
                                  $connection->query("UPDATE Teams SET team_leader_username='$team_leader' WHERE team_id = '$team_id'"); 
                                  $connection->query("UPDATE User SET team_id='0' WHERE username='$old_tl'");
                                  $connection->query("UPDATE User SET team_id='$team_id' WHERE username='$team_leader'");
                                }
                              }
                              echo "<script> window.location.href='project_teams_view.php'</script>";
                          }
                      }
                      ?>
                      

                      
                  </ul>

                              
              </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </form>
      <?php } ?>

      <?php 
        if($_SESSION['role_id'] == 3)
        {
          $tl_username = $_SESSION['username'];
          $tl_id_arr = $connection->query("SELECT * FROM Teams WHERE team_leader_username = '$tl_username'")->fetchAll();
      ?>
          <form method="POST" action="project_teams_view.php" class="form-horizontal" id='team_form'>
              <div class="box-body">
                  <ul class="sidebar-menu" data-widget="tree">
                      <?php
                      foreach($arr as $line)
                      {
                        $team_id = $line['team_id'];
                        $team_leader = $line['team_leader_username'];
                        $arr_members = $connection->query("SELECT username FROM User WHERE team_id = '$team_id' AND username != '$team_leader'")->fetchAll();

                        if($team_id == $tl_id_arr[0]['team_id'])
                        {
                          if($_SESSION['editable'] && $edit == $id)
                          {
                            $_SESSION['id'] = $id;
                        
                      ?>
                      <li class="treeview pt_li_hover">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span><?php echo $line['team_name'] ?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu pt_ul">
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i> Tim lider - @<?php echo $line['team_leader_username'] ?></a>
                              </li>
                              <li class="treeview">
                                  <a href="#">
                                  <i class="fa fa-minus"></i> <span>Clanovi tima</span>
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu pt_ul">
                                      <form action="" method="POST" id="form_plus">
                                        <li style="display: flex">
                                          <a href="#" class="pt_a" onclick="popup()"><i class="glyphicon glyphicon-plus"></i></a>
                                          <?php 
                                            if(isset($_GET['usernameAdd']))
                                            {
                                              $_SESSION['username'] = $_GET['usernameAdd'];
                                              $usernames = explode(" ", $_SESSION['username']);

                                              foreach($usernames as $username)
                                              {
                                                $ses_id = $_SESSION['id'];
                                                if(checkUsername($username, $connection) == 1) $connection->query("UPDATE User SET team_id='$team_id' WHERE username='$username'");
                                                else if (checkUsername($username, $connection) == -1) echo "<script> alert('Korisnik @$username je clan tima.') </script>";
                                                else if (checkUsername($username, $connection) == 0) echo "<script> alert('Korisnik @$username ne postoji.') </script>";
                                              }
                                              echo "<script> window.location.href='project_teams_view.php?edit=$ses_id'</script>";
                                            }
                                          ?>
                                        </li>
                                      </form>
                                      <?php foreach($arr_members as $member)
                                        {
                                      ?>
                                      <li style="display: flex">
                                        <a href="#"><i class="fa fa-minus"></i>@ <?php echo $member['username'] ?></a><a class="pt_a" href='?edit=<?php echo $id ?>&username=<?php echo $member['username'] ?>'><i class='glyphicon glyphicon-remove'></i></a>
                                      </li><?php }?>
                                  </ul>
                              </li>
                              <li style="display: flex; margin-top: 10px; margin-bottom: 10px;">
                                  <a href="#"><i class="fa fa-minus"></i>Zaduzenje - </a>
                                  <select name="team_task_<?php echo $id ?>" class="form-control select2 select2-hidden-accessible pt_select">
                                    <option selected hidden disabled><?php echo $line['team_task'] ?> </option>
                                    <option>A</option>
                                    <option>A2</option>
                                    <option>A3</option>
                                    <option>A4</option>
                                    <option>A5</option>
                                    <option>A6</option>
                                    <option>A7</option>
                                  </select>
                              </li>
                              <li style="display: flex">
                                <a href="#"><i class="fa fa-minus"></i>Opis - </a><input class="pt_input" name="team_description_<?php echo $id ?>" type="text" value="<?php echo $line['team_description'] ?>">
                              </li>
                              <input type="hidden" name="team_id_<?php echo $id ?>" value="<?php echo $team_id ?>">
                              <li class="pt_li1">
                                <a class="pt_a"><button title="Potvrdi izmene" class="pt_btn" type="submit" id="submit_<?php echo $id ?>" name="submit_<?php echo $id ?>"><i class='glyphicon glyphicon-ok'></i></button></a><a title="Ponisti izmene" class="pt_a" href='?edit=-1'><button class="pt_btn"><i class='glyphicon glyphicon-remove'></i></button></a>
                              </li>
                          </ul>
                      </li>
                      
                      <?php }

                      else
                      {?>
                        <li class="treeview pt_li_hover">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span><?php echo $line['team_name'] ?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu pt_ul">
                              <li style="display: flex">
                                <a href="#" class="pt_a"><i class="fa fa-minus"></i> Tim lider - @<?php echo $line['team_leader_username'] ?></a>
                              </li>
                              <li class="treeview">
                                  <a href="#" class="pt_a">
                                  <i class="fa fa-minus"></i> <span>Clanovi tima</span>
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu pt_ul">
                                      <?php 
                                        foreach($arr_members as $member)
                                        {
                                      ?>
                                      <li style="display: flex">
                                        <a href="#" class="pt_a"><i class="fa fa-minus"></i> <?php echo "@".$member["username"] ?></a>
                                      </li><?php } ?>
                                  </ul>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Zaduzenje - <?php echo $line['team_task'] ?></a>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Opis - <?php echo $line['team_description'] ?></a>
                              </li>
                              <li class="pt_li1">
                                  <a class="pt_a" href="?edit=<?php echo $id ?>" >Izmena</a>
                              </li>
                          </ul>
                      </li>
                      <?php }  }             
                      $id++;
                      }
                      

                      for($i = 0; $i < $id; $i++)
                      {
                          if(isset($_POST['submit_'.$i]))
                          {
                              $team_id = $_POST['team_id_'.$i];
                              $arr = $connection->query("SELECT * FROM Teams WHERE team_id='$team_id'")->fetchAll();
                              $old_tl = $team_leader = $arr[0]['team_leader_username'];
                              $ses_id = $_SESSION['id'];

                              isset($_POST['team_name_'.$i]) ? $team_name = $_POST['team_name_'.$i] : $team_name = $arr[0]['team_name'];
                              isset($_POST['team_leader_'.$i]) ? $team_leader = $_POST['team_leader_'.$i] : $team_leader = $arr[0]['team_leader_username'];
                              isset($_POST['team_task_'.$i]) ? $team_task = $_POST['team_task_'.$i] : $team_task = $arr[0]['team_task'];
                              isset($_POST['team_description_'.$i]) ? $team_description = $_POST['team_description_'.$i] : $team_description = $arr[0]['team_description'];

                              $connection->query("UPDATE Teams SET team_task='$team_task', team_description='$team_description' WHERE team_id='$team_id'");
                            
                              if($team_name != $arr[0]['team_name'])
                              {
                                if(!checkTeamname($team_name, $connection))
                                {
                                  $connection->query("UPDATE Teams SET team_name='$team_name' WHERE team_id = '$team_id'"); 
                                }
                                else
                                {
                                  echo "<script> alert('Ime tima $team_name je zauzeto.') </script>";
                                }
                              }

                              if($team_leader != $arr[0]['team_leader_username'])
                              {
                                if(checkUsername($team_leader, $connection) == 0)
                                {
                                  echo "<script> alert('Korisnik @$team_leader ne postoji.') </script>";
                                }
                                else if(checkUsername($team_leader, $connection) == -1)
                                {
                                  echo "<script> alert('Korisnik @$team_leader je clan tima.') </script>";
                                }
                                else
                                {
                                  $connection->query("UPDATE Teams SET team_leader_username='$team_leader' WHERE team_id = '$team_id'"); 
                                  $connection->query("UPDATE User SET team_id='0' WHERE username='$old_tl'");
                                  $connection->query("UPDATE User SET team_id='$team_id' WHERE username='$team_leader'");
                                }
                              }
                              echo "<script> window.location.href='project_teams_view.php'</script>";
                          }
                      }
                      ?>
                      

                      
                  </ul>

                              
              </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </form>
      <?php } ?>


      <?php 
        if($_SESSION['role_id'] == 4)
        {
          $exec_username = $_SESSION['username'];
          $exec_team_id = $connection->query("SELECT team_id FROM User WHERE username = '$exec_username'")->fetchAll();
      ?>
          <form method="POST" action="project_teams_view.php" class="form-horizontal" id='team_form'>
              <div class="box-body">
                  <ul class="sidebar-menu" data-widget="tree">
                      <?php
                      foreach($arr as $line)
                      {
                        $team_id = $line['team_id'];
                        $team_leader = $line['team_leader_username'];
                        $arr_members = $connection->query("SELECT username FROM User WHERE team_id = '$team_id' AND username != '$team_leader'")->fetchAll();

                        if($team_id == $exec_team_id[0]['team_id'])
                        {
                          
                    ?>
                        <li class="treeview pt_li_hover">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span><?php echo $line['team_name'] ?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu pt_ul">
                              <li style="display: flex">
                                <a href="#" class="pt_a"><i class="fa fa-minus"></i> Tim lider - @<?php echo $line['team_leader_username'] ?></a>
                              </li>
                              <li class="treeview">
                                  <a href="#" class="pt_a">
                                  <i class="fa fa-minus"></i> <span>Clanovi tima</span>
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu pt_ul">
                                      <?php 
                                        foreach($arr_members as $member)
                                        {
                                      ?>
                                      <li style="display: flex">
                                        <a href="#" class="pt_a"><i class="fa fa-minus"></i> <?php echo "@".$member["username"] ?></a>
                                      </li><?php } ?>
                                  </ul>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Zaduzenje - <?php echo $line['team_task'] ?></a>
                              </li>
                              <li style="display: flex;">
                                  <a href="#" class="pt_a"><i class="fa fa-minus"></i> Opis - <?php echo $line['team_description'] ?></a>
                              </li>
                          </ul>
                      </li>
                      <?php }               
                      $id++;
                      }
                      

                      for($i = 0; $i < $id; $i++)
                      {
                          if(isset($_POST['submit_'.$i]))
                          {
                              $team_id = $_POST['team_id_'.$i];
                              $arr = $connection->query("SELECT * FROM Teams WHERE team_id='$team_id'")->fetchAll();
                              $old_tl = $team_leader = $arr[0]['team_leader_username'];
                              $ses_id = $_SESSION['id'];

                              isset($_POST['team_name_'.$i]) ? $team_name = $_POST['team_name_'.$i] : $team_name = $arr[0]['team_name'];
                              isset($_POST['team_leader_'.$i]) ? $team_leader = $_POST['team_leader_'.$i] : $team_leader = $arr[0]['team_leader_username'];
                              isset($_POST['team_task_'.$i]) ? $team_task = $_POST['team_task_'.$i] : $team_task = $arr[0]['team_task'];
                              isset($_POST['team_description_'.$i]) ? $team_description = $_POST['team_description_'.$i] : $team_description = $arr[0]['team_description'];

                              $connection->query("UPDATE Teams SET team_task='$team_task', team_description='$team_description' WHERE team_id='$team_id'");
                            
                              if($team_name != $arr[0]['team_name'])
                              {
                                if(!checkTeamname($team_name, $connection))
                                {
                                  $connection->query("UPDATE Teams SET team_name='$team_name' WHERE team_id = '$team_id'"); 
                                }
                                else
                                {
                                  echo "<script> alert('Ime tima $team_name je zauzeto.') </script>";
                                }
                              }

                              if($team_leader != $arr[0]['team_leader_username'])
                              {
                                if(checkUsername($team_leader, $connection) == 0)
                                {
                                  echo "<script> alert('Korisnik @$team_leader ne postoji.') </script>";
                                }
                                else if(checkUsername($team_leader, $connection) == -1)
                                {
                                  echo "<script> alert('Korisnik @$team_leader je clan tima.') </script>";
                                }
                                else
                                {
                                  $connection->query("UPDATE Teams SET team_leader_username='$team_leader' WHERE team_id = '$team_id'"); 
                                  $connection->query("UPDATE User SET team_id='0' WHERE username='$old_tl'");
                                  $connection->query("UPDATE User SET team_id='$team_id' WHERE username='$team_leader'");
                                }
                              }
                              echo "<script> window.location.href='project_teams_view.php'</script>";
                          }
                      }
                      ?>
                      

                      
                  </ul>

                              
              </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </form>
      <?php } ?>

      </div>
    </div>
  
    


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

<script>
  function popup()
  {
    var username = prompt("Unesite korisnicka imena (username) clanova odvojena praznim poljem: ", " ");

    window.location.href = 'project_teams_view.php?edit=<?php echo $_SESSION['id'] ?>&usernameAdd='+username;
  }
</script>
</body>
</html>

<?php

  unset($_SESSION['editable']);
?>