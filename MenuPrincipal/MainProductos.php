<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
<!-- Inicio del formulario-->

<?php
$where="";
$sql= "select * from productos $where";
$resultado = $mysqli->query($sql);
?>
<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!--<link rel="stylesheet" href="../Fondos/basico.css">-->

<?php //Para mostrar secciones segun el nivel de acceso
 if($NivelAccesoActivo==1 || $NivelAccesoActivo==2 || $NivelAccesoActivo==3){
?>
<div class="container text-center">
        <h1 class="text-center mt-3 display-3 font-weight-bold">Registro de nuevo producto</h1>
       <div class="rows">
           <div class="col">

                <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-50 mx-auto" style="background-color: rgb(255, 255, 255);">
                    <form class=" needs-validation "  novalidate method="POST" action=""> <!-- Formulario -->

                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                        <input type="hidden" id="idEmpleado" name="idEmpleado" value="1">
                        
                        <div class="form-group w-75 mx-auto"> <!-- Codigo-->
                            <label for="Nombre" class="label font-weight-bold">Código de barras:</label>
                            <input type="text" class="form-control" id="CodigoBarras" name="Codigo" placeholder="0001" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese un código válido.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold"> Título: </label>
                            <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Star Wars" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese un título válido.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Fecha Publicacion -->
                            <label for="Fecha de Nacimiento" class="label font-weight-bold">Fecha de publicación:</label>
                            <input type="date" class="form-control" id="FechaPublic" name="FechaPublic">
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una fecha válida.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Desarrolladora -->
                            <label for="Nombre" class="label font-weight-bold">Desarrolladora:</label>
                            <input type="text" class="form-control" id="Desarrolladora" name="Desarrolladora" placeholder="Sony"  required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una desarrolladora válida.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Stock -->
                            <label for="Nombre" class="label font-weight-bold">Stock:</label>
                            <input type="number" class="form-control" id="Stock" name="Stock" placeholder="20" min="1" max="99" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una cantidad válida.</div>                        
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Presentacion -->
                            <label for="Sexo" class="label font-weight-bold">Presentación:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="FISICO" id="PresFisica" value="FISICO" checked>
                                <label class="form-check-label" for="flexRadioDefault1"> FISICO </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="DIGITAL" id="PresDigital" value="DIGITAL">
                                <label class="form-check-label" for="flexRadioDefault1"> DIGITAL </label>
                            </div>
                        </div>                    
                        <!-- -->
                        <div class="w-50 mx-auto"> <!-- Plataforma -->
                            <label for="Plataforma" class="font-weight-bold">Plataforma:</label>
                            <select name="Plataforma" id="Plataforma" class="custom-select form-select-lg mb-2" required>
                                <option selected disabled>Escoja una opción...</option>
                                <option value="Play Station 5">Play Station 5</option>
                                <option value="XBOX Serie X">XBOX Serie X</option>
                                <option value="Nintendo Swich">Nintendo Swich</option>
                                <option value="PC">PC</option>
                            </select>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Escoja una opción.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Precio -->
                            <label for="Nombre" class="label font-weight-bold">Precio:</label>
                            <input type="number" class="form-control" id="Precio" name="Precio" placeholder="200" min="1" max="99" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una cantidad válida.</div>
                        </div>

                        <div class="form-group text-center"> <!-- Btn -->
                            <button class="mt-3 btn btn-success btn-lg font-weight-bold" type="submit" id="Enviar" name="Enviar">Enviar</button>
                        </div>
                        
                    </form>
                </div>
             </div>
        </div>
    </div>
<!-- Para cerrar la validacion-->
<?php } ?>

    <!--Tabla-->
<div id="layoutSidenav_content" class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-100 mx-auto">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-1 mb-4 text-center">Registros</h1>                        

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Productos registrados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead><!-- Inicio de la tabla-->
                                        <tr>
                                            <th>Código de barras</th>
                                            <th>Título</th>
                                            <th>Fecha de publicación Desarrolladora</th>
                                            <th>Desarrolladora</th>
                                            <th>Stock</th>
                                            <th>Presentación</th>
                                            <th>Plataforma</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tfoot> <!-- Pie de la tabla-->
                                        <tr>
                                            <th>Código de barras</th>
                                            <th>Título</th>
                                            <th>Fecha de publicación Desarrolladora</th>
                                            <th>Desarrolladora</th>
                                            <th>Stock</th>
                                            <th>Presentación</th>
                                            <th>Plataforma</th>
                                            <th>Precio</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($row= $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row['CodigoBarras']?></td>
                                                <td><?php echo $row['Titulo']?></td>
                                                <td><?php echo $row['FechaPublicacion']?></td>
                                                <td><?php echo $row['Desarrolladora']?></td>
                                                <td><?php echo $row['Stock']?></td>
                                                <td><?php echo $row['Presentacion']?></td>
                                                <td><?php echo $row['Plataforma']?></td>
                                                <td><?php echo $row['Precio']?></td>
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