<?php
  session_start();

  require '../services/conexion.php'; 

  if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];

    $select = "SELECT * FROM users WHERE id = '$id'";

    $result = mysqli_query($conexion, $select);

    $datos = mysqli_fetch_array($result);

    $user = null; 
    if (count($datos) > 0) {
      $user = $datos;
    }
  } else {
    header("Location: /login-registro");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
  <h2>Home</h2>
  <h4>Bienvenido <?= $user['username']; ?> </h4>
  <p>Tu correo es: <?= $user['email']; ?></p>
  <p>El usuario fue creado el <?= $user['created_at']; ?></p>
  <a href="../services/logout.php">Cerrar Sesion</a>
</body>
</html>
