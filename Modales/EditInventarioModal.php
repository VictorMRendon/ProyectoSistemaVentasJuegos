<!--Modal de registro -->
<div id="editInventario" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitulo" >
        <div class="modal-dialog w-75 modal-center">
            <div class="modal-content">   
                <div class="modal-header alert-info" >
                    <h3 class="mx-auto display-7 font-weight-bold modal-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>  
                        Surtir producto
                    </h3>
                    <div> <!-- Btn cerrar pestana -->    
                    <button type="button" class="btn-close ml-auto btn-outline-danger" data-bs-dismiss="modal" aria-label="Cerrar"></button>

                    </div>

                </div>
                 <!-- -->
                <div class="modal-boddy text-center">                    
                    <p>
                    <form class=" needs-validation "  novalidate method="POST" action="../scrips/EditInventario.php"> <!-- Formulario -->

                        <div class="form-group w-50 mx-auto"> <!-- Codigo-->
                            <input type="hidden" class="form-control" id="CodM" name="Codigo" >                          
                        </div>

                        <div class="w-50 mx-auto"> <!-- Proveedor -->                        
                            <label for="Plataforma" class="font-weight-bold">Proveedor:</label>
                            <select name="Prov" id="ProveedM" class="custom-select form-select-lg mb-4  text-center"  disabled>
                        
                                <?php

                                    $inc= include("../scrips/conet.php");
                                    if($inc){
                                        $sql= "select idProveedor, Nombre from proveedores order by Nombre asc";           
                                        $resultado2 = mysqli_query($conex,$sql);
                                        if($resultado2){
                                            while($row= $resultado2->fetch_array()) {
                                                $id = $row['idProveedor'];
                                                $Nombre=$row['Nombre'];
                                                ?>
                                            <option  value="<?php echo $id;?>" > <?php echo $Nombre;?> </option>
                                        <?php
                                            }
                                        }

                                    }
                                ?>
                        
                            </select>
                        </div>  

                        <div class="form-group w-75 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold"> Título: </label>
                            <input type="text" class="form-control text-center" id="TitM" name="Titulo" disabled>
                        </div>


                        <div class="form-group w-25 mx-auto"> <!-- Stock -->
                            <label for="Nombre" class="label font-weight-bold">Stock:</label>
                            <input type="number" class="form-control text-center" id="StkM" name="Stock" placeholder="20" min="1" max="99" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese una cantidad válida.</div>                        
                        </div>
                        

                        <div class="form-group w-25 mx-auto "> <!-- Precio -->
                            <label for="Nombre" class="label font-weight-bold">Precio:</label>
                            <input type="number" class="form-control text-center" id="PrecM" name="Precio" disabled>
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