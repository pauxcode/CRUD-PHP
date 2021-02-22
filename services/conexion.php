<?php
  $servidor = 'localhost'; 
  $user = 'rootuser'; 
  $password = 'rootpassword'; 
  $db = 'my_app'; 

  $conexion = new mysqli($servidor, $user, $password, $db);
	
  if ($conexion->connect_errno) {
    echo "Fallo conexion a base de datos: (". $conexion->connect_errno .")" . $conexion->connect_errno;
  }
?>
