<?php

include('db.php');

if (isset($_POST['registro'])) {

  $username = $_POST['name'];
  $lastname = $_POST['lastname'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidos`, `telefono`, `correo`, `contrasena`) VALUES ('NULL', '$username', '$lastname', '$tel', '$email', '$password');";

  $result = mysqli_query($conn, $query);

  var_dump($result);
  if(!$result) {
    die("Query Failed.");
  }
  
}

?>

