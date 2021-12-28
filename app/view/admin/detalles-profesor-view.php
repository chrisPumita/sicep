<?php

    if (!isset($_POST['id'])){
        echo "<script>location.href ='javascript:history.back()';</script>";
    }
    else{
        $id = $_POST['id'];
        echo '<script> window.ID_PROF = '.$id.'; </script>';
    }
    $titulo = "Detalles del Profesor";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">

    <style>

        .carousel-control-next, .carousel-control-prev {
            width: auto!important;
        }
        .carousel-control-next-icon {
            background-image: url(../assets/images/next.png);
        }
        .carousel-control-prev-icon {
            background-image: url(../assets/images/previous.png);
        }
        @media (max-width: 767px) {
            .carousel-inner .carousel-item > div {
                display: none;
            }
            .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }
        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {
            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }
            .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }
        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }
    </style>
</head>

<body>
<div id="app">
    <?php include "includes/sidebar.php"?>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-content">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3 id="lblNameProfesor"></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-profesores">Profesores</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10">
                                    Verifique la información del profesor, ya que ésta se utilizará para generar las
                                    CONSTANCIAS y enlace con los alumnos inscritos en los grupos que se asignen. Las cuentas
                                    INACTRIVAS no dan acceso al sistema. Si este profesor perdio su contraseña, puede recuperarla
                                    desde el la opción Recuperar.
                                </div>
                                <div class="col-sm-2 align-items-center" id="contBtnActve"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img id="imgPerfil" src="../resources/default-avatar.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4 id="lblNameContainerTag"></h4>
                                        <p class="text-secondary mb-1" id="lblTagDepto"></p>
                                        <p class="text-muted font-size-sm" id="lblTagPuesto"></p>
                                        <!--
                                        <button class="btn btn-success"><i class="fab fa-whatsapp"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i></button>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">No. Trabajador</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary" id="idPerfilNoTrab"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Nombre Completo</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary" id="namePerfil"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary" id="correoPerfil"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Telefono</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary" id="telPerfil"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Departamento</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary" id="deptoPerfil"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">CUENTA</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary" id="perfilCountType"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>

                </div>
                <!-- ADMIN ACCOUNT ENABLE-->
                <div class="section" id="sectionAdmin"> </div>
                <!-- ADMIN ACCOUNT ENABLE-->
            </section>

            <section class="section">
                <!-- ADMIN ACCOUNT ENABLE-->
                <div class="section" id="sectionAdmin"> </div>
                <!-- ADMIN ACCOUNT ENABLE-->
            </section>
            <section>
                <div class="row gutters-sm">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                Cursos Propuestos por el Profesor
                            </div>
                            <div class="card-body" id="bodyPrpuestas">
                               <!-- JS Contructor Caroucel-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion de historico de cursos -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Historico de Grupos creados de <span id="nombreCursoHistorial"></span>
                    </div>
                    <div class="card-body table-responsive">
                        <!--Table prototype to use | tablas con  paginador-->
                        <table class="table table-hover table-striped" id="tblHistAsigCurso" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>CURSO</th>
                                <th>PERIODO</th>
                                <th>TIPO</th>
                                <th>ESTADO</th>
                                <th>DETALLES</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </section>
            <!-- fin seccion de historico de cursos -->

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<!-- INCLUDE DATATABLE -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>


<!--CARGAR SERVICIOS AJAX-->
<script src="./service/profesor-detalles.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/general/tipos.js"></script>



<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>