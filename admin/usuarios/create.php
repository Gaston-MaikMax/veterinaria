<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');
?>

<div class="container-fluid">
  <h1>Creacion de Ususario</h1>
</div>
<div class="row">
  <div class="col-md-6">

    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title"><b>Datos del Usuarios</b></h3>

      </div>

      <div class="card-body">

        <form action="../../app/controlers/usuarios/create.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Nombre Completo</label>
                <input name="nombre_completo" type="text " class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Correo</label>
                <input name="email" type="email " class="form-control " required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Contraceña</label>
                <input name="password" type="password " class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Confirmar Contraceña</label>
                <input name="password_verify" type="password " class="form-control " required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Cargo</label>
                <select name="cargo" class="form-control">
                  <option value="Administrador">Administrador</option>
                  <option value="Usuario">Usuario</option>

                </select>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-mid-4">
              <a href="" class="btn btn-secondary">Cancelar</a>
              <input type="submit" class="btn btn-primary" value="Registar Usuario">
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