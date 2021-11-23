<?php
    require_once("conexion.php");
    if(isset($_POST['GuardarCambios']))
    {
        $idEmpleado=$_POST['idEmpleado'];
        $Nombre=$_POST['Nombre'];
        $Apellidos=$_POST['Apellidos'];
        $FechaNaci=$_POST['FechaNaci'];
        $Sexo=$_POST['Sexo'];
        $Telefono=$_POST['Telefono'];
        $Direccion=$_POST['Direccion'];
        $NivAcc=$_POST['NivelAcc'];


        $sql="update empleados set Nombre='$Nombre', Apellidos='$Apellidos', FechaNacimiento = '$FechaNaci', Sexo='$Sexo', Telefono='$Telefono', Direccion='$Direccion', NivelAcceso='$NivAcc' where idEmpleado='$idEmpleado' ";
        $resultado = $mysqli->query($sql);

        if($resultado)
        { header("Location: ../MenuPrincipal/MainEmpleados.php"); }
        else { echo "Error al actualizar."; }
    }
    else {echo "Error al INSERTAR."; }
?>