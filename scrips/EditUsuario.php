<?php
    require_once("conexion.php");
    if(isset($_POST['SaveCambios']))
    {
        $idUsuario = $_POST['idUsuario'];
        $Nombre=$_POST['Nombre'];
        $Correo=$_POST['Email'];
        $Pasword=$_POST['Pasword'];
        
        $NivAcc=$_POST['NivelAcc'];

        $sqlContraBD = "select Contrasena from usuarios where idUsuario= $idUsuario";

        $obtenerContraBD = $mysqli->query($sqlContraBD);
        if($obtenerContraBD)
        {
            $resContraBD = $obtenerContraBD->fetch_assoc();//Obtener en arreglo la contra
            $ContraBD = $resContraBD['Contrasena']; //contra de la bd
            $ContraAEnviar=$ContraBD;

            if($Pasword != $ContraBD)
            {$PassConv= sha1($Pasword); $ContraAEnviar=$PassConv; }
    
            $sql = "update usuarios set Nombre='$Nombre', Email='$Correo', Contrasena='$ContraAEnviar', NivelAcceso='$NivAcc' where idUsuario='$idUsuario'";
              $resultado = $mysqli->query($sql);
                if($resultado) { header("Location: ../MenuPrincipal/MainUsuarios.php"); }
                else { echo "Error al actualizar."; }

        }
        else{
            echo "Error al obtener contra de la bd.";
        }      
    }  
?>