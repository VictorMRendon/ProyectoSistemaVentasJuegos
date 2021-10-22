<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
<!-- Inicio del formulario-->

<?php
//require "../scrips/SesionActiva.php"; 
// if($NivelAccesoActivo==1 || $NivelAccesoActivo==2) { $where="";}
// else if($NivelAccesoActivo==4)
// { $where="where idUsuario = $idUsuario"; }
$where="";
$sql= "select * from empleados $where";
$resultado = $mysqli->query($sql);
?>

<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!--<link rel="stylesheet" href="../Fondos/basico.css">-->
    <div class="container text-center">
        <h1 class="text-center mt-3 display-3 font-weight-bold">Alta de nuevo empleado</h1>
       <div class="rows">
           <div class="col">

                <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-50 mx-auto" style="background-color: rgb(255, 255, 255);">
                    <form class=" needs-validation "  novalidate method="POST" action=""> <!-- Formulario -->

                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                        <input type="hidden" id="idEmpleado" name="idEmpleado" value="1">
                        
                        <div class="form-group w-75 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold">Nombre(s):</label>
                            <input type="text" class="form-control" id="NombreCliente" name="Nombre" placeholder="Juan Pablo" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese un nombre válido.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Apellidos -->
                            <label for="Nombre" class="label font-weight-bold">Apellidos:</label>
                            <input type="text" class="form-control" id="ApellidosCliente" name="Apellidos" placeholder="Hernandez Garcia" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese apellidos válido.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Fecha Nacimiento -->
                            <label for="Fecha de Nacimiento" class="label font-weight-bold">Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" id="Fecha de Nacimiento" name="Fecha de Nacimiento">
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Fecha inválida.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Sexo -->
                            <label for="Sexo" class="label font-weight-bold">Sexo:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Masculino" id="SexoMas" value="M" checked>
                                <label class="form-check-label" for="flexRadioDefault1"> Masculino </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Femenino" id="SexoFem" value="F">
                                <label class="form-check-label" for="flexRadioDefault1"> Femenino </label>
                            </div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Telefono -->
                            <label for="Telefono" class="label font-weight-bold">Teléfono:</label>
                            <input type="tel" class="form-control" id="Telefono" name="Telefono" placeholder="8671224498" required maxlength="10">
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Número inválido.</div>
                        </div>

                        <div class="form-group h-75 mx-auto"><!-- Direccion -->
                            <label for="Direccion" class="label font-weight-bold">Dirección:</label>
                            <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="C. Palmera 5554, Col. El Nogal" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una dirección válida.</div>
                        </div>

                        <!-- -->
                        <div class="w-50 mx-auto"> <!-- Caja de opciones -->
                            <label for="Nivel de Acceso" class="font-weight-bold">Nivel de Acceso:</label>
                            <select name="NivelAcc" id="NivelAccesso" class="custom-select form-select-lg mb-2" required>
                                <option selected disabled>Escoja una opción...</option>
                                <option value="1">Administrador</option>
                                <option value="2">Sub Administrador</option>
                                <option value="3">Gerente</option>
                                <option value="4">Cajero</option>
                            </select>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Escoja una opción.</div>
                        </div>
                        
                        <div class="form-group text-center"> <!-- Btn -->
                            <button class="mt-3 btn btn-success btn-lg font-weight-bold" type="submit" id="Enviar" name="Enviar">Enviar</button>
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
                        <!--Cuadro de texto para comentarios
                        <div class="card mb-4"> 
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>-->

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
                                            <th>FechaNacimiento</th>
                                            <th>Sexo</th>
                                            <th>Telefono</th>
                                            <th>Direccion</th>
                                            <th>Nivel Acceso</th>
                                        </tr>
                                    </thead>
                                    <tfoot> <!-- Pie de la tabla-->
                                        <tr>
                                            <th>idEmpleado</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>FechaNacimiento</th>
                                            <th>Sexo</th>
                                            <th>Telefono</th>
                                            <th>Direccion</th>
                                            <th>Nivel Acceso</th>
                                        </tr>
                                    </tfoot>
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
<!-- Fin del formulario-->
                        </div>
                </main>
    
            </div>
    <!--Contenido Fin-->
<?php require_once "../PartesMenu/ParteInferior.php" ?>