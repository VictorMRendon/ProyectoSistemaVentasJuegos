        <!--Parte superior inicio-->
<?php
    session_start();

    //Validar que exista una sesion actva
    if(!isset($_SESSION['idUsuario']))
    { header("Location: ../Formularios/index.php");}

    $nombreSesionActiva = $_SESSION['nombre'];
    $NivelAccesoActivo = $_SESSION['NivelAcceso'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!--<meta name="description" content="" />
        <meta name="author" content="" />-->
        <title>Menú principal</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!--Barra de navegacion-->
            <a class="navbar-brand ps-3" href="index.html">Sistema de ventas</a>
            <!-- Icono para desplegar barra lateral-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Icono de usuario-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $nombreSesionActiva?>
                    <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuración</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../scrips/LoginOut.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

            <div id="layoutSidenav">
                <!-- Barra de navegacion-->
                <div id="layoutSidenav_nav">
                    <!-- tipo acordeon-->
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <!-- Titilo de las divisiones-->
                                <!--<div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a> -->
                                
                                
                                <div> <!-- -->
                                    <div class="sb-sidenav-menu-heading">Secciones</div>
                                    <!-- 
                                        Seccion para cambiar el color
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                        Layouts
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                        </nav>
                                    </div>
                                </div>-->
                                <?php //Para mostrar secciones segun el nivel de acceso
                                        if($NivelAccesoActivo==1 || $NivelAccesoActivo==2){
                                ?>
                                <div> <!-- Seccion de paginas-->
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                        <!--Icono-->
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Registros
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    
                                    

                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                Usuarios
                                                <a class="nav-link" href="../Formularios/RegistroUsuarios.html">Usuarios</a>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="login.html">Login</a>
                                                    <a class="nav-link" href="register.html">Register</a>
                                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                                </nav>
                                            </div>
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                                Error
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="401.html">401 Page</a>                                
                                                </nav>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Para cerrar la validacion-->
                                <?php } ?>

                                <!-- Seccion 2-->
                                <div class="sb-sidenav-menu-heading">Addons</div>
                                <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Charts
                                </a>
                                <a class="nav-link" href="tabla.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Tables
                                </a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            Start Bootstrap
                        </div>
                    </nav>
            </div>
        <!--Parte superior fin-->  
        