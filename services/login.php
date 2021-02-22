<?php
  session_start(); 

  if (isset($_SESSION['user_id'])) {
    header("Location: ../pages/home.php");
  }
 
  require "conexion.php"; 

  if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
      $select = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conexion, $select);
      $datos = mysqli_fetch_array($result);

      if ($datos > 0) {
        if (password_verify($password, $datos["password"])) {
          $_SESSION['user_id'] = $datos['id'];
          header("Location: ../pages/home.php");
        } else {
          $_SESSION['message'] = 'Contrasena incorrecta';
        }
      } else {
        $_SESSION['message'] = 'No existe un usuario con ese correo';
      }
    } else {
      $_SESSION['message'] = 'Rellene todos los campos';
    }
    header("Location: ../pages/login.php");
  }
?>
