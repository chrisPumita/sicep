<?php $titulo = "Cursos Registrados" ?>
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
                        <h3>Curso Registrados</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cursos</li>
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
                                    Aqui puede encontrar todos los cursos que han sido registrado en el sistema por
                                    otros profesores. Puede administrarlos seleccionandolos de la tabla a continuacion,
                                    tambien puede crear un nuevo curso para que posteriormente pueda ser asignado a un profesor.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <a href="./nuevo-curso" class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        <i class="fas fa-plus"></i> Agregar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Cursos Actuales
                    </div>
                    <div class="card-body">
                        <div class="row py-3">
                            <div class="col-12 col-lg-3 col-md-12 ">
                                <div class="col"><h4><i class="fas fa-filter"></i> Filtrar:</h4></div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="btn-group submitter-group float-right">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">AUTOR: </div>
                                    </div>
                                    <select class="form-control profesor-dropdown" id="listaAutores">
                                        <option value="">TODOS</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6">
                                    <div class="btn-group submitter-group float-right">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">ESTATUS: </div>
                                        </div>
                                        <select class="form-control status-dropdown">
                                            <option value="">TODOS</option>
                                            <option value="APROBADO">APROBADOS</option>
                                            <option value="PENDIENTE">PENDIENTE</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                        <!--Table prototype to use | tablas con  paginador-->
                        <table class="table table-hover table-striped" id="tblCursos" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>CLAVE</th>
                                    <th>NOMBRE</th>
                                    <th>AUTOR</th>
                                    <th>TIPO</th>
                                    <th>TEMARIO</th>
                                    <th>ESTATUS</th>
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
<!--Only datatable use library -->

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
<!--CARGAR SERVICIOS GENERALES-->
<script src="./service/general/tipos.js"></script>
<script src="./service/datatable-lista-cursos.js"></script>
<script src="./service/general/tools.js"></script>
</body>

</html>