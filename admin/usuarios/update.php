<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');


$id_usuario = $_GET['id_usuario'];
include('../../app/controlers/usuarios/datos_del_usurio.php');
?>

<div class="container-fluid">
  <h1>Actualizacion del Ususario <?php echo $nombre_completo; ?></h1>
</div>
<div class="row">
  <div class="col-md-6">

    <div class="card card-outline card-success">
      <div class="card-header">
        <h3 class="card-title"><b>Datos del Usuarios</b></h3>

      </div>

      <div class="card-body">

        <form action="../../app/controlers/usuarios/update.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Nombre Completo</label>
                <input value="<?php echo $nombre_completo; ?>" name="nombre_completo" type="text " class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Correo</label>
                <input value="<?php echo $email;  ?>" name="email" type="email " class="form-control " disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Contraceña</label>
                <input name="password" type="password " class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Confirmar Contraceña</label>
                <input name="password_verify" type="password " class="form-control ">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Cargo</label>
                <select name="cargo" class="form-control">
                  <?php
                  if ($cargo == 'Administrador') {   ?>
                    <option value="Administrador">Administrador</option>';
                    <option value="Usuario">Usuario</option>';
                  <?php } else { ?>
                    <option value="Usuario">Usuario</option>';
                    <option value="Administrador">Administrador</option>';

                  <?php } ?>



                </select>
              </div>
            </div>

          </div>
          <input hidden type="text" name="id_usuario" value="<?php $id_usuario; ?>">

          <div class="row">
            <div class="col-mid-4">
              <a href="" class="btn btn-secondary">Cancelar</a>
              <input type="submit" class="btn btn-success" value="Actualizar Usuario">
            </div>
          </div>

        </form>
      </div>

    </div>

  </div>
</div>

<?php
include('../../admin/layout/parte2.php');
include('../../admin/layout/mensaje.php');
?>