<?php
    require_once("conexion.php");
    if(isset($_POST['DeleteCambios']))
    {
        $Codigo = $_POST['Cod'];    
    
        $sql = "DELETE FROM productos WHERE CodigoBarras = $Codigo";

        echo $sql;
        $resultado = $mysqli->query($sql);

        if($resultado)
        { header("Location: ../MenuPrincipal/MainProductos.php"); }
        else { echo "Error al eliminar."; }
    }

    
    
?>