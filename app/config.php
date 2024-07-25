<?php


define('APP_NAME', 'Sistema de Veterinario ');

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistemaveterinario');

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

try {
  $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  //echo "conexion exitosa";
} catch (PDOException $e) {
  echo "conexion fallida";
}


$URL = "http://localhost/poryecto";



date_default_timezone_set('America/caracas');
$fechaHora =  date("Y-m-d H:i:s");
