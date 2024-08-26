<?php
include('../app/config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?php echo APP_NAME ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../public/css/style.css">
</head>

<style>
  .info {
    background-image: url("../public/images/fondologin1.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    opacity: 0.9;


  }

  .fondo {
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 10px;

  }
</style>

<body class="hold-transition login-page info">
  <div class="login-box  ">
    <div class="login-logo ">
      <a href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/index2.html"><b class="text-warning font-weight-bold "></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card fondo  ">
      <div class="card-body login-card-body fondo">
        <center>
          <h1 class="text-white">Bienvenido</h1>
          <center>

            <img src="<?php echo $URL; ?>/public/images/logo.png" width="250px" height="200px" alt="">

          </center>
          <p class="login-box-msg text-white">Registratus datos</p>

          <form action="<?php echo $URL; ?>/app/controlers/login/controlerLogin.php" method="post">
            <label for="" class="text-white">Correo electronico</label>
            <div class="input-group mb-3">
              <input name="email" type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope text-white"></span>
                </div>
              </div>
            </div>

            <label for="" class="text-white">Contraseña</label>
            <div class="input-group mb-3">
              <input name="password" type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock text-white"></span>
                </div>
              </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary" style="width: 100%;">Ingresar</button>
            <br><br>

            <button class="btn btn-secondary" style="width: 100%; "> Canselar</button>

          </form>


          <!-- /.social-auth-links -->


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>

</html>