<?php
  session_start(); 

  if (isset($_SESSION['user_id'])) {
    header("Location: pages/home.php");
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My App</title>
  <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
  <?php require "partials/header.php" ?>
  <div class="wrapper">
    <h2>Bienvenido a "My App"</h2>
    <p>Aqui podras hacer crear una cuenta y loguearte despues con ella</p>
    <p>Empieza <a href="pages/register.php">creando una cuenta</a></p>
    <p>O si ya tiene una <a href="pages/login.php">ingrese a su cuenta</a></p>
  </div>
  </body>
</html>
