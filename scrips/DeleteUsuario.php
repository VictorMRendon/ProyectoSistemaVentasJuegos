<?php
    require_once("conexion.php");

    $idUsuario = $_GET['id'];    
    
    $sql = "DELETE FROM usuarios WHERE idUsuario = $idUsuario";
    $resultado = $mysqli->query($sql);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainUsuarios.php"); }
    else { echo "Error al eliminar."; }
    
?>