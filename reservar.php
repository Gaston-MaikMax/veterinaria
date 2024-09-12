<?php
include('app/config.php');
include('layout/parte1.php');

?>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

<script>
  var a;
  var $email_sesion = "<?php echo $email_sesion; ?>";
  // alert($email_sesion);


  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      editable: true,
      selectable: true,
      allDaySlot: false,


      events: 'app/controlers/reservas/cargar_reservas.php',
      events: 'app/controlers/reservas/cargar_reservas.php',

      dateClick: function(info) {
        a = info.dateStr;
        const fechaComoCadena = a;
        var numeroDia = new Date(fechaComoCadena).getDay();
        var dias = ["LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO , DOMINGO"];

        if ($email_sesion == "") {
          $('#modal_sesion').modal('show');

        } else {

          if (numeroDia == '6') {
            alert('No se puede reservar los domingos');
          } else if (numeroDia == '5') {
            alert('atencion solso en las mañanas');
            $('#modal_reservas').modal('show');
          } else {
            $('#modal_reservas').modal('show');
            $('#dia_de_la_semana').html(dias[numeroDia] + "  " + a);

            var fecha = info.dateStr;
            var res = "";
            var url = "app/controlers/reservas/verificar_horario.php";

            $.get(url, {
              fecha: fecha
            }, function(datos) {
              res = datos;
              console.log(res)
              $('#respuesta_horario').html(res);
            });


          }
        }

      },

    });
    calendar.render();
  });
</script>

<section class=" info our-services ">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12">
        <br><br>
        <h2 class="text-center">Reserva <span class="text-info">una Cita</span> </h2>
      </div>
    </div>

    <div class="row align-items-center py-4">
      <div id='calendar'></div>
    </div>
  </div>
</section>



<section class="map">
  <div class="">
    <br><br>
    <h1 style="text-align: center;" class="text-info">Encuentranos aqui</h1><br>
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
// include('app/controlers/reservas/verificar_horario.php');
?>

<!-- Button trigger modal -->

<!-- Modal  sesion-->
<div class="modal fade " id="modal_sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el dia <span id="dia_de_la_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <p>
        <h3 class="text-center"> Para reservar una cita deve iniciar secion o registrarce </h3>
        </p>
        <br>
        <center>
          <div class="d-grid gap-2">
            <a href="<?php echo $URL ?>/login" class="btn btn-primary" type="button">Iniciar sesion</a>
            <a href="<?php echo $URL ?>/login/registro.php" class="btn btn-primary" type="button">Registrarce</a>
          </div>
        </center>
      </div>

    </div>
  </div>
</div>



<!-- Modal  reservas-->
<div class="modal fade" id="modal_reservas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el dia <span id="dia_de_la_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="" id="respuesta_horario"></div>
          <div class="col-md-6">
            <center><b>Turno Mañana</b></center>
            <br>
            <div class="d-grid gap-2">
              <button class="btn btn-success" id="btn_h1" data-bs-dismiss="modal" type="button">08:00 - 09:00 </button>
              <button class="btn btn-success" id="btn_h2" data-bs-dismiss="modal" type="button">09:00 - 10:00 </button>
              <button class="btn btn-success" id="btn_h3" data-bs-dismiss="modal" type="button">10:00 - 11:00 </button>
              <button class="btn btn-success" id="btn_h4" data-bs-dismiss="modal" type="button">11:00 - 12:00 </button>

            </div>
          </div>
          <div class="col-md-6">

            <center><b>Turno Tarde </b></center>
            <br>
            <div class="d-grid gap-2">
              <button class="btn btn-success" id="btn_h5" data-bs-dismiss="modal" type="button">14:00 - 15:00 </button>
              <button class="btn btn-success" id="btn_h6" data-bs-dismiss="modal" type="button">15:00 - 16:00 </button>
              <button class="btn btn-success" id="btn_h7" data-bs-dismiss="modal" type="button">16:00 - 17:00 </button>
              <button class="btn btn-success" id="btn_h8" data-bs-dismiss="modal" type="button">17:00 - 18:00 </button>
            </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

      </div>
    </div>
  </div>
</div>



<script>
  $('#btn_h1').click(function() {
    $('#modal_formulario').modal('show');

  });
</script>

<div class="modal fade" id="modal_formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el dia <span id="dia_de_la_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <form action="<?php echo $URL; ?>/app/controlers/reservas/controller_reservas.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <label for="">Nombre del Usuario</label>
                <input type="text" class="form-control" value="<?php echo $nombre_completo_sesion ?>" disabled>
              </div>
              <div class="col-md-6">
                <label for="">Correo Electronico</label>
                <input type="text" class="form-control" value="<?php echo $email_sesion ?>" disabled>
                <input type="text" name="id_usuario" value="<?php echo $id_usuario_sesion; ?>" hidden>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label for="">Fecha de reserva</label>
                <input type="text" class="form-control" id="fecha_reserva" disabled>
                <input type="text" name="fecha_cita" class="form-control" id="fecha_reserva2" hidden>
              </div>
              <div class="col-md-6">
                <label for="">Hora de reserva</label>
                <input type="text" class="form-control" id="hora_reserva" disabled>
                <input type="text" name="hora_cita" class="form-control" id="hora_reserva2" hidden>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label for="">Nombre de la mascota</label>
                <input type="text" name="nombre_mascota" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="">Tipo de Servicio </label>
                <select name="tipo_servicio" id="" class="form-control">
                  <option value="Consulta General">Consulta General</option>
                  <option value="Vacunación Y Desparasitación">Vacunación Y Desparasitación</option>
                  <option value="Peluquería y Estética Canina">Peluquería y Estética Canina</option>
                  <option value="Esterilización y Castración">Esterilización y Castración</option>
                </select>
              </div>
            </div>


        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar Cita</button>
      </div>
      </form>
    </div>
  </div>
</div>



<script>
  /*
  $('#btn_h1, #btn_h2, #btn_h3, #btn_h4, #btn_h5, #btn_h6, #btn_h7, #btn_h8').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = $(this).text();
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);

  });
*/

  $('#btn_h1').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "08:00 - 09:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);

  });
  $('#btn_h2').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "09:00 - 10:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);

  });
  $('#btn_h3').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "10:00 - 11:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);
  });
  $('#btn_h4').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "11:00 - 12:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);
  });
  $('#btn_h5').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "14:00 - 15:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);
  });
  $('#btn_h6').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "15:00 - 16:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);
  });
  $('#btn_h7').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "16:00 - 17:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);
  });
  $('#btn_h8').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    $('#fecha_reserva2').val(a);
    var h1 = "17:00 - 18:00";
    $('#hora_reserva').val(h1);
    $('#hora_reserva2').val(h1);
  });
</script>