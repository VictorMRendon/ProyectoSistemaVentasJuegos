<?php
    require 'modelo_grafico.php';

    $MG = new Modelo_Grafico();
    $consulta = $MG -> TraerDatosGraficoVendido();
    echo json_encode($consulta);
    
?>