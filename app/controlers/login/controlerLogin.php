<?php

include '../../config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;
foreach ($usuarios as $usuario) {
  $contador = $contador + 1;
  $password_tabla = $usuario['password'];
}

$hash = $password_tabla;

if (($contador > 0)  && (password_verify($password, $hash))) {
  echo "Bienvenido";
  session_start();
  $_SESSION['sesion_email'] = $email;
  header('location:' . $URL . '/admin');
} else {
  echo "Usuario no encontrado";
  header('location:' . $URL . '/login');
}
