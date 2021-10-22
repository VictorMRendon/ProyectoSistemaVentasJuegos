<!--Parte superior inicio-->
<?php require "../scrips/SesionActiva.php"; ?>

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
            <a class="navbar-brand ps-3" href="principal.php">Sistema de ventas</a>
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
                                
                                
                                <!-- -->
                                <?php //Para mostrar secciones segun el nivel de acceso
                                        if($NivelAccesoActivo==1 || $NivelAccesoActivo==2){
                                ?>
                                <div class="sb-sidenav-menu-heading">Secciones</div>                                    
                                
                                <div> <!-- Seccion de paginas-->
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                        <!--Icono-->
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Registros
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>   
                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">                                            
                                            
                                                <!--Apaprtados inicio-->
                                                <a class="nav-link" href="../MenuPrincipal/MainUsuarios.php">Usuarios</a>
                                                <a class="nav-link" href="../MenuPrincipal/MainEmpleados.php">Empleados</a>
                                                <a class="nav-link" href="../MenuPrincipal/MainClientes.php">Clientes</a>
                                                <!--Apaprtados inicio-->
                                        </nav>
                                    </div>
                                </div>
                                <!-- Para cerrar la validacion-->
                                <?php } ?>
                                
                                <!-- Seccion 2-->
                                <div class="sb-sidenav-menu-heading">Mercancía</div>
                                <a class="nav-link" href="../MenuPrincipal/MainProductos.php">
                                    <div class="sb-nav-link-icon"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill me-2" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
</svg>
                                     Productos
                                </a>
                                <a class="nav-link" href="MainCompra.php">
                                    <div class="sb-nav-link-icon"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin me-2" viewBox="0 0 16 16">
  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
</svg>
                                    Cobro
                                </a>

                                <?php //Para mostrar secciones segun el nivel de acceso
                                        if($NivelAccesoActivo==1 || $NivelAccesoActivo==2){
                                ?>
                                <!-- Seccion 3-->
                                <div class="sb-sidenav-menu-heading">Estadísticas</div>
                                    <a class="nav-link" href="../MenuPrincipal/MainGraficas.php">
                                        <div class="sb-nav-link-icon"></div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up me-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
</svg>
                                        Gráficas
                                    </a>
                            </div>
                            <!-- Para cerrar la validacion-->
                            <?php } ?>
                        </div>
                        <div class="sb-sidenav-footer fixed-bottom">
                            <div class="small">Empledado activo actualmente:</div>
                            
                            <?php
                                $TipoEmpleado="";
                                switch($NivelAccesoActivo){
                                    case 1: $TipoEmpleado="Administrador"; break;
                                    case 2: $TipoEmpleado="Sub Administrador"; break;
                                    case 3: $TipoEmpleado="Gerente"; break;
                                    case 4: $TipoEmpleado="Cajero"; break;
                                }
                                echo $TipoEmpleado;
                            ?>
                        </div>
                    </nav>
            </div>
        <!--Parte superior fin-->  
        