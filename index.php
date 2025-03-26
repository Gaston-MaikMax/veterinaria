<?php
include('app/config.php');
include('layout/parte1.php');

include('app/controlers/productos/listado_de_productos.php')
?>



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
        <div class="carousel-caption d-block">
          <div class="d-flex flex-column  justify-content-center flex-md-row gap-2 ">
            <a href="<?php echo $URL; ?>/reservar.php" class="btn btn-info btn-lg w-100 ">Reserva cita</a>
            <a href="#Productos" class="btn btn-info btn-lg w-100 ">Ver Productos</a>
          </div>
          <br>
          <h5>Ayuda a tu Mascota</h5>
          <p>Tráelo aquí a Veterinaria Sabueso</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="https://cdn.pixabay.com/photo/2023/12/06/19/00/dog-8434227_960_720.jpg" height="600px" class="d-block w-100 opacity-50" alt="...">
        <div class="carousel-caption d-block">
          <div class="d-flex flex-column flex-md-row gap-2 justify-content-center">
            <a href="<?php echo $URL; ?>/reservar.php" class="btn btn-info btn-lg w-100 ">Reserva cita</a>
            <a href="#Productos" class="btn btn-info btn-lg w-100 ">Ver Productos</a>
          </div>
          <br>
          <h5>Ayuda a tu Mascota</h5>
          <p>Tráelo aquí a Veterinaria Sabueso</p>
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



<section class="" id="nosotros">
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


        </div>
      </div>
    </div>
  </div>
</section>

<section class=" info our-services  " id="Servisios">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12">
        <br><br>
        <h2>Nuestros <span class="text-info">Servisios</span> </h2>
      </div>
    </div>

    <div class="row align-items-center py-4">
      <div class="col-md-3 py-3 zoomp">
        <div class="card ">
          <img src="public/images/servisio1.jpg" height="200px class=" card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center text-info">Consultas Generales y Exámenes de Rutina</h5>
            <p class="card-text">

              Realización de exámenes físicos completos ,

              Diagnóstico y tratamiento de enfermedades comunes ,

            </p>

          </div>
        </div>
      </div>

      <div class="col-md-3 py-3 zoomp">
        <div class="card ">
          <img src=" public/images/servisio2.webp" height="200px class=" card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center text-info">Vacunación</h5>
            <p class="card-text">
              Administración de vacunas esenciales ,
              Programas de vacunación para cachorros y gatos jóvenes ,
              Refuerzos anuales ,
              Prevención de enfermedades graves ,

            </p>

          </div>
        </div>
      </div>

      <div class="col-md-3 py-3 zoomp">
        <div class="card ">
          <img src=" public/images/servisio3.webp" height="200px class=" card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center text-info">Desparasitación</h5>
            <p class="card-text">

              Tratamientos regulares,
              Programas de prevención,
              Mejorar la salud y bienestar,
              Prevención de zoonosis,
            </p>

          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 zoomp">
        <div class="card ">
          <img src=" public/images/servisio4.jpg " height="200px class=" card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center text-info">Esterilización y Castración</h5>
            <p class="card-text">

              Cirugías para esterilizar y castrar,
              Consejería pre y postoperatoria,
              Control de la población de mascotas,
              Beneficios de salud
            </p>

          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<section class="our-services  " id="Productos">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12">
        <br><br>
        <h2>Nuestros <span class="text-info">Productos</span> </h2>
      </div>
    </div>

    <div class="row align-items-center py-4">
      <?php
      foreach ($productos as $producto) {
      ?>
        <div class="col-md-3 py-3 zoomp">
          <div class="card ">
            <img style="margin:20px 15px 0px 15px;" src="<?= $URL . "/public/images/productos/" . $producto['imagen'] ?> " height="200px class=" card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $producto['nombre_producto']; ?></h5>
              <p class="card-text"><?= $producto['descripcion']; ?>
              </p>
              <p style="margin: 0; font-weight: bold ; font-size: 20px;">BS. <?= $producto['precio_venta']; ?></p>

            </div>
          </div>
        </div>
      <?php
      }
      ?>





    </div>
  </div>
