<?php
    require_once("conexion.php");
    $salida = "";
    $sql="select * from empleados";
    if(isset($_POST['consulta'])){
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $sql="select idEmpleado, Nombre from empleados where idEmpleado like '%".$q."%'"
    }
    $resultado=$mysqli->query($sql);
    if($resultado->num_rows > 0 ){
        while($row= $resultado->fetch_array()) {
            $id = $row['idEmpleado'];
            $Nombre=$row['Nombre'];
        $salida.="<input type="text" class="form-control" placeholder=".$id.">";
    }
    else{
        $salida.="No hay datos.";
    }
    echo $salida;
?>