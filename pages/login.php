<?php
  require "../services/login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
  <?php require "../partials/header.php" ?>

  <main>
    <h2>Login</h2>
    <span>O <a href="register.php">Registrate</a></span>

    <?php if (isset($_SESSION['message'])): ?>
      <h3><?= $_SESSION['message'] ?></h3>
    <?php endif; ?>

    <form method="POST" action="../services/login.php">
      <input type="email" name="email" placeholder="Ingresa tu correo" required>
      <input type="password" name="password" placeholder="Ingresa tu contrasena" required>
      <input type="submit" name="Submit" value="Ingrese">
    </form> 
  </main>
  </body>
</html>