</section>

<section class="info">
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


<section class="clientes " id="testimonio">
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
                  <img src="https://images.unsplash.com/photo-1500048993953-d23a436266cf?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Diego Fernández</h5>
                    <p class="card-text">Mi perro, Max, es muy miedoso y siempre se pone nervioso en las visitas al veterinario. Pero en Veterinaria Sabueso, el personal fue muy paciente y cariñoso con él. Max se sintió cómodo y tranquilo durante toda la consulta. ¡Recomiendo esta clínica a todos los dueños de mascotas nerviosas!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1522&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sofía Ramírez</h5>
                    <p class="card-text">Llevé a mi gata, Luna, a Veterinaria Sabueso porque estaba muy enferma. El equipo fue increíblemente amable y profesional. Me explicaron todo el proceso de tratamiento y me mantuvieron informada en todo momento. Luna se recuperó por completo y ahora está más juguetona que nunca. ¡Gracias, Veterinaria Sabueso
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Isabella Torres</h5>
                    <p class="card-text">Tuve que llevar a mi conejo, Oreo, de urgencia a Veterinaria Sabueso porque se había roto una pata. El veterinario lo atendió de inmediato y le hizo una cirugía. Oreo se recuperó muy bien y ahora puede correr y saltar como antes. ¡Estoy muy agradecido con el excelente servicio que recibimos
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
                  <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?q=80&w=1378&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Mateo Vargas</h5>
                    <p class="card-text">En Veterinaria Sabueso, encontré un equipo de profesionales apasionados por los animales. Se nota que realmente se preocupan por el bienestar de las mascotas. Además, las instalaciones son modernas y limpias. ¡Me siento muy tranquila llevando a mis animales a esta clínica!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1525875975471-999f65706a10?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Lucía Mendoza</h5>
                    <p class="card-text">SMi tortuga, Shelly, tenía un problema en su caparazón y estaba muy preocupada. En Veterinaria Sabueso, le hicieron un tratamiento especializado y ahora está sana y feliz. ¡Gracias por cuidar de mi pequeña Shelly!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">

                <div class="card">
                  <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Valentina Castro</h5>
                    <p class="card-text">Después de visitar varias veterinarias, finalmente encontré Veterinaria Sabueso. El trato es excepcional, los precios son justos y el personal es muy atento. Mi perro, Toby, está encantado con sus visitas al veterinario. ¡Gracias por cuidar tan bien de mi mascota
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
                  <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?q=80&w=1448&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Andrés Herrera</h5>
                    <p class="card-text">Llevé a mi canario, Pío, a Veterinaria Sabueso porque no cantaba como antes. El veterinario descubrió que tenía una infección respiratoria y le dio el tratamiento adecuado. Ahora Pío canta todo el día. ¡Estoy muy contenta con el servicio!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1596215143922-eedeaba0d91c?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Camila Ríos</h5>
                    <p class="card-text">Mi hurón, Flash, se había escapado y volvió con una herida. En Veterinaria Sabueso, lo atendieron de inmediato y le hicieron una pequeña cirugía. Se recuperó muy rápido y ahora está como nuevo. ¡Gracias por cuidar de mi travieso Flash!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1642349775309-2dbeda905d6c?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Santiago Jiménez</h5>
                    <p class="card-text">En Veterinaria Sabueso, encontré un equipo de profesionales muy atentos y capacitados. Me explicaron todo el proceso de vacunación de mis cachorros y me dieron consejos muy útiles para su cuidado. ¡Recomiendo esta clínica a todos los dueños de mascotas
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

<section class="map">
  <div class="">
    <br><br>
    <h2 style="text-align: center;">Encuentranos aqui</h2><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d804.2413063845872!2d-68.11746866748317!3d-16.493861076979847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2041b6da0cef%3A0x5ddc49e049cc690b!2sVeterinaria%20Sabueso!5e0!3m2!1ses-419!2sbo!4v1722547992652!5m2!1ses-419!2sbo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<?php
include('layout/parte2.php');
include('admin/layout/mensaje.php');
?>