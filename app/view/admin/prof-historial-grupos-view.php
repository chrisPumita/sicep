<?php $titulo = "Historial de Grupos" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/head.php"?>
        <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
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
                                <h3>Historial de Grupos</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="#">Historial de grupos</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- INICIO CALLOUT -->
                    <section class="row">
                        <div class="col-lg-12 col-lg-9">
                            <div class="callout callout-second">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            Aquí se puede consultar el histórico de grupos donde se ha dado de alta como profesor asignado.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- INICIO TALBLA HISTORIAL -->
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                Historico de Grupos creados
                            </div>
                            <div class="card-body">
                                <div class="row py-3">
                                    <div class="dataTable-top">
                                        <div class="dataTable-dropdown">
                                            <div class="row w-100">
                                                <div class="col-12 col-md-3 order-md-1">
                                                    <div class="form-group mx-3">
                                                        <label>Filtrar por curso</label>
                                                        <select id="listaCursos" class="dataTable-selector form-select curso-select"> </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-auto order-md-1">
                                                    <div class="form-group mx-3">
                                                        <label>Semestre</label>
                                                        <select id="listSemestres" class="dataTable-selector form-select semestre-select"></select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-auto order-md-1">
                                                    <div class="form-group mx-3">
                                                        <label>Generación</label>
                                                        <select id="listGeneraciones" class="dataTable-selector form-select generacion-select"></select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dataTable-search">
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-hover table-striped display nowrap" id="tblHistAsigCurso" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>CURSO</th>
                                        <th>PERIODO</th>
                                        <th>DETALLES</th>
                                        <th>TIPO</th>
                                        <th>ESTADO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <footer class="text-center text-white ">
                    <?php include "modals/generalModals.php"?>
                    <?php include "includes/footer.php" ?>
                </footer>
            </div>
        </div>
        <?php include "includes/js.php"?>
        <?php include "includes/services-js.php"?>
        <!-- Agregar solo cuando exista una tabla para mostrar-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
        <!--CARGAR SERVICIOS GENERALES-->
        <script src="./service/general/tipos.js"></script>
        <script src="./service/history-asig-gral.js"></script>
        <script src="./service/profesor/datatable-historial-my-asig.js"></script>
        <script src="./service/general/tools.js"></script>
    </body>
</html>