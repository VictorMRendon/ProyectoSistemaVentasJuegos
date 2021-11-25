<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->

    <?php require "../GRAFICAS/conexionGraf.php";?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Gráficas</h1>     
                        </div>

                        <div class="col-lg-12" style="padding-top:20px;">
                            <div class="card">
                                    <div class="card-header ">
                                        GRAFICAS DE STOCK
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4 ml-5 ">
                                                <canvas id="graficobar" width="400" height="400"></canvas>
                                            </div>
                                            <div class="col-lg-4 mr-5 ml-5">
                                                <canvas id="graficodoughnut" width="400" height="400"></canvas>
                                            </div>
                                                
                                            <div class="col-lg-4 mt-5 mx-auto">
                                                <canvas id="graficopie" width="400" height="400"></canvas>
                                            </div>

                                        </div>
                                    </div>
                            </div>

                            <!-- <div class="card">
                                    <div class="card-header">
                                        GRAFICO CON CHARTJS CON PARAMETROS
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <label for="">Fecha inicio</label>
                                                <select name="" id="select_finicio" class="form-control"></select>
                                            </div>
                                            <div class="col-lg-5">
                                                <label for="">Fecha fin</label>
                                                <select name="" id="select_ffin" class="form-control"></select>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">&nbsp;</label><br>
                                                <button class="btn btn-danger" onclick="CargarDatosGraficoDoughnut()">BUSCAR</button>
                                            </div>
                                            <div class="col-lg-4">
                                                <canvas id="graficoDoughnut_parametro" width="400" height="400"></canvas>
                                            </div>
                                            <div class="col-lg-4">
                                                <canvas id="graficobarhorizontal_parametro" width="400" height="400"></canvas>
                                            </div>

                                            <div class="col-lg-4">
                                                <canvas id="graficopie_parametro" width="400" height="400"></canvas>
                                            </div>

                                        </div>
                                    </div>
                            </div> -->
                    </div>

                </main>
    
            </div>

 <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
    CargarDatosGraficoBar();
    CargarDatosGraficoBarHorizontal();
    CargarDatosGraficoPie();
    function CargarDatosGraficoBar(){
            $.ajax({
                url:'../GRAFICAS/controlado_grafico.php',
                type:'POST'
            }).done(function(resp){
                //if(resp.lenght>0){
                    var titulo = [];
                    var cantidad = [];
                    var colores = [];
                    var data = JSON.parse(resp);
                    for(var i=0;i<data.length;i++){
                        titulo.push(data[i][1]);
                        cantidad.push(data[i][4]);//2
                        colores.push(colorRGB());
                    }
                    CrearGrafico(titulo,cantidad,colores,'bar','GRAFICO EN BARRAS DE LOS PRODUCTOS','graficobar');

                //} 

            })
    }
    function CargarDatosGraficoBarHorizontal(){ // ahora dona
            $.ajax({
                url:'../GRAFICAS/controlado_grafico.php',
                type:'POST'
            }).done(function(resp){
                //if(resp.lenght>0){
                    var titulo = [];
                    var cantidad = [];
                    var colores = [];
                    var data = JSON.parse(resp);
                    for(var i=0;i<data.length;i++){
                        titulo.push(data[i][1]);
                        cantidad.push(data[i][7]);//2
                        colores.push(colorRGB());
                    }                                       //horizontalBar
                    CrearGrafico(titulo,cantidad,colores,'doughnut','GRAFICO COSTO DE LOS PRODUCTOS','graficodoughnut');

                //}


            })
    }
    function CargarDatosGraficoPie(){
            $.ajax({
                url:'../GRAFICAS/controlado_grafico.php',
                type:'POST'
            }).done(function(resp){
                //if(resp.lenght>0){
                    var titulo = [];
                    var cantidad = [];
                    var colores = [];
                    var data = JSON.parse(resp);
                    for(var i=0;i<data.length;i++){
                        titulo.push(data[i][1]);
                        cantidad.push(data[i][4]);//2
                        colores.push(colorRGB());
                    }
                    CrearGrafico(titulo,cantidad,colores,'pie','GRAFICO EN PIE DE LOS PRODUCTOS','graficopie');

                //} 

            })
    }

    function generarNumero(numero){
	    return (Math.random()*numero).toFixed(0);
    }

    function colorRGB(){
        var coolor = "("+generarNumero(255)+"," + generarNumero(255) + "," + generarNumero(255) +")";
        return "rgb" + coolor;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////PARAMETROS///////////////////////////////////////////////////////////////////////////////////////
    TraerAnio();
    
    function TraerAnio(){
        var mifecha = new Date();
        var anio = mifecha.getFullYear();
        var cadena="";
        for(var i=2015; i<anio+1;i++){
            cadena+="<option value="+i+">"+i+"</option>";
        }
        $("#select_finicio").html(cadena);
        $("#select_ffin").html(cadena);
    }

    function CargarDatosGraficoDoughnut(){
        var fechainicio = $("#select_finicio").val();
        var fechafin = $("#select_ffin").val();
            $.ajax({
                url:'../GRAFICAS/controlado_grafico_parametro.php',
                type:'POST',
                data:{
                    inicio:fechainicio,
                    fin:fechafin
                }
            }).done(function(resp){
                //if(resp.lenght>0){
                    var titulo = [];
                    var cantidad = [];
                    var colores = [];
                    var data = JSON.parse(resp);
                    for(var i=0;i<data.length;i++){
                        titulo.push(data[i][1]);
                        cantidad.push(data[i][4]);//2
                        colores.push(colorRGB());
                    }
                    CrearGrafico(titulo,cantidad,colores,'doughnut','GRAFICO EN DOUGHNUT DE LOS PRODUCTOS','graficoDoughnut_parametro');

                //} 

            })
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function CrearGrafico(titulo,cantidad,colores,tipo,encabezado,id){
        var ctx = document.getElementById(id);
                var myChart = new Chart(ctx, {
                    type: tipo,
                    data: {
                        labels: titulo,
                        datasets: [{
                            label: encabezado,
                            data: cantidad,
                            backgroundColor:colores ,
                            borderColor:colores ,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
    }

    </script>
    

    <!--Contenido Fin-->
<?php require_once "../PartesMenu/ParteInferior.php" ?>