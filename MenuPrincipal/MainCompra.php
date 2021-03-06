<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
                            <h1 class="text-center mt-3 display-4 font-weight-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
                            Compras</h1>
<!-- Inicio del formulario-->

<?php
$sql= "select * from factura";
$resultado = $mysqli->query($sql);

$codBar =" ";
$Tit=" ";
$Precio=" ";
?>

<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!--<link rel="stylesheet" href="../Fondos/basico.css">-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php include('../Modales/DeleteFacturaModal.php')?>

<!-- Aqui pegas el div para el cuadro-->

<div class="container text-center">
<div class="rows"> <!-- Para hacer el cuadro de fondo -->
        <div class="col">

         <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-50 mx-auto" style="background-color: rgb(255, 255, 255);">
             <form class=" needs-validation "  novalidate method="POST" action="../scrips/AddCompra.php"> <!-- Formulario -->

             <!-- No se muestra el imput, solo es para recibir y mandar el id del factura-->
             <input type="hidden" id="idFactura" name="idFactura" value="1">
                <div id="buscar">
                    
                </div>

                <?php //scrip para conseguir los datos del empleado actual
                    $inc= include("../scrips/conet.php");                  

                    if($inc){
                        $sqlEmpleado= "select * from empleados where Nombre = '$nombreSesionActiva'";           
                        $resultEmpleado = mysqli_query($conex,$sqlEmpleado);
                        if($resultEmpleado){
                            while($row= $resultEmpleado->fetch_array()) {
                                $idEm = $row['idEmpleado'];
                                $Nombre=$row['Nombre'];
                                $Apellidos=$row['Apellidos'];
                                $NomCompelto = $Nombre." ".$Apellidos;

                               // echo $NomCompelto;

                               ?>

                                <div class="form-group w-50 mx-auto "><!--Id de empleado -->
                                    <label for="IdEmpleado" class="label font-weight-bold">Id de Empleado:</label>
                                    <input type="text" class="form-control text-center" id="IdEmpleado" name="IdEmpleado" value="<?php echo $idEm; ?>" autofocus >
                                    <!-- Los warning
                                    <div class="valid-feedback">Verificado</div>
                                    <div class="invalid-feedback">Ingrese su ID de Empleado</div> -->
                                </div>

                                <div class="form-group w-75 mx-auto"><!-- Nombre de empleado -->
                                    <label for="NombreEmpleado" class="label font-weight-bold">Nombre de Empleado:</label>
                                    <input type="text" class="form-control text-center" id="NombreEmpleado" name="NombreEmpleado" value="<?php echo $NomCompelto; ?>" >
                                    <!-- Los warning
                                    <div class="valid-feedback">Verificado</div>
                                    <div class="invalid-feedback">Ingrese su Nombre</div> -->
                                </div>                               
                               <?php
                            }
                        }
                    }
                
                ?>
             

                 <div class="form-group w-50 mx-auto"> <!-- Fecha Compra -->
                     <label for="Fecha de Compra" class="label font-weight-bold">Fecha de Compra:</label>
                     <input type="datetime" class="form-control text-center" id="Fecha" name=""  disabled>
                     <div class="valid-feedback">Verificado</div>
                     <div class="invalid-feedback">Ingrese una fecha v??lida.</div>
                 </div>

                 <div class="w-50 mx-auto"> <!-- Buscador de producto -->                        
                            <label for="Plataforma" class="font-weight-bold">Buscar T??tulo:</label>
                            <select onchange="return buscar();" name="TituloS" id="TitS" class="custom-select form-select-lg mb-4" required>
                                <option selected disabled>Escoja una opci??n...</option>
                                <?php
                                    // require_once("conexion.php");
                                    // $sqlProv=mysqli_query($mysqli,"select idProveedor, Nombre from proveedores order by Nombre asc");
                                    // $resultado=mysqli_num_rows($sqlProv);

                                    $inc= include("../scrips/conet.php");
                                    if($inc){
                                       
                                        $sqlProducto= "select CodigoBarras, Titulo, Precio from productos order by Titulo asc";           
                                        $resultado2 = mysqli_query($conex,$sqlProducto);
                                        if($resultado2){
                                            while($row= $resultado2->fetch_array()) {
                                                $CodBarras = $row['CodigoBarras'];
                                                $Nombre=$row['Titulo'];
                                                ?>
                                            <option  value="<?php echo $CodBarras;?>" > <?php echo $Nombre;?> </option>
                                        <?php
                                            }
                                            if(isset($_GET['opcion'])){
                                                
                                                $opcion = $_GET['opcion'];
                                                $sqlProducto = "select * from productos where CodigoBarras = $opcion";
                                                $resultProducto= mysqli_query($conex,$sqlProducto);
                                                if($resultProducto){
                                                    while($row= $resultProducto->fetch_array()){
                                                        $codBar =$row['CodigoBarras'];
                                                        $Tit=$row['Titulo'];
                                                        $Precio=$row['Precio'];
                                                    }
                                                }                                                
                                            }
                                        }

                                    }
                                ?>
                        
                            </select>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Escoja una opci??n.</div>
                        </div>                               
                 

                     
                        <div class="form-group p-3 w-50 mx-auto"> <!-- Codigo-->
                           <label for="Nombre" class="label font-weight-bold">C??digo de barras:</label>
                            <input type="text" class="form-control text-center" id="CodigoBarras" name="Codigo" value="<?php echo $codBar; ?>" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese un c??digo v??lido.</div>
                        </div>

                        <div class="form-group w-50 mx-auto"> <!-- Nombre del producto vendido-->
                            <label for="Nombre" class="label font-weight-bold"> T??tulo: </label>
                            <input type="text" class="form-control text-center" id="Titulo" name="TituloJuego" value="<?php echo $Tit; ?>" placeholder="Star Wars" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese un t??tulo v??lido.</div>                                                                            
                        </div>

                        <div class="form-group w-50 mx-auto"> <!-- Precio -->
                            <label for="Nombre" class="label font-weight-bold">Precio:</label>
                            <input type="number" class="form-control text-center" id="Precio" name="Precio" value="<?php echo $Precio; ?>" placeholder="200.99" min="1" max="9999" step="00000.01" required oninput="calcularImporte()"> 
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una cantidad v??lida de Precio.</div>
                        </div>  

                        <div class="form-group w-25 mx-auto"> <!-- Cantidad -->
                            <label for="Cantidad" class="label font-weight-bold">Cantidad:</label>
                            <input type="number" class="form-control text-center" id="Cantidad" name="Cantidad" min="1" max="99" required oninput="calcularImporte()">
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una cantidad v??lida de cantidad.</div>
                        </div>

                                                            <div class="form-group w-50 mx-auto"> <!-- Importe Total SERIA QUE SE CALCULARA AUTOMATICAMENTE-->
                                                                <label for="Importe" class="label font-weight-bold ">Importe Total A Pagar:</label>
                                                                <input type="number" class="form-control text-center" id="Importe" name="Importe"  min="1" max="99999" step="0.01" required>
                                                                <div class="valid-feedback">Verificado</div>
                                                                <div class="invalid-feedback">Ingrese una cantidad v??lida de Importe.</div>
                                                            </div>

                                                            <div class="form-group w-50 mx-auto"> <!-- Pago -->
                                                                <label for="Pago" class="label font-weight-bold">Pago:</label>
                                                                <input type="number" class="form-control text-center" id="Pago" name="Pago"  min="1" max="99999" step="0.01"required oninput="calcularImporte()">
                                                                <div class="valid-feedback">Verificado</div>
                                                                <div class="invalid-feedback">Ingrese una cantidad v??lida de Pago.</div>
                                                            </div>

                                                            <!-- <div class="form-group w-25 mx-auto"> 
                                                                <label for="IVA" class="label font-weight-bold">IVA:</label>
                                                                <input type="number" class="form-control" id="IVA" name="IVA" placeholder="16%" step="0.01"  required>
                                                                <div class="valid-feedback">Verificado</div>
                                                                <div class="invalid-feedback">Ingrese una cantidad v??lida de IVA.</div>
                                                            </div> -->

                                                            

                                                            <div class="form-group w-50 mx-auto"> <!-- Cambio -->
                                                                <label for="Cambio" class="label font-weight-bold">Cambio:</label>
                                                                <input type="number" class="form-control text-center" id="Cambio" name="Cambio" min="0" max="99999" step="0.01" >
                                                            </div>
                                                            

                                                            <div class="form-group text-center"> <!-- Btn -->
                                                                <button class="mt-3 btn btn-outline-primary btn-lg font-weight-bold" type="submit" id="Enviar" name="Enviar">Enviar</button>
                                                            </div>                                     
                 
                 
             </form>
         </div>
      </div>
 </div>
