<?php
include('app/config.php');
include('app/controlers/productos/listado_de_productos.php')
?>

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
          <a href=""></a>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-info" href="#">Clientes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ofrecemos
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="#">Nuestro Servicios</a></li>
              <li><a class="dropdown-item" href="#">Nuestro Productos</a></li>
              <li>
              </li>
            </ul>
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

  <a href="" class="btn btn-success rounded-circle contact-btn" style="position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; z-index: 1000;">
    <i class="bi bi-whatsapp" style="font-size: 30px;"></i>
  </a>

  <section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="https://cdn.pixabay.com/photo/2013/02/25/04/37/veterinary-85925_1280.jpg" height="600px" class="d-block w-100 bg-primary opacity-50" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <a href="" class="btn btn-outline-info btn-lg">Reserva cita</a>
            <a href="" class="btn btn-info btn-lg">Ver Productos</a><br><br>
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="https://cdn.pixabay.com/photo/2023/12/06/19/00/dog-8434227_960_720.jpg" height="600px" class="d-block w-100 opacity-50" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <a href="" class="btn btn-outline-info btn-lg">Reserva cita</a>
            <a href="" class="btn btn-info btn-lg">Ver Productos</a><br><br>
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


  <section class="info" id="nosotros">
    <div class="container py-sm-5 ">
      <div class="row">
        <div class="col-md-6  col-sm-12">
          <center>
            <img src="public/images/1.png" width="100%" height="500px">
          </center>
        </div>
        <div class=" col-md-6 col-sm-12 d-flex flex-column justify-content-center ">
          <h2 style="text-align: center;">Acerca de Nuestra <span class="text-info">clinica de mascotas</span></h2>
          <br>
          <p style="text-align:justify ;">En , creemos que las mascotas son más que
            animales de compañía; son parte
            de la
            familia. Nuestro compromiso es brindarles el cuidado y la atención que merecen, asegurándonos de que cada
            visita a
            nuestra clínica sea una experiencia positiva tanto para ellos como para ti.</p>
          <br>
          <div class="">

            <a href="" class="btn btn-outline-info btn-lg">Saber sobre nosotros</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-services ">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <br><br>
          <h2>Nuestros <span class="text-info">servisios</span> </h2>
        </div>
      </div>

      <div class="row align-items-center py-4">
        <div class="col-md-3 py-3 zoomp">
          <div class="card ">
            <img src=" https://cdn.pixabay.com/photo/2017/11/09/21/41/cat-2934720_1280.jpg" height="200px class=" card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
              </p>
              <a href="" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-md-3  py-3 zoomp">
          <div class="card" ">
            <img src=" https://cdn.pixabay.com/photo/2024/01/18/17/46/ai-generated-8517306_1280.jpg " height=" 200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-3  py-3 zoomp">
          <div class="card">
            <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px
              class=" card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-3   py-3  zoomp">
          <img src="https://img.freepik.com/free-vector/adopt-from-shelter-give-pet-home_23-2148521774.jpg?t=st=1720590735~exp=1720594335~hmac=fcff67693a72dbb1198308e4ce4fd855d901c43a671b8c8c28c36dda4dab2469&w=826" width="100%" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="galery">
    <div class="container py-5 ">
      <h2>Nuestra <span class="text-info">Galeria </span> </h2>
      <div class="row">

        <div class="col-md-4 py-3 zoomp">
          <center>
            <img src="https://cdn.pixabay.com/photo/2020/04/21/06/41/bulldog-5071407_1280.jpg" width="100%" height="320px" alt="">
          </center>
        </div>
        <div class="col-md-8 py-3 zoomp">
          <center>
            <img src="https://cdn.pixabay.com/photo/2017/06/25/00/26/pets-2439295_960_720.jpg" width="100%" height="320px" alt="">
          </center>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4  py-3 zoomp">
          <center>
            <img src="https://cdn.pixabay.com/photo/2016/12/18/23/37/cute-1917047_1280.jpg" width="100% " height="320px" alt="">
          </center>
        </div>
        <div class="col-md-4 py-3 zoomp">
          <center>
            <img src="https://cdn.pixabay.com/photo/2017/06/24/09/13/continental-bulldog-2437110_1280.jpg" width="100% " height="320px" alt="">
          </center>
        </div>
        <div class="col-md-4 py-3 zoomp">
          <center>
            <img src="https://cdn.pixabay.com/photo/2022/07/01/04/58/pomeranian-7294936_1280.jpg" width="100% " height="320px" alt="">
          </center>
        </div>
      </div>
    </div>
  </section>


  <section class="clientes">
    <div class="container py-5">
      <h2 class="text-center">Testimonios de <span class="text-info"> Clientes </span> </h2>
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner py-4 ">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2024/03/02/13/05/orange-parrots-8608540_1280.jpg" height="200px" class=" card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>


  <section class="contactanos galery " id="contactanos">
    <div class="container py-5">
      <h2 class="text-center text-info py-4">Contáctanos</h2>
      <div class="row  flex-row align-items-center">
        <div class="col-md-6">
          <img src="public/images/contact.svg" width="100%" class=" sm pb-5     " alt="">
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
          <form>
            <div class="mb-3">
              <label for="nombre" class="form-label font-weight-bold">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
            </div>
            <div class="mb-3">
              <label for="mensaje" class="form-label">Mensaje</label>
              <textarea class="form-control" id="mensaje" rows="3" placeholder="Ingrese su mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-info text-white">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <style>
    .bg-gradient-info {
      background-image: linear-gradient(180deg, #0dcaf0 0%, #000 100%);
    }
  </style>


  <footer class="bg-gradient-info text-white pt-4">
    <div class="container">
      <div class="row flex-row align-items-center justify-content-center">
        <div class="   col-md-4">
          <center>
            <img src="public/images/logo.png" width="200px" alt="Logo" class="img-fluid mb-2 mx-auto">
          </center>
          <h5 class="text-center ">Sobre Nosotros</h5>

          <p>Somos una empresa dedicada a proporcionar soluciones innovadoras para nuestros clientes.</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-center">Navegación</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Inicio</a></li>
            <li><a href="#" class="text-white">Servicios</a></li>
            <li><a href="#" class="text-white">Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5 class="text-center">Contáctanos</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-envelope"></i> contacto@tudominio.com</li>
            <li><i class="bi bi-phone"></i> +123 456 7890</li>
            <li>
              <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
              <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-center py-3">
        &copy; 2024 Gaston Condori. Todos los derechos reservados.
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>