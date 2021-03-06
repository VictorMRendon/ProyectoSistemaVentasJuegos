<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
<!-- Inicio del formulario-->

<?php
$where="";
$sql= "select * from clientes $where";
$resultado = $mysqli->query($sql);
?>

<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!--<link rel="stylesheet" href="../Fondos/basico.css">-->

<div class="container text-center">
        <h1 class="text-center mt-3 display-4 font-weight-bold">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        Registro de nuevo cliente</h1>
       <div class="rows">
           <div class="col">

                <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-50 mx-auto" style="background-color: rgb(255, 255, 255);">
                    <form class=" needs-validation "  novalidate method="post" action=""> <!-- Formulario -->

                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                        <input type="hidden" id="idUsuario" name="idUsuario" value="1">
                        
                        <div class="form-group w-75 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold">Nombre(s):</label>
                            <input type="text" class="form-control" id="NombreCliente" name="Nombre" placeholder="Juan Pablo" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su(s) nombre(s).</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Apellidos -->
                            <label for="Nombre" class="label font-weight-bold">Apellidos:</label>
                            <input type="text" class="form-control" id="ApellidosCliente" name="Apellidos" placeholder="Hernandez Garcia" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese sus apellidos.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Fecha Nacimiento -->
                            <label for="Fecha de Nacimiento" class="label font-weight-bold">Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" id="Fecha de Nacimiento" name="Fecha de Nacimiento">
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Sexo -->
                            <label for="Sexo" class="label font-weight-bold">Sexo:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Sexo" id="SexoMas" value="M" checked>
                                <label class="form-check-label" for="flexRadioDefault1"> Masculino </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Sexo" id="SexoFem" value="F">
                                <label class="form-check-label" for="flexRadioDefault1"> Femenino </label>
                            </div>
                        
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Telefono -->
                            <label for="Telefono" class="label font-weight-bold">Tel??fono:</label>
                            <input type="tel" class="form-control" id="Telefono" name="Telefono" placeholder="8671224498" required maxlength="10">
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese un Tel??fono v??lido.</div>
                        </div>

                        <div class="form-group h-75 mx-auto"><!-- Direccion -->
                            <label for="Direccion" class="label font-weight-bold">Direcci??n:</label>
                            <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="C. Palmera 5554, Col. El Nogal" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una direcci??n v??lida.</div>
                        </div>

                        <div class="w-50 mx-auto"> <!-- Caja de opciones -->
                            <label for="TipoCliente" class="font-weight-bold">Tipo de cliente:</label>
                            <input class="form-control" list="datalistOptions" id="TipoCliente" placeholder="Seleccione un tipo..." required>
                            <datalist id="datalistOptions">
                            <option value="Ocacional">
                            <option value="Frecuente">
                            <option value="Leal">
                            </datalist>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Escoja una opci??n.</div>
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

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Clientes registrados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead><!-- Inicio de la tabla-->
                                        <tr>
                                            <th>idCliente</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Fecha de nacimiento</th>
                                            <th>Sexo</th>
                                            <th>T??lefono</th>
                                            <th>Direcci??n</th>
                                            <th>Tipo de cliente</th>
                                        </tr>
                                    </thead>
                                    <tfoot> <!-- Pie de la tabla-->
                                        <tr>
                                            <th>idCliente</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Fecha de nacimiento</th>
                                            <th>Sexo</th>
                                            <th>T??lefono</th>
                                            <th>Direcci??n</th>
                                            <th>Tipo de cliente</th>
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
                                                <td><?php echo $row['TipoCliente']?></td>
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