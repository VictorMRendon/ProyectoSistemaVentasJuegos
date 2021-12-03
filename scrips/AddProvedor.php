<?php
    require_once("conexion.php");

    $Nombre=$_POST['Nombre'];
    $Contac=$_POST['Contacto'];
    $Telefono=$_POST['Telefono'];
    $Direccion=$_POST['Direccion'];

    $sql = "insert into proveedores (Nombre, Contacto, Telefono, Direccion) values ('$Nombre','$Contac','$Telefono','$Direccion')";
    $resultado = $mysqli->query($sql);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainProveedores.php"); }
    else { echo "Error al registrar."; }
    
?>