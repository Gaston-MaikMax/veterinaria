<?php
include('app/config.php');
include('layout/parte1.php');

include('app/controlers/productos/listado_de_productos.php')
?>



<a href="https://chat.whatsapp.com/LYHCDEXsmoCKjYWnGTlCB7" target="_blank" class="btn btn-success rounded-circle contact-btn" style="position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; z-index: 1000;">
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
          <img src="public/images/im1.jpg" style="width: 100%; height: 320px; object-fit: cover;" alt="">
        </center>
      </div>
      <div class="col-md-8 py-3 zoomp">
        <center>
          <img src="public/images/im3.jpg" style="width: 100%; height: 320px; object-fit: cover;" alt="">
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4  py-3 zoomp">
        <center>
          <img src="public/images/im5.jpg" style="width: 100%; height: 320px; object-fit: cover;" alt="">
        </center>
      </div>
      <div class="col-md-4 py-3 zoomp">
        <center>
          <img src="public/images/im2.jpg" style="width: 100%; height: 320px; object-fit: cover;" alt="">
        </center>
      </div>
      <div class="col-md-4 py-3 zoomp">
        <center>
          <img src="public/images/im4.jpg" style="width: 100%; height: 320px; object-fit: cover;" alt="">
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
                  <img src="https://scontent.flpb2-2.fna.fbcdn.net/v/t39.30808-6/449979994_122101124228397442_1936157170380326319_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=pCYlwTIS01IQ7kNvgEwOlU6&_nc_oc=AdkVsyxHgseMWj9A39V6J3AL-fRWMylnV-v_ZxEKWMwZRt_C4DDrCcN1cFc_h2nbugQ&_nc_zt=23&_nc_ht=scontent.flpb2-2.fna&_nc_gid=cuI42mM9oBstiT8QgWH5xg&oh=00_AYFoyWnG6ql2FnWsNtVGFt8xetBRnWPtIeRdKbaBNDYPIQ&oe=67EA43D2" height="200px" class=" card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Diego Fernández</h5>
                    <p class="card-text">Mi perro, Max, es muy miedoso y siempre se pone nervioso en las visitas al veterinario. Pero en Veterinaria Sabueso, el personal fue muy paciente y cariñoso con él. Max se sintió cómodo y tranquilo durante toda la consulta. ¡Recomiendo esta clínica a todos los dueños de mascotas nerviosas!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://scontent.flpb2-2.fna.fbcdn.net/v/t39.30808-6/462125550_1244780426553847_959822921623118171_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=KagnlkaLmAAQ7kNvgHU-kpa&_nc_oc=AdlaVTZr7Vd1j1MRDI_Wi65WR1npn8l3Uv3vLG2U_bhmWeNCnsW8wXIlsws0Eb11QcM&_nc_zt=23&_nc_ht=scontent.flpb2-2.fna&_nc_gid=06uZkti0WgTYCN5dE5twLw&oh=00_AYFhHEiosK0Y8VybGjBfUDI_zECngOl8BqFHa1FhRTQ7pA&oe=67EA6C4B" style="height: 200px; object-fit: cover; display: block; margin: 0 auto;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sofía Ramírez</h5>
                    <p class="card-text">Llevé a mi gata, Luna, a Veterinaria Sabueso porque estaba muy enferma. El equipo fue increíblemente amable y profesional. Me explicaron todo el proceso de tratamiento y me mantuvieron informada en todo momento. Luna se recuperó por completo y ahora está más juguetona que nunca. ¡Gracias, Veterinaria Sabueso
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t39.30808-6/418950113_2302032906660474_3878740595914077950_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=rDcnW5liErQQ7kNvgHtiQ-A&_nc_oc=AdmJfb8CvyDybRiSZM05-bXwd3VCpFvCS9hc1-XpDxgKhIHp29JxnIcAhWYqHBFHuc0&_nc_zt=23&_nc_ht=scontent.flpb2-1.fna&_nc_gid=5QHyBg8mpIFK0AYnj2qqfw&oh=00_AYE_ENEkiFcEmn-eNCZ0zXAg8hWua4YYn6sDtG_WgqHdTg&oe=67EA792A" style="height: 200px; object-fit: cover; display: block; margin: 0 auto;" class="card-img-top" alt="...">
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
                  <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t39.30808-6/448972230_3965456373686414_1448842615914667067_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=6-HHkBnD90MQ7kNvgE8Xe4s&_nc_oc=AdmSsAKV75W4cuAX_WY4BFMy3xa8O09jPjby-7hzrQgDSkHVQ8CcR_cGx0PLxQpObQ0&_nc_zt=23&_nc_ht=scontent.flpb2-1.fna&_nc_gid=PmfF7zoe1BZ2YwA5Zw-9TQ&oh=00_AYGHuuRVb7bkm87evGu7ubJV3kOhT-6-wjHelkJMD1bzvg&oe=67EA7933" style="height: 200px; object-fit: cover; display: block; margin: 0 auto;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Mateo Vargas</h5>
                    <p class="card-text">En Veterinaria Sabueso, encontré un equipo de profesionales apasionados por los animales. Se nota que realmente se preocupan por el bienestar de las mascotas. Además, las instalaciones son modernas y limpias. ¡Me siento muy tranquila llevando a mis animales a esta clínica!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t39.30808-6/486531386_1171663764563574_3781623959149002157_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_ohc=y90h72_4RQIQ7kNvgGPvCye&_nc_oc=AdkIbJ-T67sxm4GA4G__87U_BBcwtcHQI_lhlGlshtOHb23rH-LPzzDZhaPYxO7yEuM&_nc_zt=23&_nc_ht=scontent.flpb2-1.fna&_nc_gid=s40el3NTZ_J1TuVgv4AlSg&oh=00_AYH6-fYB5KjJSKcFj9OUUPdttbXy8la2cRGveDTxmiPnpw&oe=67EA5FA4" style="height: 200px; object-fit: cover; display: block; margin: 0 auto;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Lucía Mendoza</h5>
                    <p class="card-text">SMi tortuga, Shelly, tenía un problema en su caparazón y estaba muy preocupada. En Veterinaria Sabueso, le hicieron un tratamiento especializado y ahora está sana y feliz. ¡Gracias por cuidar de mi pequeña Shelly!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">

                <div class="card">
                  <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t39.30808-6/284598850_130491699631502_6787786130005849342_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=lKnjm2oLLmIQ7kNvgHNMrmC&_nc_oc=Adlxnvu2-oiLFGa28THtKevIxEBnlGPZ0mWB14en5kWqBdEGKFxA9CK9-Re1IzvlalU&_nc_zt=23&_nc_ht=scontent.flpb2-1.fna&_nc_gid=5i66t4bOmsdDJP_7l9b8_Q&oh=00_AYGpvs4xRI4LoQb4vPmD7QwRIVahTePhFyJaAzE2sebT9w&oe=67EA4DBA" style="height: 200px; object-fit: cover; display: block; margin: 0 auto;" class="card-img-top" alt="...">
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
                  <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t39.30808-6/285991028_130633769596158_7712490067693523594_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=FFeHUojfEHIQ7kNvgFgNdRi&_nc_oc=AdnvDOVf-tK8vzflw_3NMH8jH2gevWg0W912L29yMCjUiF5661qbIlSzpK6ADWRvAAE&_nc_zt=23&_nc_ht=scontent.flpb2-1.fna&_nc_gid=AyKznWclsGBu7KuY11rEPw&oh=00_AYGuaY2sPe6K_RhKE8WtE7aECed8OfW3Ir-YjTCND63SWg&oe=67EA7D52" style="height: 200px; object-fit: cover; display: block; margin: 0 auto;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Andrés Herrera</h5>
                    <p class="card-text">Llevé a mi canario, Pío, a Veterinaria Sabueso porque no cantaba como antes. El veterinario descubrió que tenía una infección respiratoria y le dio el tratamiento adecuado. Ahora Pío canta todo el día. ¡Estoy muy contenta con el servicio!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t39.30808-6/284069541_107570535303938_498850210537397722_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=ghinT96tFNIQ7kNvgFdl73c&_nc_oc=AdlZW0RWd3DACuEQwIjJ6LLFd-vVNx7guBkdr5plGGSbm0LuN3eN131aSNhwsMUnfaU&_nc_zt=23&_nc_ht=scontent.flpb2-1.fna&_nc_gid=dVieCpXQy3jRWj-IlBumxQ&oh=00_AYHZNtMHEYTxC5JnnoA7snijhrGrAAoKEyOxy12zcjh00g&oe=67EA5E1A" style="height: 200px; object-fit: cover; display: block; margin: 0 auto;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Camila Ríos</h5>
                    <p class="card-text">Mi hurón, Flash, se había escapado y volvió con una herida. En Veterinaria Sabueso, lo atendieron de inmediato y le hicieron una pequeña cirugía. Se recuperó muy rápido y ahora está como nuevo. ¡Gracias por cuidar de mi travieso Flash!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t1.6435-9/164297486_110749304435105_6034552202445944286_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=xO9zEcukvewQ7kNvgHMb_us&_nc_oc=Adl8uEhGB7SM7JasJk7z6nbOVjfAdLHJPMsABUj2nPNSf-EHb2R8XIlv-aSb1pIGubg&_nc_zt=23&_nc_ht=scontent.flpb2-1.fna&_nc_gid=di2ySI2KvQjMwxDUue46PA&oh=00_AYHu5n19NJqsORRml3i6I08D61NLsT86-U87NBy71ZbcGg&oe=680C1C25" height="200px" class=" card-img-top" alt="...">
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