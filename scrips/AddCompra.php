<?php
    require_once("conexion.php");

    $idEmpleado=$_POST['IdEmpleado'];    
    $NomEmpleado=$_POST['NombreEmpleado'];
    date_default_timezone_set('America/Mexico_City');
    $Fecha=date("Y-m-d H:i:s");
    $Codigo=$_POST['Codigo'];
    $Titulo=$_POST['TituloJuego'];
    $Precio=$_POST['Precio'];
    $Cantidad=$_POST['Cantidad'];
    $Importe=$_POST['Importe'];
    $Pago=$_POST['Pago'];
    $IVA=$_POST['IVA'];
    $Cambio=$_POST['Cambio'];


    $sql = "insert into factura (idEmpleado, NombreEmpleado, Fecha, CodigoBarras,Cantidad,Titulo,Precio,ImporteTotal,Pago,IVA,Cambio) values ('$idEmpleado','$NomEmpleado','$Fecha','$Codigo', '$Cantidad', '$Titulo', '$Precio', '$Importe', '$Pago', '$IVA', '$Cambio')";
    $resultado = $mysqli->query($sql);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainCompra.php"); }
    else { echo "Error al registrar."; }
    
?>