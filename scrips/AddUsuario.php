<?php
    require_once("conexion.php");

    $Nombre=$_POST['Nombre'];
    $Correo=$_POST['Email'];
    $Pasword=$_POST['Pasword'];
    $PassConv= sha1($Pasword);
    $NivAcc=$_POST['NivelAcc'];

    $sql = "insert into usuarios (Nombre, Email, Contrasena, NivelAcceso) values ('$Nombre','$Correo','$PassConv','$NivAcc')";
    $resultado = $mysqli->query($sql);

    if($resultado)
    { header("Location: ../MenuPrincipal/MainUsuarios.php"); }
    else { echo "Error al registrar."; }
    
?>

<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" >

    <title>Confirmacion</title>
</head>
<body>
    <div class="container">
        <div class="row">
            ?php if($resultado) { ?>
            <h3>Registro guardado</h3>
            ?php } else { ?>
            <h3> Error al guardar</h3>
            ?php } ?>
        </div>
    </div> 
    <a href="../MenuPrincipal/MainUsuarios.php" class="btn btn-primary">Regresar</a>   
    
</body>
</html-->