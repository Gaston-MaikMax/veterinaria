<?php
include('../app/config.php');
include('../layout/parte1.php');
include('../app/controlers/productos/listado_de_productos.php')
?>



<footer class="bg-gradient-info text-white pt-4">
  <div class="container">
    <div class="row flex-row align-items-center justify-content-center">
      <div class="   col-md-4">
        <center>
          <img src="../public/images/logo.png" width="200px" alt="Logo" class="img-fluid mb-2 mx-auto">
        </center>
        <h5 class="text-center ">Sobre Nosotros</h5>

        <p>Somos una empresa dedicada a proporcionar soluciones innovadoras para nuestros clientes.</p>
      </div>
      <div class="col-md-4">
        <h5 class="text-center">Navegación</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Inicio</a></li>
          <li><a href="#" class="text-white">Servicios</a></li>
          <li><a href="#" class="text-white">Contacto</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5 class="text-center">Contáctanos</h5>
        <ul class="list-unstyled">
          <li><i class="bi bi-envelope"></i> contacto@tudominio.com</li>
          <li><i class="bi bi-phone"></i> +123 456 7890</li>
          <li>
            <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="text-center py-3">
      &copy; 2024 Gaston Condori. Todos los derechos reservados.
    </div>
  </div>
</footer>


<?php
include('../layout/parte2.php');
?>