<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');

$id_producto = $_GET['id_producto'];
include('../../app/controlers/productos/datos_del_producto.php')
?>




<div class="container-fluid">
  <h1>Actualizacion del Producto</h1>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card card-outline card-success  ">
      <div class="card-header">
        <h3 class="card-title"><b>Datos del Producto</b></h3>

      </div>

      <div class="card-body">

        <form action="../../app/controlers/productos/update.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-2">
                  <div class="form_group">
                    <label for="codigo">Codigo<b>*</b></label>
                    <input id="codigo" type="text" class="form-control" value="<?= $codigo ?>" disabled>

                    <input id="codigo" name="codigo" type="text" class="form-control" value="<?= $codigo ?>" hidden>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form_group">
                    <label for="">Nombre del Producto <b>*</b></label>
                    <input name="nombre_producto" type="text" class="form-control" required value="<?= $nombre_producto ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form_group">
                    <label for="">Descripcion</label>
                    <input name="descripcion" type="text" class="form-control" value="<?= $descripcion ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <div class="form_group">
                    <label for="">Stock<b>*</b></label>
                    <input name="stock" type="number" class="form-control" required value="<?= $stock ?>">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form_group">
                    <label for="">Stock Minimo<b>*</b></label>
                    <input name="stock_minimo" type="number" class="form-control" required value="<?= $stock_minimo ?>">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form_group">
                    <label for="">Stock Maximo<b>*</b></label>
                    <input name="stock_maximo" type="number" class="form-control" required value="<?= $stock_maximo ?>">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form_group">
                    <label for="">Precio Compra<b>*</b></label>
                    <input name="precio_compra" type="number" class="form-control" required value="<?= $precio_compra ?>">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form_group">
                    <label for="">Precio Venta<b>*</b></label>
                    <input name="precio_venta" type="number" class="form-control" required value="<?= $precio_venta ?>">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form_group">
                    <label for="">Fecha Ingreso<b>*</b></label>
                    <input name="fecha_de_ingreso" type="date" class="form-control" required value="<?= $fecha_de_ingreso ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form_group">
                <label for="">Imagen</label>
                <input name="file" type="file" class="form-control" id="file">
                <br>
                <center>
                  <output id="list">
                    <img src="<?= $URL . "/public/images/productos/" . $imagen; ?>" alt="" width="150px">
                  </output>
                </center>
              </div>
            </div>

            <input type="text" name="id_usuario" value="<?= $id_usuario_sesion; ?> " hidden>
            <input type="text" value="<?= $id_producto ?>" name="id_producto" hidden>
            <input type="text" value="<?= $imagen ?>" name="imagen" hidden>

          </div>
          <hr>

          <div class="row">
            <div class="col-mid-4">
              <a href="index.php" class="btn btn-secondary">Cancelar</a>
              <input type="submit" class="btn btn-success" value="Actualizar  Producto">
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

<script>
  function archivo(evt) {
    var files = evt.target.files;

    for (var i = 0, f; f = files[i]; i++) {
      if (!f.type.match('image.*')) {
        continue;
      }
      var reader = new FileReader();

      reader.onload = (function(theFile) {
        return function(e) {
          document.getElementById('list').innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '" width="200px"  title="', escape(theFile.name), '"/>'].join('');
        };
      })(f);
      reader.readAsDataURL(f);
    }
  }
  document.getElementById('file').addEventListener('change', archivo, false);
</script>