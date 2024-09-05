<?php
include('../../../app/config.php');

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repetido = $_POST['password_repetido'];



$cargo = "CLIENTE";

$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
  $contador = $contador + 1;
}
if ($contador > 0) {

  session_start();
  $_SESSION['mensaje'] = "El coreo electonico" . $email . " ya esta registrado";
  $_SESSION['icono'] = "error";
  header('Location: ' . $URL . '/login/registro.php');
} else {

  if ($password == $password_repetido) {

    $password = password_hash($password, PASSWORD_DEFAULT);

    // echo "son iguales";
    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios (nombre_completo, email, password, cargo, fyh_creacion) VALUES (:nombre_completo, :email, :password, :cargo , :fyh_creacion)");
    $sentencia->bindParam('nombre_completo', $nombre_completo);
    $sentencia->bindParam('email', $email);
    $sentencia->bindParam('password', $password);
    $sentencia->bindParam('cargo', $cargo);
    $sentencia->bindParam('fyh_creacion', $fechaHora);

    if ($sentencia->execute()) {
      session_start();
      $_SESSION['mensaje'] = "se registro el usuaria" . $nombre_completo . " corectamente";
      $_SESSION['icono'] = "success";


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
        header('location:' . $URL . '/');
      } else {
        echo "Usuario no encontrado";
        header('location:' . $URL . '/');
      }
    } else {
      session_start();
      $_SESSION['mensaje'] = "erro al registrar el usuario";
      $_SESSION['icono'] = "error";
      header('Location: ' . $URL . '/login/registro.php');
    }
  } else {
    // contyraceñas no son iguales
    session_start();
    $_SESSION['mensaje'] = "las contraseñas no son iguales";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/login/registro.php');
  }
}
