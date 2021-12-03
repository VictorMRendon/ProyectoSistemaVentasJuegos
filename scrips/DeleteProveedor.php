<?php
    require_once("conexion.php");
    if(isset($_POST['DeleteCambios']))
    {
        $idProv = $_POST['idProveedor'];    
    
        $sql = "DELETE FROM proveedores WHERE idProveedor = $idProv";
        $resultado = $mysqli->query($sql);

        if($resultado)
        { header("Location: ../MenuPrincipal/MainProveedores.php"); }
        else { echo "Error al eliminar."; }
    }   
?>