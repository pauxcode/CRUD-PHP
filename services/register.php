<?php
  session_start(); 

  require "conexion.php";  

  if (isset($_SESSION['user_id'])) {
    header("Location: ../pages/home.php");
  }

  if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $password_hash = "";

    if (!empty($username) && !empty($email) && !empty($password) && !empty($confirm_password)) {
			if ($password == $confirm_password) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $insert = "INSERT INTO users(id, username, email, password) VALUES (null, '$username', '$email', '$password_hash')";
	$query = mysqli_query($conexion, $insert);

        if (! $query) {
          die('Hubo un error al ingresar los datos');
        } else {
          $_SESSION['message'] = 'Usuario agregado satisfactoriamente';
        }
      } else {
        $_SESSION['message'] = 'Las contrasenas ingresadas no coinciden';
      }
    } else {
      $_SESSION['message'] = 'Rellene todos los campos';
    }
    header("Location: ../pages/register.php");
  }
?>
