<?php
require "../scrips/SesionActiva.php"; 
if($NivelAccesoActivo==1 || $NivelAccesoActivo==2) { $where="";}
else if($NivelAccesoActivo==4)
{ $where="where idUsuario = $idUsuario"; }
$where="";
$sql= "select * from empleados $where";
$resultado = $mysqli->query($sql);
?>