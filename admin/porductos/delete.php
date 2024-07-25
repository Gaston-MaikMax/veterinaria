<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');

$id_producto = $_GET['id_producto'];
include('../../app/controlers/productos/datos_del_producto.php')
?>



<div class="container-fluid">
  <h1>Eliminar Productoo</h1>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card card-outline card-danger">
      <div class="card-header">
        <h3 class="card-title"><b>Estas sewguro de eliminar Producto</b></h3>

      </div>

      <div class="card-body">

        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-2">
                <div class="form_group">
                  <label for="codigo">Codigo</label>
                  <input id="codigo" type="text" class="form-control" value="<?= $codigo ?>" disabled>

                </div>
              </div>
              <div class="col-md-4">
                <div class="form_group">
                  <label for="">Nombre del Producto</label>
                  <input value="<?= $nombre_producto; ?>" name="nombre_producto" type="text" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form_group">
                  <label for="">Descripcion</label>
                  <input name="descripcion" value="<?= $descripcion; ?>" type="text" class="form-control" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="form_group">
                  <label for="">Stock</label>
                  <input name="stock" value="<?= $stock; ?>" type="number" class="form-control" required disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form_group">
                  <label for="">Stock Minimo</label>
                  <input name="stock_minimo" value="<?= $stock_minimo; ?>" type="number" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form_group">
                  <label for="">Stock Maximo</label>
                  <input name="stock_maximo" value="<?= $stock_maximo; ?>" type="number" class="form-control" required disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form_group">
                  <label for="">Precio Compra</label>
                  <input name="precio_compra" value="<?= $precio_compra; ?>" type="number" class="form-control" required disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form_group">
                  <label for="">Precio Venta</label>
                  <input name="precio_venta" value="<?= $precio_venta; ?>" type="number" class="form-control" required disabled>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form_group">
                  <label for="">Fecha Ingreso</label>
                  <input name="fecha_de_ingreso" value="<?= $fecha_de_ingreso; ?>" type="text" class="form-control" required disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="form_group">
                  <label for="">Uusuario de Registro</label>
                  <input name="fecha_de_ingreso" value="<?= $nombre_completo; ?>" type="text" class="form-control" required disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form_group">
              <label for="">imagen</label>
              <br>
              <img src="<?= $URL . "/public/images/productos/" . $imagen; ?>" width="200px" alt="">
            </div>
          </div>

          <input type="text" name="id_usuario" value="<?= $id_usuario_sesion; ?> " hidden>
        </div>
        <hr>

        <div class="row">
          <div class="col-mid-4">
            <form action="../../app/controlers/productos/delete.php" method="POST">
              <input type="text" name="id_producto" value="<?= $id_producto; ?>" hidden>
              <a href="index.php" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-danger">Eliminar</button>


            </form>
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