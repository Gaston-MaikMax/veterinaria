<?php
include('../app/config.php');
include('../admin/layout/parte1.php');
include('../app/controlers/usuarios/listados_usuarios.php');
include('../app/controlers/productos/listado_de_productos.php');



?>
<br>
<h2>Bienvenido al Sistema - <?= $cargo_sesion; ?> </h2>
<hr>
<div class="container-fluid ">
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <?php
          $contador_de_usuarios = 0;
          foreach ($usuarios as $usuario) {
            $contador_de_usuarios = $contador_de_usuarios + 1;
          }
          ?>
          <h3><?= $contador_de_usuarios ?></h3>

          <p>Usuarios Registrados </p>
        </div>
        <div class="icon">
          <i class="ion ">
            <i class="bi bi-file-earmark-person-fill"></i>
          </i>
        </div>
        <a href="<?= $URL . "/admin//usuarios/"; ?>" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <?php
          $contador_de_productos = 0;
          foreach ($productos as $producto) {
            $contador_de_productos = $contador_de_productos + 1;
          }
          ?>
          <h3><?= $contador_de_productos ?></h3>

          <p>Productos Registrados </p>
        </div>
        <div class="icon">
          <i class="ion ">
            <i class="bi bi-clipboard2-data-fill"></i>
          </i>
        </div>
        <a href="<?= $URL . "/admin//porductos/"; ?>" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</div>
<?php
include('../admin/layout/parte2.php');
?>