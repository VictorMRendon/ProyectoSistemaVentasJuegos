<?php
    require_once("conexion.php");
    if(isset($_POST['DeleteCambios']))
    {
        $idEmpleado = $_POST['idEmpleadoD'];    
    
        $sql = "DELETE FROM empleados WHERE idEmpleado = $idEmpleado";
        $resultado = $mysqli->query($sql);

        if($resultado)
        { header("Location: ../MenuPrincipal/MainEmpleados.php"); }
        else { echo "Error al eliminar."; }
    }

    
    
?>