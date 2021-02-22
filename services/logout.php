<?php
  session_start(); #Iniciamos la sesion

  session_unset(); #Limpiamos todas las variables de la sesion

  session_destroy(); #Rompe la sesion
  
  echo "Has cerrado sesion"; #Mostrara un mensaje
	#Lo redirigira despues de dos segundos y al URL que le hayamos dado
  header("Refresh: 2, URL = ../index.php");
?>
