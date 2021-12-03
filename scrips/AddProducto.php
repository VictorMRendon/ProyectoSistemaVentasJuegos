<?php
    require_once("conexion.php");

    $Codigo=$_POST['Codigo'];
    $Titulo=$_POST['Titulo'];
    $FechaPublic=$_POST['FechaPublic'];
    $Desarrolladora=$_POST['Desarrolladora'];
    $Stock=$_POST['Stock'];
    $Pres=$_POST['Pres'];
    $Plataforma=$_POST['Plataforma'];
    $Precio=$_POST['Precio'];
    $Prov=$_POST['Prov'];

    $sql = "insert into productos (CodigoBarras , Titulo, FechaPublicacion, Desarrolladora, Stock, Presentacion, Plataforma,Precio,idProveedor) values ('$Codigo','$Titulo','$FechaPublic','$Desarrolladora','$Stock','$Pres','$Plataforma','$Precio','$Prov')";
    $resultado = $mysqli->query($sql);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainProductos.php"); }
    else { echo "$sql Error al registrar."; }
    
?>