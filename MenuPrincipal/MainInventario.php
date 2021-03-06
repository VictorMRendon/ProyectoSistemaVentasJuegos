<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
<!-- Inicio del formulario-->

<?php
$where="";
$sql= "select * from  $where";
$sql2 = "select p.CodigoBarras, p.Titulo, p.FechaPublicacion, p.Desarrolladora, p.Stock, p.Presentacion, p.Plataforma, p.Precio, p.idProveedor, prov.Nombre, prov.idProveedor
         from productos p
         inner join proveedores prov
         on p.idProveedor = prov.idProveedor
         order by p.Titulo asc";
$resultado = $mysqli->query($sql2);
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php include('../Modales/EditInventarioModal.php')?>

<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!--<link rel="stylesheet" href="../Fondos/basico.css">-->

<?php //Para mostrar secciones segun el nivel de acceso a a
 if($NivelAccesoActivo==1 || $NivelAccesoActivo==2 || $NivelAccesoActivo==3){
?>
<div class="container text-center">
        
<!-- Para cerrar la validacion-->
<?php } ?>

        
    <!--Tabla-->
<div id="layoutSidenav_content" class="shadow-lg p-3 mb-5 mt-1 bg-body rounded  w-100 mx-auto">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-1 mb-4 text-center">Registros</h1>       
                        <?php //Para mostrar secciones segun el nivel de acceso a
                                        if($NivelAccesoActivo==1 || $NivelAccesoActivo==2 || $NivelAccesoActivo==3){
                                ?>
                                   
                        <!-- Para cerrar la validacion-->
                        <?php } ?>      

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Productos registrados
                            </div>

                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead><!-- Inicio de la tabla-->
                                        <tr>
                                            <th>C??digo de barras</th>
                                            <th>T??tulo</th>
                                            <th>Stock</th>
                                            <th>Precio</th>
                                            <th>Proveedor</th>
                                            <th>Clave del Proveedor</th>
                                            <?php //Para mostrar secciones segun el nivel de acceso a
                                                if($NivelAccesoActivo==1 || $NivelAccesoActivo==2 || $NivelAccesoActivo==3){
                                            ?>     
                                            <th>Surtir producto</th>
                                            <!-- Para cerrar la validacion-->
                                             <?php } ?>     

                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php while($row= $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row['CodigoBarras']?></td>
                                                <td><?php echo $row['Titulo']?></td>
                                                <td><?php echo $row['Stock']?></td>
                                                <td><?php echo $row['Precio']?></td>
                                                <td><?php echo $row['Nombre']?></td>
                                                <td><?php echo $row['idProveedor']?></td>
                                                <?php //Para mostrar secciones segun el nivel de acceso a
                                                if($NivelAccesoActivo==1 || $NivelAccesoActivo==2 || $NivelAccesoActivo==3){
                                            ?>  
                                                <td> <!-- Btn Para editar -->
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editInventario" 
                                                         class="editbtn mb-2 btn btn-outline-success btn-sm font-weight-bold "> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square " viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                    </svg>    
                                                
                                                </button>
                                                </td>
                                            </tr>
                                            <!-- Para cerrar la validacion-->
                                            <?php } ?> 
                                       <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
    </div>
    
<script src="../js/jquery-3.5.1.slim.min.js" ></script>
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
<script>
        //Script para obtener los valores que esten en el reglon seleccionado de la tabla y mandarlos a los input (Usando sus id)
        //y mostrar el modal de eliminar.
        $(document).ready( function(){
            $('.editbtn').on('click',function(){

                $('#editInventario').modal('show');
                
                $tr=$(this).closest('tr');
                var datos = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                $('#CodM').val(datos[0]);
                $('#TitM').val(datos[1]);
                $('#StkM').val(datos[2]);
                $('#PrecM').val(datos[3]);
                $('#ProveedM').val(datos[5]);

            });
        });

        //Script para obtener el id, nombre, correo y Nivel de acceso para mostrar el mensaje de confirmacion y eliminarlo de la bd.
        $(document).ready( function(){
            $('.deletebtn').on('click',function(){

                $('#deleteProducto').modal('show');
                
                $tr=$(this).closest('tr');
                var datos = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(datos);

                $('#CodidoM').val(datos[0]);
            });
        });

</script>
<!-- Fin del formulario-->
                            
                        </div>
                </main>
    
            </div>
    <!--Contenido Fin-->
<?php require_once "../PartesMenu/ParteInferior.php" ?>