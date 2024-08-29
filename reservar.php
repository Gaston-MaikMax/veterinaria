<?php
include('app/config.php');
include('layout/parte1.php');

?>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

<script>
  var a;

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      editable: true,
      selectable: true,
      allDaySlot: false,



      events: 'app/controlers/reservas/cargar_reservas.php',

      dateClick: function(info) {
        a = info.dateStr;
        const fechaComoCadena = a;
        var numeroDia = new Date(fechaComoCadena).getDay();
        var dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado , Domingo"];

        if (numeroDia == '6') {
          alert('No se puede reservar los domingos');
        } else if (numeroDia == '5') {
          alert('atencion solso en las mañanas');
          $('#modal_reservas').modal('show');
        } else {
          $('#modal_reservas').modal('show');
          $('#dia_de_la_semana').html(dias[numeroDia] + "  " + a);

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
?>

<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="modal_reservas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu cita para el dia <span id="dia_de_la_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="d-grid gap-2">
              <center><b>Turno Mañana</b></center>
              <br>
              <button class="btn btn-success" id="btn_h1" data-bs-dismiss="modal" type="button">08:00 - 09:00 </button>
              <button class="btn btn-success" id="btn_h2" data-bs-dismiss="modal" type="button">09:00 - 10:00 </button>
              <button class="btn btn-success" id="btn_h3" data-bs-dismiss="modal" type="button">10:00 - 11:00 </button>
              <button class="btn btn-success" id="btn_h4" data-bs-dismiss="modal" type="button">11:00 - 12:00 </button>

            </div>
          </div>
          <div class="col-md-6">
            <div class="d-grid gap-2">

              <center><b>Turno Tarde </b></center>
              <br>
              <button class="btn btn-success" id="btn_h5" data-bs-dismiss="modal" type="button">14:00 - 15:00 </button>
              <button class="btn btn-success" id="btn_h6" data-bs-dismiss="modal" type="button">15:00 - 16:00 </button>
              <button class="btn btn-success" id="btn_h7" data-bs-dismiss="modal" type="button">16:00 - 17:00 </button>
              <button class="btn btn-success" id="btn_h8" data-bs-dismiss="modal" type="button">17:00 - 18:00 </button>
            </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
        <form action="">
          <div class="row">
            <div class="col-md-6">
              <label for="">Nombre de la mascota</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Tipo de Servicio </label>
              <select name="" id="" class="form-control">
                <option value="SERVICIO 1">Consulta General</option>
                <option value="SERVICIO 2">Vacunación Y Desparasitación</option>
                <option value="SERVICIO 3">Peluquería y Estética Canina</option>
                <option value="SERVICIO 4">Servicio de Domicilio</option>
                <option value="SERVICIO 5">Esterilización y Castración</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">Fecha de reserva</label>
              <input type="text" class="form-control" id="fecha_reserva" disabled>
            </div>
            <div class="col-md-6">
              <label for="">Hora de reserva</label>
              <input type="text" class="form-control" id="hora_reserva" disabled>
            </div>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script>
  $('#btn_h1').click(function() {
    $('#modal_formulario').modal('show');
    $('#fecha_reserva').val(a);
    var h1 = "08:00 - 09:00";
    $('#hora_reserva').val(h1);
  });
</script>