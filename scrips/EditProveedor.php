<?php
    require_once("conexion.php");
    
    $idPro=$_POST['idProveedor'];
    $Nombre=$_POST['Nombre'];
    $Contac=$_POST['Contacto'];
    $Telefono=$_POST['Telefono'];
    $Direccion=$_POST['Direccion'];
    $sql2= "update proveedores set Nombre='$Nombre', Contacto='$Contac', Telefono='$Telefono', Direccion='$Direccion' where idProveedor='$idPro' ";
    echo $sql2;
    $resultado = $mysqli->query($sql2);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainProveedores.php"); }
    else { echo "Error al registrar."; }
?>