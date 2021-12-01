<?php
    require_once("conexion.php");
    
    $idEmple=$_POST['idEmpleado'];
    $Nom=$_POST['Nombre'];
    $Ape=$_POST['Apellidos'];
    $FechaNac=$_POST['FechaNaci'];
    $Sex=$_POST['Sexo'];
    $Tel=$_POST['Telefono'];
    $Dire=$_POST['Direccion'];
    $NivAc=$_POST['NivelAcc'];

    $sql2= "update empleados set Nombre='$Nom',Apellidos='$Ape', FechaNacimiento='$FechaNac', Sexo='$Sex', Telefono='$Tel', Direccion='$Dire', NivelAcceso='$NivAc' where idEmpleado='$idEmple' ";
    echo $sql2;
    $resultado = $mysqli->query($sql2);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainEmpleados.php"); }
    else { echo "Error al registrar."; }
?>