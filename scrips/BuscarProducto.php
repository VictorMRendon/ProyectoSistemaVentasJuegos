<?php

require_once("conexion.php");

$buscador = mysqli_query("select * from productos where CodigoBarras like lower('%".$_POST['buscar']."%') or Titulo like lower('%".$_POST['buscar']."%')");
echo $buscador;
$numero = mysqli_num_rows($buscador);

?>

<h2> Encontrado: <?php echo $numero; ?> </h2>

<?php

while($resultado=mysqli_fetch_assoc($buscador)){
<p> <?php echo $resultado["CodigoBarras"]; ?> - <?php echo $resultado["Titulo"]; ?></p>
        
?>
<?php
}

?>