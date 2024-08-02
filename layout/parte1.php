<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="/public//css/style.css">
  <script src="public/js/jquery-3.7.1.slim.min.js"></script>

  <title>Sistema de Veterinario</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand   " href="#" style="display: flex; align-items: center; gap: 10px;">
        <img src="public/images/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        Bootstrap
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
                <a class="dropdown-item" href="#">Nuestro Servicios</a>
              </li>
              <li><a class="dropdown-item" href="#">Nuestro Productos</a></li>
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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Registar
              </a>
              <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="login/index.php">Inisiar Sesion</a></li>
                <li><a class="dropdown-item" href="login">Registarate</a></li>

              </ul>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>