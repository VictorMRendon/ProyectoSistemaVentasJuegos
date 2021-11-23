<?php
require_once('../scrips/conexion.php');
?>

<!doctype html>
<html>
    <head>
        <title>Bar Chart</title>
        <script src="../jquery/jquery-3.3.1.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script> 
</head>
<body>
    <div style = "width: 50%">
         <canvas id="canvas" height="450" width="600"></canvas> 
   </div>
    
<script>
    var randomScalingFactor = function(){return Math.round(Math.random()*100)};
//NOSE SI DEJARLO ASI O SI MEF ALTA DESCARGAR EL CHAR ABAJO DE BARCHART
//intentandooooooooooooooooo
//qaaaaaaaaaaaaaaaaaa
//ACRUALIZA
    var barChartData = {
        labels : [
            <?php 
            $sql = "SELECT * FROM productos";//tenia $en mysqli
            $result =  mysqli_query($connection,$sql);
            while ($registros = mysqli_fetch_array($result))
            {//tenia $en mysqli
            ?>
                '<?php echo $registros["Titulo"] ?>',

            <?php
            }
            ?>
        ],
        datasets: [
            {
               fillColor : "rgba(220,220,220,0.5)",
               strokeColor : "rgba(220,220,220,0.8)",
               highlightFill: "rgba(220,220,220,0.75)",
               highlightStroke: "rgba(220,220,220,1)",
               data :
               <?php
               $sql = "SELECT * FROM productos";
               $result = mysqli_query($connection,$sql);
               ?>
                [<?php while ($registros = mysqli_fetch_array($result)){?><?php echo $registros["cantidad"]?>,  
                    <?php }?>]

            }
        ]
    }

    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
        });
    }

    </script>
    </body>
</html>