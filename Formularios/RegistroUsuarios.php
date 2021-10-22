<?php
session_start();
require "../scrips/conexion.php";


//Validar que exista una sesion actva
if(!isset($_SESSION['idUsuario']))
{ header("Location: ../Formularios/index.php");}

//$nombreSesionActiva = $_SESSION['nombre'];
$idUsuario= $_SESSION['idUsuario'];
$NivelAccesoActivo = $_SESSION['NivelAcceso'];


if($NivelAccesoActivo==1 || $NivelAccesoActivo==2) {
    /* if($NivelAccesoActivo==3)
    { $where="where NivelAcceso=3 OR NivelAcceso=4"; }
    else if($NivelAccesoActivo==4)
        {$where="where idUsuario = $idUsuario";}
    else {$where="";} */
    $where="";
}
else if($NivelAccesoActivo==4)
{ $where="where idUsuario = $idUsuario"; }


$sql= "select * from usuarios $where";
$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" > 

</head>
<body>
<!--   -->
<link rel="stylesheet" href="../Fondos/basico.css">
    <div class="container text-center">
        <h1 class="text-center mt-5 display-3 font-weight-bold">Registro de nuevo usuario</h1>
       <div class="rows">
           <div class="col">

                <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-50 mx-auto" style="background-color: rgb(255, 255, 255);">
                    <form class=" needs-validation "  novalidate method="post" action=""> <!-- Formulario -->

                        <!-- No se muestra el imput, solo es para recibir y mandar el id del usuario-->
                        <input type="hidden" id="idUsuario" name="idUsuario" value="1">
                        
                        <div class="form-group w-75 mx-auto"> <!-- Nombre-->
                            <label for="Nombre" class="label font-weight-bold">Nombre de usuario:</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre(s) Apellidos" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su nombre de usuario.</div>
                        </div>

                        <div class="form-group w-75 mx-auto"> <!-- Email -->
                            <label for="Email" class="label font-weight-bold">Correo Electronico:</label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="usuario@tiendavideo.com" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su correo.</div>
                        </div>
                        
                        <div class="form-group w-50 mx-auto"> <!-- Pasword -->
                            <label for="contrasena" class="font-weight-bold">Contraseña:</label>
                            <input type="password" class="form-control" id="idCliente" name="idCliente" placeholder="Ej3mpl01234" required>
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

                        <div class="form-group text-center"> <!-- Btn -->
                            <button class="mt-3 btn btn-success btn-lg font-weight-bold" type="submit" id="Enviar" name="Enviar">Enviar</button>
                        </div>
                        <div id="layoutSidenav_content">
                            <main>
                                <div class="container-fluid px-4">
                                    <h1 class="mt-4">Tables</h1>
                                    <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Tables</li>
                                    </ol>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                            .
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-table me-1"></i>
                                            Usuarios Registrados
                                        </div>
                                        <div class="card-body">
                                            <table id="datatablesSimple">
                                                <thead><!-- Inicio de la tabla-->
                                                    <tr>
                                                        <th>idUsuario</th>
                                                        <th>Nombre</th>
                                                        <th>Email</th>
                                                        <th>Contrasena</th>
                                                        <th>Nivel Acceso</th>
                                                    </tr>
                                                </thead>
                                                <tfoot> <!-- Pie de la tabla-->
                                                    <tr>
                                                        <th>idUsuario</th>
                                                        <th>Nombre</th>
                                                        <th>Email</th>
                                                        <th>Contrasena</th>
                                                        <th>Nivel Acceso</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php while($row= $resultado->fetch_assoc()) { ?>
                                                        <tr>
                                                            <td><?php echo $row['idUsuario']?></td>
                                                            <td><?php echo $row['Nombre']?></td>
                                                            <td><?php echo $row['Email']?></td>
                                                            <td><?php echo $row['Contrasena']?></td>
                                                            <td><?php echo $row['NivelAcceso']?></td>
                                                        </tr>
                                                   <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <footer class="py-4 bg-light mt-auto">
                                <div class="container-fluid px-4">
                                    <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                                        <div>
                                            <a href="#">Privacy Policy</a>
                                            &middot;
                                            <a href="#">Terms &amp; Conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </div>

    <!-- 
    <div class="container">
    <h1>Registro de nuevo usuario</h1>
    <link rel="stylesheet" href="Fondos/basico.css">
        <div class="col-12 col-xl-6">
        <form method="post" action="guarda_contacto.php" autocomplete="off">

            <div class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" class="form-control" id="Nombre" name="Nombre">
            </div>

            <div class="form-group">
                <label for="Email">Correo Electronico</label>
                <input type="email" class="form-control" id="Email" name="Email">
            </div>

            

            <div class="form-group">
                <label for="idCliente">Contraseña</label>
                <input type="password" class="form-control" id="idCliente" name="idCliente">
            </div>

            <div class="form-group">
                <label for="Nivel de Acceso">Nivel de Acceso</label>
                <input type="number" class="form-control" id="Nivel de Acceso" name="Nivel de Acceso">
                </div>

            
            <br><button id="Enviar" name="Enviar" class="btn btn-primary">Enviar</button></br>
        
        
        <br><a href="RegistroCliente.html">Cuenta cliente</a></br>
        <br><a href="Compra.html">Compra</a></br>
    </form>
    </div>
    </div>-->
    
    <br><br>
    <a href="MainRegistros.html">Volver al menú</a>
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
</body>
</html>