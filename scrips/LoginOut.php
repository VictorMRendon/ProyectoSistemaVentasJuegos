<?php   //Para destruir la sesion

session_start();
session_destroy();
header("Location: ../Formularios/index.php");

?>