<?php 

require "../scrips/conexion.php";

session_start();

if($_POST)
{
    $correo = $_POST['Email'];
    $pasword = $_POST['Contra'];
    $sql =  "select idUsuario, Nombre, Email, Contrasena, NivelAcceso from usuarios where Email='$correo'";

    $resultado = $mysqli->query($sql);
    $num = $resultado->num_rows;
    //existe el usuario
    if($num>0)
    {
        $row = $resultado->fetch_assoc();
        $pasword_bd = $row['Contrasena']; //contra de la bd

        $paswordCifrado = sha1($pasword); // contra del formulario
        if($pasword_bd == $paswordCifrado)
        {
            //Variables para la sesion activa
            $_SESSION['idUsuario'] = $row['idUsuario'];
            $_SESSION['nombre'] = $row['Nombre'];
            $_SESSION['NivelAcceso'] = $row['NivelAcceso'];

            header("Location: ../MenuPrincipal/principal.php");

        }
        else { echo "La contrasena no coincide.";}
    }
    else { echo "No existe el usuario"; }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" > 
</head>
<body>
   <!--  -->
    <link rel="stylesheet" href="../Fondos/basico.css">
    <div class="container text-center">
        <h1 class="text-center mt-5 display-1 font-weight-bold">Inicio de sesión</h1>
       <div class="rows">
           <div class="col">

                <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded  w-50 mx-auto" style="background-color: rgb(255, 255, 255);">
                    <form class=" needs-validation "  novalidate method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> "> <!-- Formulario -->
                        <div class="form-group w-75 mx-auto"><!-- Email -->
                            <label for="Email" class="label font-weight-bold">Correo Electronico:</label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="usuario@tiendavideo.com" autofocus required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su correo</div>
                        </div>
                        
                        <div class="form-group w-50 mx-auto"><!-- Pasword -->
                            <label for="contrasena" class="font-weight-bold">Contraseña:</label>
                            <input type="password" class="form-control" id="Contra" name="Contra" placeholder="Ej3mpl01234" required>
                            <div class="valid-feedback">Verificado</div>
                            <div class="invalid-feedback">Ingrese su contraseña</div>
                        </div>

                        <div class="form-group text-center"> <!-- Btn -->
                            <button class="btn btn-success btn-lg font-weight-bold" type="submit" id="Enviar" name="Enviar">Enviar</button>
                        </div>
                        
                    </form>
                </div>
             </div>
        </div>
    </div>

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