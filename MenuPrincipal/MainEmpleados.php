<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
<!-- Inicio del formulario-->

<?php
$where="";
$sql= "select * from empleados $where";
$resultado = $mysqli->query($sql);
?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php include('../Modales/NewEmpleadoModal.php')?>
<?php include('../Modales/EditEmpleadoModal.php')?>
<?php include('../Modales/DeleteEmpleadoModal.php')?>

<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!--<link rel="stylesheet" href="../Fondos/basico.css">-->
    

<!--Tabla-->
    <div id="layoutSidenav_content" class="shadow-lg p-2 mb-5 mt-1 bg-body rounded  w-100 mx-auto">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-1 mb-4 text-center">Registros</h1>
                        
                        <div class="form-group text-right"> <!--Boton para modal Empleado -->
                            <button type="button" id="NuevoEmpleado" data-bs-toggle="modal" data-bs-target="#addEmpleado" class="mb-2 btn btn-outline-primary btn-sm font-weight-bold  "> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>    
                                Nuevo Empleado
                            </button>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Empleados registrados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead><!-- Inicio de la tabla-->
                                        <tr>
                                            <th>idEmpleado</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Fecha de nacimiento</th>
                                            <th>Sexo</th>
                                            <th>Télefono</th>
                                            <th>Dirección</th>
                                            <th>Nivel Acceso</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row= $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row['idEmpleado']?></td>
                                                <td><?php echo $row['Nombre']?></td>
                                                <td><?php echo $row['Apellidos']?></td>
                                                <td><?php echo $row['FechaNacimiento']?></td>
                                                <td><?php echo $row['Sexo']?></td>
                                                <td><?php echo $row['Telefono']?></td>
                                                <td><?php echo $row['Direccion']?></td>
                                                <td><?php echo $row['NivelAcceso']?></td>
                                                <td> <!-- Btn Para editar -->
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editEmpleado" 
                                                         class="editbtn mb-2 btn btn-outline-success btn-sm font-weight-bold "> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square " viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                    </svg>    
                                                
                                                </button>
                                                </td>
                                                
                                                <td> <!-- Btn Para eliminar -->
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#eliminarUsuario" 
                                                         class="deletebtn mb-2 btn btn-outline-danger btn-sm font-weight-bold  "> 
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                        </svg>
                                                
                                                </button>
                                                </td>
                                            </tr>
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

                $('#editEmpleado').modal('show');
                
                $tr=$(this).closest('tr');
                var datos = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                $('#idEmp').val(datos[0]);
                $('#NombreEmpleadoM').val(datos[1]);
                $('#ApellidosEmpleadoM').val(datos[2]);
                $('#FechNaciM').val(datos[3]);
                $('#Sex').val(datos[4]);
                $('#TelM').val(datos[5]);
                $('#DirecM').val(datos[6]);
                $('#NivAccM').val(datos[7]);

            });
        });

        //Script para obtener el id, nombre, correo y Nivel de acceso para mostrar el mensaje de confirmacion y eliminarlo de la bd.
        $(document).ready( function(){
            $('.deletebtn').on('click',function(){

                $('#deleteEmpleado').modal('show');
                
                $tr=$(this).closest('tr');
                var datos = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(datos);

                $('#idEmpleadoMD').val(datos[0]);
            });
        });

    </script>
<!-- Fin del formulario-->
                        </div>
                </main>
    
            </div>
    <!--Contenido Fin-->
<?php require_once "../PartesMenu/ParteInferior.php" ?>