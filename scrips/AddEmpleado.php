<?php
    require_once("conexion.php");

    $Nombre=$_POST['Nombre'];
    $Apellidos=$_POST['Apellidos'];
    $FechaNaci=$_POST['FechaNaci'];
    $Sexo=$_POST['Sexo'];
    $Telefono=$_POST['Telefono'];
    $Direccion=$_POST['Direccion'];
    $NivAcc=$_POST['NivelAcc'];

    $sql = "insert into empleados (Nombre, Apellidos, FechaNacimiento, Sexo, Telefono, Direccion, NivelAcceso) values ('$Nombre','$Apellidos','$FechaNaci','$Sexo','$Telefono','$Direccion','$NivAcc')";
    $resultado = $mysqli->query($sql);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainEmpleados.php"); }
    else { echo "Error al registrar."; }
    
?>