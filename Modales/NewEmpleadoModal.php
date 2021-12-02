<!--Modal de registro -->
<div id="addEmpleado" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitulo" >
        <div class="modal-dialog w-75 modal-center">
            <div class="modal-content">   
                <div class="modal-header alert-info" >
                    <h2 class="mx-auto display-7 font-weight-bold modal-title" id="modalTitulo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                          Alta de nuevo empleado
                    </h2>
                    <div> <!-- Btn cerrar pestana -->    
                    <button type="button" class="btn-close ml-auto btn-outline-danger" data-bs-dismiss="modal" aria-label="Cerrar"></button>

                    </div>

                </div>
                 <!-- -->
                <div class="modal-boddy">
                    
                    <form class=" needs-validation "  novalidate method="POST" action="../scrips/AddEmpleado.php"> <!-- Formulario -->

                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                        <input type="hidden" id="idEmpleadoM" name="idEmpleado" value="1">

                        <div class="form-group w-75 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold">Nombre(s):</label>
                            <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="Juan Pablo" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese un nombre válido.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Apellidos -->
                            <label for="Nombre" class="label font-weight-bold">Apellidos:</label>
                            <input type="text" class="form-control" id="ApellidosClienteM" name="Apellidos" placeholder="Hernandez Garcia" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese apellidos válido.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Fecha Nacimiento -->
                            <label for="Fecha de Nacimiento" class="label font-weight-bold">Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" id="FechanNaciM" name="FechaNaci">
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Fecha inválida.</div>
                        </div>

                            <div class="w-50 mx-auto"> <!-- Caja de opciones -->
                                <label for="Nivel de Acceso" class="font-weight-bold">Género:</label>
                                <select name="Genero" id="GenM" class="custom-select form-select-lg mb-2" required>
                                    <option selected disabled>Escoja una opción...</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                                <div class="valid-feedback">Verificado</div>
                                <div class="invalid-feedback">Escoja una opción.</div>
                            </div> 

                        <div class="form-group w-25 mx-auto"> <!-- Telefono -->
                            <label for="Telefono" class="label font-weight-bold">Teléfono:</label>
                            <input type="tel" class="form-control" id="TelefonoM" name="Telefono" placeholder="8671224498" required maxlength="10">
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Número inválido.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"><!-- Direccion -->
                            <label for="Direccion" class="label font-weight-bold">Dirección:</label>
                            <input type="text" class="form-control" id="DireccionM" name="Direccion" placeholder="C. Palmera 5554, Col. El Nogal" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una dirección válida.</div>
                        </div>

                        <!-- -->
                        <div class="w-50 mx-auto"> <!-- Caja de opciones -->
                            <label for="Nivel de Acceso" class="font-weight-bold">Nivel de Acceso:</label>
                            <select name="NivelAcc" id="NivelAccessoM" class="custom-select form-select-lg mb-2" required>
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
                            <button class="btn btn-outline-primary  font-weight-bold mt-1" type="submit" id="Enviar" name="Enviar">Enviar</button>
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
<!--Modal de registro Fin-->