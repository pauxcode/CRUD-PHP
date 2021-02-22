<?php
  require "../services/register.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
  <?php require "../partials/header.php" ?>

  <main>
    <h2>Create una cuenta</h2>
    <span>o <a href="login.php">Logueate</a></span>

    <?php if (isset($_SESSION['message'])): ?>
      <h3><?= $_SESSION['message'] ?></h3>
    <?php endif; ?>

    <form method="POST" action="../services/register.php">
      <input type="text" name="username" placeholder="Ingresa un nombre de usuario" required>
      <input type="email" name="email" placeholder="Ingresa tu correo" required>
      <input type="password" name="password" placeholder="Ingresa tu contrasena" required>
      <input type="password" name="confirm_password" placeholder="Repite tu contrasena" required>
      <input type="submit" name="Submit" value="Registrese">
    </form> 
  </main> 
  </body>
</html>
