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

    //$sql = "insert into productos (CodigoBarras , Titulo, FechaPublicacion, Desarrolladora, Stock, Presentacion, Plataforma,Precio) values ('$Codigo','$Titulo','$FechaPublic','$Desarrolladora','$Stock','$Pres','$Plataforma','$Precio')";
    $sql="update productos set Titulo='$Titulo', FechaPublicacion='$FechaPublic',Desarrolladora='$Desarrolladora', Stock='$Stock',Presentacion='$Pres',Plataforma='$Plataforma', Precio='$Precio' where CodigoBarras = $Codigo";
    echo $sql;
    $resultado = $mysqli->query($sql);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainProductos.php"); }
    else { echo "Error al registrar."; }
    
?>