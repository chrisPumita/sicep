<?php $titulo = "Solicitudes recibidas" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <!--Only datatable use-->
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
                        <h3>Solicitudes de inscripción <span class="badge bg-danger" id="badgePendientes"></span></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-grupos">Grupos Abiertos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Solicitudes de Inscripción</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                       Solicitudes Pendientes
                    </div>
                    <div class="card-body">
                        <div class="row py-3">
                            <div class="col-12 col-lg-3 col-md-12 ">
                                <div class="col"><h4><i class="fas fa-filter"></i> Filtrar:</h4></div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="btn-group submitter-group float-right">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">CURSO: </div>
                                    </div>
                                    <select class="form-control curso-dropdown" id="listaCursos">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="btn-group submitter-group float-right">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">PROCEDENCIA: </div>
                                    </div>
                                    <select class="form-control procedencia-dropdown" id="list-procedencias">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--Table prototype to use | tablas con  paginador-->
                        <table class="table table-hover table-striped" id="tblSolicitudes" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>CURSO</th>
                                <th>PROCEDENCIA</th>
                                <th>CONTACTO</th>
                                <th>INSCRIPCION</th>
                                <th>DOCUMENTACION</th>
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
            <?php include "modals/modal-documentos-alumno.php"?>
            <?php include "modals/modal-vista-documento.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX
    <script src="./service/lista-alumnos.js"></script>
-- INCLUDE SERIVES AJAX -->
<!--Only datatable use library -->

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<!--CARGAR SERVICIOS GENERALES-->
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/datatable-lista-solicitudes.js"></script>
<script src="./service/documentacion-gral.js"></script>
</body>

</html>