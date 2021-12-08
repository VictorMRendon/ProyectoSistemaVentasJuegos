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
    //$IVA=$_POST['IVA'];
    $Cambio=$_POST['Cambio'];

   // $sqlRevisarStock = "select * from productos where CodigoBarras = $Codigo and stock >= $Cantidad";
    //$sqlRevisarStock2=mysqli_query("select * from productos where CodigoBarras = ".$Codigo." and stock >= ".$Cantidad or die(mysqli_error));
  //  $resStock=$mysqli->query($sqlRevisarStock);
    // if($resStock){
    //     if($resStock->$mysqli_num_rows==0){
    //         echo "NO hay suficiente stoc";
    //     }
        
    // }
        $sqlCantidadBD = "select Stock from productos where CodigoBarras = $Codigo";
        $resCanticadBD= $mysqli->query($sqlCantidadBD);

        $stockActual=0;//Se obtiene el stock de la bd
        if ($row=mysqli_fetch_array($resCanticadBD)){
            $stockActual=$row[0];
        }
        //Si no excede el limite, efectua la compra

        if ($stockActual!=0){
            if($Cantidad<=$stockActual && $stockActual>-1){
                $stockActual-= $Cantidad;
    
                $sqlActualizar="update productos set stock = $stockActual where CodigoBarras = $Codigo";
    
                echo $sqlActualizar;
                $resActu=$mysqli->query($sqlActualizar);
    
                if($resActu){
                    echo "Se actualizo el stock correctamente.";
                    $sql = "insert into factura (idEmpleado, NombreEmpleado, Fecha, CodigoBarras,Cantidad,Titulo,Precio,ImporteTotal,Pago,IVA,Cambio) values ('$idEmpleado','$NomEmpleado','$Fecha','$Codigo', '$Cantidad', '$Titulo', '$Precio', '$Importe', '$Pago', '$IVA', '$Cambio')";
                    $resultado = $mysqli->query($sql);
        
                    if($resultado)
                    { header("Location: ../MenuPrincipal/MainCompra.php"); }
                    else { echo "Error al registrar."; }
                }
            }

        }
        else{
            echo "No hay inventario sufuciente.";
        }
        
        

    // public function actualizarStock($codBar, $cantiDescontar){
        
    // }
    
?>