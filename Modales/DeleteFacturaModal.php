<!--Modal de  eliminar -->
<div id="deleteFactura" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitulo" >
        <div class="modal-dialog w-75 modal-center">
            <div class="modal-content">   
                <div class="modal-header alert-danger" >
                    <h2 class="mx-auto display-7 font-weight-bold modal-title" id="modalTitulo">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                          Eliminar factura
                    </h2>
                    <div> <!-- Btn cerrar pestana -->    
                    <button type="button" class="btn-close ml-auto btn-outline-danger" data-bs-dismiss="modal" aria-label="Cerrar"></button>

                    </div>

                </div>
                 <!-- -->
                <div class="modal-boddy">
                    
                    <p>
                    <form class=" needs-validation"  novalidate method="POST" action="../scrips/DeleteFactura.php"> <!-- Formulario -->

                         <!-- No se muestra el imput, solo es para recibir y mandar el id del factura-->
                        <input type="hidden" id="idFacM" name="idFactura" value="1">


                        <h4 class="text-center">¿Está seguro de eliminar el registro?</h4>

                        <div class="text-center">
                        <button class=" btn btn-outline-warning  font-weight-bold mt-2" type="submit" id="DeleteCambio" name="DeleteCambios" >Confirmar eliminación</button>
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
<!--Modal de  eliminar -->