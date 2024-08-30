<?php
session_start();
$email_sesion = "";
if (isset($_SESSION['sesion_email'])) {
  // echo "ha pasdo por logeado";
  $email_sesion = $_SESSION['sesion_email'];
  $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion'";
  $query = $pdo->prepare($sql);
  $query->execute();
  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($usuarios as $usuario) {
    $id_usuario_sesion = $usuario['id_usuario'];
    $cargo_sesion = $usuario['cargo'];
  }
} else {
  // echo "no a pasado por el login";
  //header('location:' . $URL . '/login');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/css/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/css/style.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>//public//css/style.css">
  <script src="public/js/jquery-3.7.1.slim.min.js"></script>

  <title>Sistema de Veterinario</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand " href="<?php echo $URL; ?>" style="display: flex; align-items: center; gap:5px;">
        <img src="public/images/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        Sabueso
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="#nosotros" class="nav-link btn btn-outline-info" aria-current="page" href="#"> <i class="bi bi-house-door-fill"> </i>Nosotros</a>
          </li>
          <a href="#testimonio"></a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ofrecemos
            </a>
            <ul class="dropdown-menu ">
              <li>
                <a class="dropdown-item" href="#Servisios">Nuestro Servicios</a>
              </li>
              <li><a class="dropdown-item" href="#Productos">Nuestro Productos</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-info" href="#testimonio">Testimonio</a>
          </li>
          <li class="nav-item">

            <a href="#contactanos" class="nav-link btn btn-outline-info " aria-disabled="true">Contactanos</a>
          </li>
        </ul>
        <div class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Search</button>
          <?php
          if ($email_sesion == "") {
            // echo "sin logiarse ";
          ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Registar
                </a>
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="<?php echo $URL; ?>/login/index.php">Inisiar Sesion</a></li>
                  <li><a class="dropdown-item" href="<?php echo $URL; ?>/login/registro.php">Registarate</a></li>

                </ul>
              </li>

            </ul>

          <?php
          } else {
            //echo "paso por el login";
          ?>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Biembenido <?php echo $email_sesion; ?>
                </a>
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="<?php echo $URL; ?>/app/controlers/login/cerrar_sesion.php">Cerrar Sesion</a></li>

                </ul>
              </li>

            </ul>
          <?php
          }

          ?>

        </div>
      </div>
    </div>
  </nav>