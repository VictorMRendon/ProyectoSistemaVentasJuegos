<?php
    require_once("conexion.php");
    if(isset($_POST['DeleteCambios']))
    {
        $idFac = $_POST['idFactura'];    
    
        $sql = "DELETE FROM factura WHERE idFactura  = $idFac";

       // echo $sql;
        $resultado = $mysqli->query($sql);

        if($resultado)
        { header("Location: ../MenuPrincipal/MainCompra.php"); }
        else { echo "Error al eliminar."; }
    }

    
    
?>