<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include('../../app/controlers/usuarios/datos_del_usurio.php');

?>

<div class="container-fluid">
  <h1>Datos del Usuario </h1>
</div>
<div class="row">
  <div class="col-md-6">

    <div class="card card-outline card-danger">
      <div class="card-header">
        <h3 class="card-title"><b>Estas seguro de eliminarlo</b></h3>

      </div>

      <div class="card-body">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nombre Completo</label>
              <input value="<?php echo $nombre_completo; ?>" name="nombre_completo" type="text " class="form-control" disabled>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Correo</label>
              <input value="<?php echo $email; ?>" name="email" type="email " class="form-control " disabled>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Cargo</label>
              <input disabled type="text" class="form-control " value="<?php echo $cargo; ?> ">
            </div>
          </div>

        </div>

        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <form action="<?php echo $URL; ?>/app/controlers/usuarios/delete.php" method="post">
                <a href="index.php" class="btn btn-secondary">Cnaselar </a>
                <input hidden="text" value="<?php echo $id_usuario ?>" name="id_usuario">
                <button class="btn btn-danger"> <i class="fas fa-trash"></i> Borrar</button>
              </form>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
</div>

<?php
include('../../admin/layout/parte2.php');
include('../../admin/layout/mensaje.php');
?>