</div>

<!--Tabla-->
<div id="layoutSidenav_content" class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-100 mx-auto">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-1 mb-4 text-center">Registros</h1>                        

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Facturas registradas
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead><!-- Inicio de la tabla-->
                                        <tr>
                                            <th>idFactua</th>
                                            <th>idEmpleado</th>
                                            <th>Nombre del empleado</th>
                                            <th>Fecha</th>
                                            <th>C??digo de barras</th>
                                            <th>T??tulo</th>                                            
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Importe total</th>
                                            <th>Pago</th>
                                            <!-- <th>IVA</th> -->
                                            <th>Cambio</th>

                                            <!-- <th>idCliente</th> -->
                                            <?php //Para mostrar secciones segun el nivel de acceso a
                                                if($NivelAccesoActivo==1 || $NivelAccesoActivo==2 || $NivelAccesoActivo==3){
                                            ?> 
                                            <th>Eliminar</th>
                                            <!-- Para cerrar la validacion-->
                                            <?php } ?>  
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php while($row= $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row['idFactura']?></td>
                                                <td><?php echo $row['idEmpleado']?></td>
                                                <td><?php echo $row['NombreEmpleado']?></td>
                                                <td><?php echo $row['Fecha']?></td>
                                                <td><?php echo $row['CodigoBarras']?></td>
                                                <td><?php echo $row['Titulo']?></td>
                                                <td><?php echo $row['Precio']?></td>
                                                <td><?php echo $row['Cantidad']?></td>
                                                <td><?php echo $row['ImporteTotal']?></td>
                                                <td><?php echo $row['Pago']?></td>
                                                <!-- <td><php echo $row['IVA']?></td> -->
                                                <td><?php echo $row['Cambio']?></td>

                                                <!-- <td><php echo $row['idCliente']?></td> -->
<!-- <th>idCliente</th> -->
<?php //Para mostrar secciones segun el nivel de acceso a
                                                if($NivelAccesoActivo==1 || $NivelAccesoActivo==2 || $NivelAccesoActivo==3){
                                            ?> 
                                                <td> <!-- Btn Para eliminar -->
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteFactura" 
                                                         class="deletebtn mb-2 btn btn-outline-danger btn-sm font-weight-bold "> 
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                        </svg>
                                                
                                                </button>
                                                </td>
                                                <!-- Para cerrar la validacion-->
                                            <?php } ?>  
                                            </tr>
                                       <?php }?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
    </div>
    
