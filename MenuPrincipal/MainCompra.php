<?php require_once "../PartesMenu/ParteSuperior.php" ?>
    <!--Contenido Inicio-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Compras</h1>
<!-- Inicio del formulario-->

<?php
$where="";
$sql= "select * from factura $where";
$resultado = $mysqli->query($sql);
?>
<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!--<link rel="stylesheet" href="../Fondos/basico.css">-->

<!-- Aqui pegas el div para el cuadro-->

<div class="col-12 col-xl-6">
    <form method="post" action="guarda_contacto.php" autocomplete="off">

        <div class="form-group">
          <label for="idFactura">idFactura</label>
          <input type="password" class="form-control" id="idFactura" name="idFactura">
        </div>

        <div class="form-group">
            <label for="idEmpleado">idEmpleado</label>
            <input type="password" class="form-control" id="idEmpleado" name="idEmpleado">
          </div>

        <div class="form-group">
            <label for="Empleado">Nombre de Empleado</label>
            <input type="text" class="form-control" id="Empleado" name="Empleado">
        </div>

        <div class="form-group">
            <label for="idCliente">idCliente</label>
            <input type="password" class="form-control" id="idCliente" name="idCliente">
          </div>

          <div class="form-group">
            <label for="Fecha">Fecha</label>
            <input type="datetime-local" class="form-control" id="Fecha" name="Fecha">
        </div>  

        <div class="form-group">
            <label for="Codigo de Barras">Codigo de Barras</label>
            <input type="number" class="form-control" id="Codigo de Barras" name="Codigo de Barras">
        </div>

        <div class="form-group">
            <label for="Titulo">Titulo</label>
            <input type="text" class="form-control" id="Titulo" name="Titulo">
        </div>

        <div class="form-group">
            <label for="Precio">Precio</label>
            <input type="number" class="form-control" id="Precio" name="Precio">
        </div>

        <div class="form-group">
            <label for="Importe Total">Importe Total</label>
            <input type="number" class="form-control" id="Importe Total" name="Importe Total">
        </div>

        <div class="form-group">
            <label for="Precio">Precio</label>
            <input type="number" class="form-control" id="Precio" name="Precio">
        </div>

        <div class="form-group">
            <label for="Pago">Pago</label>
            <input type="number" class="form-control" id="Pago" name="Pago">
        </div>

        <div class="form-group">
            <label for="IVA">IVA</label>
            <input type="number" class="form-control" id="IVA" name="IVA">
        </div>

        <div class="form-group">
            <label for="Cambio">Cambio</label>
            <input type="number" class="form-control" id="Cambio" name="Cambio">
        </div>

        <br><button id="Enviar" name="Enviar" class="btn btn-primary">Enviar</button>
    </form>
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
                                Facturas registradas
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead><!-- Inicio de la tabla-->
                                        <tr>
                                            <th>idFactua</th>
                                            <th>idEmpleado</th>
                                            <th>Nombre del empleado</th>
                                            <th>Fecha</th>
                                            <th>Código de barras</th>
                                            <th>Cantidad</th>
                                            <th>Título</th>                                            
                                            <th>Precio</th>
                                            <th>Importe total</th>
                                            <th>Pago</th>
                                            <th>IVA</th>
                                            <th>Cambio</th>
                                        </tr>
                                    </thead>
                                    <tfoot> <!-- Pie de la tabla-->
                                        <tr>
                                            <th>idFactua</th>
                                            <th>idEmpleado</th>
                                            <th>Nombre del empleado</th>
                                            <th>Fecha</th>
                                            <th>Código de barras</th>
                                            <th>Cantidad</th>
                                            <th>Título</th>                                            
                                            <th>Precio</th>
                                            <th>Importe total</th>
                                            <th>Pago</th>
                                            <th>IVA</th>
                                            <th>Cambio</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($row= $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row['idFactua']?></td>
                                                <td><?php echo $row['idEmpleado']?></td>
                                                <td><?php echo $row['NombreEmpleado']?></td>
                                                <td><?php echo $row['Fecha']?></td>
                                                <td><?php echo $row['CodigoBarras']?></td>
                                                <td><?php echo $row['CodigoBarras']?></td>
                                                <td><?php echo $row['Cantidad']?></td>
                                                <td><?php echo $row['Titulo']?></td>                                            
                                                <td><?php echo $row['Precio']?></td>
                                                <td><?php echo $row['ImporteTotal']?></td>
                                                <td><?php echo $row['Pago']?></td>                                            
                                                <td><?php echo $row['IVA']?></td>                                                <td><?php echo $row['CodigoBarras']?></td>
                                                <td><?php echo $row['Cambio']?></td>
                                            </tr>
                                            </tr>
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