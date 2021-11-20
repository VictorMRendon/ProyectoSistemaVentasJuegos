<?php require_once ("../PartesMenu/ParteSuperior.php"); ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">

<!-- Inicio del formulario-->
<?php
//Scrip para imprimir los registros en la tabla
//require "../scrips/SesionActiva.php"; 
    /* require_once("../scrips/operaciones.php");
    $opMostrar= new Operacion(); */

    if($NivelAccesoActivo==1 || $NivelAccesoActivo==2) { $where="";}
    else if($NivelAccesoActivo==4)
    { $where="where idUsuario = $idUsuario"; }
    //$resultado = $opMostrar->MostrarDatos("usuarios", $where);
    $sql= "select * from usuarios $where";
    $resultado = $mysqli->query($sql); 
?>

<link rel="stylesheet" href="../css/bootstrap.min.css" >

<!--<link rel="stylesheet" href="../Fondos/basico.css">--
    <div class="container text-center">
        <h1 class="text-center mt-3 display-4 font-weight-bold">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg>
        Alta de nuevo usuario</h1>
       <div class="rows">
           <div class="col">

                <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-50 mx-auto" style="background-color: rgb(255, 255, 255);">
                    <form class=" needs-validation "  novalidate method="POST" action="../scrips/AddUsuario.php"> <!-- Formulario --

                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario--
                        <input type="hidden" id="idUsuario" name="idUsuario" value="1" action="#">
                        
                        <div class="form-group w-75 mx-auto"> <!-- Nombre--
                            <label for="Nombre" class="label font-weight-bold">Nombre de usuario:</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre(s) Apellidos" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su nombre de usuario.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Email --
                            <label for="Email" class="label font-weight-bold">Correo Electronico:</label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="usuario@tiendavideo.com" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su correo.</div>
                        </div>
                        
                        <div class="form-group w-50 mx-auto"> <!-- Pasword --
                            <label for="contrasena" class="font-weight-bold">Contraseña:</label>
                            <input type="password" class="form-control" id="Pasword" name="Pasword" placeholder="Ej3mpl01234" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su contraseña</div>
                        </div>

                        <div class="w-50 mx-auto"> <!-- Caja de opciones --
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

                        <div class="form-group text-center"> <!-- Btn --
                            <button class="mt-3 btn btn-outline-primary btn-lg font-weight-bold" type="submit" id="Enviar" name="Enviar">Enviar</button>
                        </div>
                        
                    </form>
                </div>
             </div>
        </div>
    </div>
-->
    
<!--
    <div id="userModal" class="modal fade">
        <div class="modal-dialog">   
            <form method="POST" id=AddUsuario enctype="multipart/form-data" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add</h4>
                        <div class="modal-body">  
                            <label >Nombre</label> 
                            <input type="text" name="Nombre" id="Nombre">
                            <input type="sudmit" name="Add" id="Add" class="btn btn-primary" value="Add">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
-->
    <div id="userModal" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitulo" >
        <div class="modal-dialog w-75">
            <div class="modal-content">   
                <div class="modal-header alert-info" >
                    <h2 class="mx-auto display-7 font-weight-bold modal-title" id="modalTitulo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                          Alta de nuevo usuario
                    </h2>
                    <div> <!-- Btn cerrar pestana -->    
                    <button type="button" class="btn-close ml-auto btn-outline-danger" data-bs-dismiss="modal" aria-label="Cerrar"></button>

                    </div>

                </div>

                <div class="modal-boddy">
                    <p>
                    <form class=" needs-validation"  novalidate method="POST" action="../scrips/AddUsuario.php"> <!-- Formulario -->

                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                        <input type="hidden" id="idUsuario" name="idUsuario" value="1" action="#">

                        <div class="form-group w-50 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold">Nombre de usuario:</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre(s) Apellidos" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su nombre de usuario.</div>
                        </div>

                        <div class="form-group w-50 mx-auto"> <!-- Email -->
                            <label for="Email" class="label font-weight-bold">Correo Electronico:</label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="usuario@tiendavideo.com" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su correo.</div>
                        </div>

                        <div class="form-group w-25 mx-auto"> <!-- Pasword -->
                            <label for="contrasena" class="font-weight-bold">Contraseña:</label>
                            <input type="password" class="form-control" id="Pasword" name="Pasword" placeholder="Ej3mpl01234" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su contraseña</div>
                        </div>

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

                        <div class="text-center">
                        <button class=" btn btn-outline-primary  font-weight-bold mt-3" type="submit" id="Enviar" name="Enviar" >Enviar</button>

                        </div>

                        </form>
                    </p>

                </div>

                <div class="modal-footer">                   
                    <button type="button" class="btn btn-outline-danger btn-sm " data-bs-dismiss="modal" >Cancelar</button>
                </div>

            </div>

        </div>

    </div>
    <!--Tabla-->
    <div id="layoutSidenav_content" class="shadow-lg p-2 mb-5 mt-1 bg-body rounded  w-100 mx-auto">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-1 mb-2 text-center">Registros</h1>
                        <!--Cuadro de texto para comentarios
                        <div class="card mb-4"> 
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>-->

                        <div class="form-group text-right">
        <button type="button" id="NuevoUsuario" data-bs-toggle="modal" data-bs-target="#userModal" class="mb-2 btn btn-outline-primary btn-sm font-weight-bold  "> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>    
        Nuevo Usuario</button>
    </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Usuarios registrados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead><!-- Inicio de la tabla-->
                                        <tr>
                                            <th>idUsuario</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Contraseña</th>
                                            <th>Nivel de acceso</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php while($row= $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row['idUsuario'] ?></td>
                                                <td><?php echo $row['Nombre']?></td>
                                                <td><?php echo $row['Email']?></td>
                                                <td><?php echo $row['Contrasena']?></td>
                                                <td><?php echo $row['NivelAcceso']?></td>
                                                <td >
                                                <a href="../scrips/EditUsuario.php" class="btn btn-outline-success btn-sm">Editar</a>
                                                <a href="../scrips/DeleteUsuario.php? id=<?php echo $row['idUsuario'] ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                                                </td>
                                            </tr>
                                       <?php }?>
                                    </tbody>

                                    <tfoot> <!-- Pie de la tabla-->
                                        <tr>
                                            <th>idUsuario</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Contraseña</th>
                                            <th>Nivel de acceso</th>
                                        </tr>
                                    </tfoot>
                                    
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