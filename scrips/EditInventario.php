<?php
    require_once("conexion.php");


$Codigo=$_POST['Codigo'];
$Stock=$_POST['Stock'];

$sqlActualizar="update productos set stock = $Stock where CodigoBarras = $Codigo";
$resActu=$mysqli->query($sqlActualizar);
if($resActu)
    { header("Location: ../MenuPrincipal/MainInventario.php"); }
    else { echo "Error al actualizar inventario."; }
?>