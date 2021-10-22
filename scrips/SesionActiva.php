<?php
    session_start();
    require "../scrips/conexion.php";
    
    //Validar que exista una sesion actva
    if(!isset($_SESSION['idUsuario']))
    { header("Location: ../Formularios/index.php");}
    $idUsuario= $_SESSION['idUsuario'];
    $nombreSesionActiva = $_SESSION['nombre'];
    $NivelAccesoActivo = $_SESSION['NivelAcceso'];
?>