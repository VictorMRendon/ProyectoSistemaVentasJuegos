<!--Modal de vista -->

<div id="viewDatos" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitulo" >
        <div class="modal-dialog w-75 modal-center">
            <div class=" modal-content">   
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
                <div class="p-3 modal-boddy">
                    
                    <form class=" needs-validation "  novalidate method="POST" action="../MenuPrincipal/principal.php"> <!-- Formulario -->

                            <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                            <input type="hidden" id="idEmpleadoM" name="idEmpleado" value="1">
                            <?php
                                    $inc= include("../scrips/conet.php");
                                    if($inc){
                                        $sql= "select * from empleados where Nombre = '$nombreSesionActiva'";           
                                        $resultado2 = mysqli_query($conex,$sql);
                                        if($resultado2){
                                            while($row= $resultado2->fetch_array()) {
                                                $id = $row['idEmpleado'];
                                                $Nombre=$row['Nombre'];
                                                $Apellidos=$row['Apellidos'];
                                                $Fecha=$row['FechaNacimiento'];
                                                $Sexo=$row['Sexo'];
                                                $Tel=$row['Telefono'];
                                                $Direc=$row['Direccion'];
                                                $NivAcc=$row['NivelAcceso']; 

                                                if($Sexo=='F'){$Genero="Femenino";}
                                                else{$Genero="Masculino";}

                                                switch($NivAcc){
                                                    case 1: $Puesto="Administrador"; break;
                                                    case 2: $Puesto="Sub Administrador"; break;
                                                    case 3: $Puesto="Gerente"; break;
                                                    case 4: $Puesto="Cajero"; break;
                                                }
                                                ?>
                                                <div>
                                                    <div class="form-group p-1 w-25 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Id:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $id ?>" disabled>                                                
                                                    </div>
                                                    <div class="form-group p-1 w-50 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Nombre:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $Nombre ?>" disabled>                                                
                                                    </div>
                                                    <div class="form-group p-1 w-50 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Apellidos:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $Apellidos ?>" disabled>                                                
                                                    </div>
                                                    <div class="form-group p-1 w-50 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Fecha de nacimiento:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $Fecha ?>" disabled>                                                
                                                    </div>
                                                    <div class="form-group p-1 w-50 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Genero:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $Genero ?>" disabled>                                                
                                                    </div>
                                                    <div class="form-group p-1 w-50 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Teléfono:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $Tel ?>" disabled>                                                
                                                    </div>
                                                    <div class="form-group p-1 w-50 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Dirección:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $Direc ?>" disabled>                                                
                                                    </div>

                                                    <div class="form-group p-1 w-50 mx-auto"> <!-- Nombre-->
                                                        <label for="Nombre" class="label font-weight-bold">Nivel de Acceso:</label>
                                                        <input type="text" class="form-control" id="NombreClienteM" name="Nombre" placeholder="<?php echo $Puesto ?>" disabled>                                                
                                                    </div>                                            
                                                </div>     
                                                <?php         
                                            }
                                        }

                                    }
                                        
                                        
                            ?>                   

                            <div class="form-group text-center p-3"> <!-- Btn -->
                                <button type="button" class="btn btn-outline-primary  font-weight-bold mt-1" data-bs-dismiss="modal" >Regresar</button>
                            </div>

                    </form>
                </div>

                <!-- <div class="modal-footer">                   
                    <button type="button" class="btn btn-outline-danger btn-sm " data-bs-dismiss="modal" >Cancelar</button>
                </div> -->
            </div>
        </div>

    </div>
<!--Modal de vista Fin-->