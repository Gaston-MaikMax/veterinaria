<?php
include('../app/config.php');
include('../layout/parte1.php');
include('../app/controlers/productos/listado_de_productos.php')
?>


<div style="background-image: url('../public/images/fondologin1.jpg'); background-size: cover; background-position: center; min-height: 100vh;">
  <div class="container">
    <br><br><br>
    <center>
      <h1 style="color: black;">Registrece</h1>
    </center>
  </div>
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          Revisa bien tus datos
        </div>
        <div class="card-body">
          <form action="../app/controlers/login/controller_registro.php" method="POST">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Nombre del Usuario </label>
                  <input type="text" name="nombre_completo" class="form-control">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Correo Electronico</label>
                  <input type="email" class="form-control" name="email">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Contraceña</label>
                  <input type="password" class="form-control" name="password">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Repita la Contraceña</label>
                  <input type="password" class="form-control" name="password_repetido">
                </div>
              </div>
            </div>
            <hr>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="sub
            mit">Registrarme</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-4"></div>


  </div>
  <br><br><br>
</div>


<?php
include('../layout/parte2.php');
include('../admin/layout/mensaje.php');
?>