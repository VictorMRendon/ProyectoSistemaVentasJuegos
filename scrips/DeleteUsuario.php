<?php
    require_once("conexion.php");
    if(isset($_POST['DeleteCambios']))
    {
        $idUsuario = $_POST['idUsuarioD'];    
    
        $sql = "DELETE FROM usuarios WHERE idUsuario = $idUsuario";
        $resultado = $mysqli->query($sql);

        if($resultado)
        { header("Location: ../MenuPrincipal/MainUsuarios.php"); }
        else { echo "Error al eliminar."; }
    }

    
    
?>