<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buildira 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/buildira.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body class="hold-transition login-page">
<?php
  require_once('backend_pages/login_backend.php');
?>
<div class="login-box">
  <div class="login-logo">
    <a href="../index2.html"><b>Buildira</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Uloguj se</p>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Mejl" name="email" value="<?php if(isset($_COOKIE["email_cookie"])) {echo $_COOKIE["email_cookie"];}?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="error"><?php echo $email_err; ?></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Šifra" name="password" value="<?php if(isset($_COOKIE["password_cookie"])) {echo $_COOKIE["password_cookie"];}?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="error"><?php echo $password_err; ?></div>
      </div>
      <div class="error"><?php echo $credentials_err; ?></div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="chkbox"> Zapamti me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Uloguj se</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- ILI -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Uloguj se koristeći Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Uloguj se koristeći
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">Zaboravio si šifru?</a><br>
    <a href="register.html" class="text-center">Registruj novog korisnika</a>

  </div>
  <!-- /.login-box-body -->
</div>S
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
