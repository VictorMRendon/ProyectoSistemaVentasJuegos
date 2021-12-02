<!--Modal de vista -->

    <?php
    
        $where="Nombre=$nombreSesionActiva";
        $sql= "select * from empleados where Nombre=$nombreSesionActiva";
        
        $resultado = $mysqli->query($sql);
        while($row= $resultado->fetch_assoc()) {
            $id= $row['idEmpleado'];
        }
    ?>
        
<div id="viewDatos" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitulo" >
        <div class="modal-dialog w-75 modal-center">
            <div class="modal-content">   
                <div class="modal-header alert-info" >
                    <h2 class="mx-auto display-7 font-weight-bold modal-title" id="modalTitulo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                          Información del empleado
                    </h2>
                    <div> <!-- Btn cerrar pestana -->    
                    <button type="button" class="btn-close ml-auto btn-outline-danger" data-bs-dismiss="modal" aria-label="Cerrar"></button>

                    </div>

                </div>
                 <!-- -->
                <div class="modal-boddy">
                    
                    <form class=" needs-validation "  novalidate method="POST" action="../scrips/AddEmpleado.php"> <!-- Formulario -->
                    <?php//  ?>
                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                        <input type="text" id="idEmpleado" name="idEmpleado" value="1">
                        <h3><?php echo $id?></h3>

                        <div class="form-group w-75 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold">Nombre(s):</label>
                            <input type="text" class="form-control" id="NomEmpleado" name="Nombre" placeholder="Juan Pablo" autofocus required>
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
                                <select name="Género" id="GéneroM" class="custom-select form-select-lg mb-2" required>
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
                        <?php //}?>
                        </form>
                    </p>
                </div>

                <div class="modal-footer">                   
                    <button type="button" class="btn btn-outline-danger btn-sm " data-bs-dismiss="modal" >Cancelar</button>
                </div>
            </div>
        </div>

    </div>
<!--Modal de vista Fin-->