<!-- <script src="../js/jquery-3.5.1.slim.min.js" ></script> -->
    <script src="../js/bootstrap.bundle.min.js" ></script>
    <script> //scrip para validar campos
        // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()
    </script>

    <script> // scrip para calcular y asignar la fecha y hora actual

       
        
        (function(){
            var actualizarHora = function(){
                var dia = new Date(),
                    year =  dia.getFullYear(),
                    mes = dia.getMonth()+1,
                    diaCompleto = String(dia.getDate()).padStart(2,'0'),
                    fechaFull = year +'-'+ mes +'-'+ diaCompleto,
                    horas =  String(dia.getHours()).padStart(2,'0'), 
                    ampm,
                    minutos = String(dia.getMinutes()).padStart(2,'0'),
                    segundos = String(dia.getSeconds()).padStart(2,'0');

                    /*if(horas>=12) { ampm='p. m.';}
                    else { ampm='a. m.';}
                    var horaFull = horas +':'+ minutos+':'+segundos + ' '+ ampm;*/
                    var  horaFull = horas +':'+ minutos+':'+segundos,
                        //diaFull= fechaFull +' '+ horaFull;  
                        diaFull= year +'-'+ mes +'-'+ diaCompleto+' '+ horas +':'+ minutos+':'+segundos;          
                

                    //document.getElementById("FechaCompra").value = fechaFull;
                    //document.getElementById("HoraCompra").value = horaFull;
                    document.getElementById("Fecha").value = diaFull;
                
            };
            actualizarHora();
            var intervalo = setInterval(actualizarHora,1000);

        }())
        
    </script>

<script type="text/javascript">
        
        //Script para obtener el id, nombre, correo y Nivel de acceso para mostrar el mensaje de confirmacion y eliminarlo de la bd.
        function buscar(){
            var opcion = document.getElementById('TitS').value;
            window.location.href='http://localhost:82/ProyectoSistemaVentasJuegos/MenuPrincipal/MainCompra.php?opcion='+opcion;
            //alert(opcion);
        }

        

</script>

<script type="text/javascript">
        
        //Script para obtener el id, nombre, correo y Nivel de acceso para mostrar el mensaje de confirmacion y eliminarlo de la bd.
        
        function calcularImporte(){
            
                var intCantidad = parseFloat(document.getElementById("Cantidad").value),
                    dblPrecio = parseFloat(document.getElementById("Precio").value)
                    dblPago = parseFloat(document.getElementById("Pago").value),
                    dblImporte = intCantidad * dblPrecio,
                    dblCambio= dblPago - dblImporte ; 
                    if(dblCambio<0){dblCambio*=-1} 
                //     if(dblPago<dblImporte-1){alert('No se a intresado el pago requerido.');}
                //     else{
                //         document.getElementById("Importe").value = dblImporte;
                // document.getElementById("Cambio").value = dblCambio;
                //     }
                document.getElementById("Importe").value = dblImporte;
                 document.getElementById("Cambio").value = dblCambio;
        }

</script>


<script>
        //Script para obtener los valores que esten en el reglon seleccionado de la tabla y mandarlos a los input (Usando sus id)
        //y mostrar el modal de eliminar.
        

        //Script para obtener el id, nombre, correo y Nivel de acceso para mostrar el mensaje de confirmacion y eliminarlo de la bd.
        $(document).ready( function(){
            $('.deletebtn').on('click',function(){

                $('#deleteFactura').modal('show');
                
                $tr=$(this).closest('tr');
                var datos = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(datos);

                $('#idFacM').val(datos[0]);
            });
        });

</script>
<!-- Fin del formulario-->
                        </div>
                </main>
    
            </div>
    <!--Contenido Fin-->
<?php require_once "../PartesMenu/ParteInferior.php" ?>