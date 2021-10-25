<?php $titulo = "Grupos Activos" ?>
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
                        <h3>Grupos Activos Actualmente</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Grupos Activos</li>
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
                                <div class="col-sm-2">
                                    <a href="./lista-cursos class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        <i class="fas fa-plus"></i> Ver Cursos
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
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>GRUPO</th>
                                <th>CURSO</th>
                                <th>PROFESOR</th>
                                <th>CUPO</th>
                                <th>FECHAS</th>
                                <th>TIPO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Aspel NOI Basico I <span class="badge bg-warning">Por Revisar</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>
                                        <ol>
                                            <ul>INSCRIPCIONES: del 23 de enero de 2022 al 14 julio de 2022</ul>
                                            <ul>INICIO:  del 23 de enero de 2022 al 14 julio de 2022</ul>
                                            <ul>CALIFICACIONES: del 23 de enero de 2022 al 14 julio de 2022</ul>
                                        </ol>
                                    </td>
                                    <td>En linea y Precencial</td>
                                    <!-- BOTON ACCIONES -->
                                    <td>
                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                    </td>
                                </tr>
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Aspel NOI Basico I <span class="badge bg-warning">Por Revisar</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>
                                        <ol>
                                            <ul>INSCRIPCIONES: del 23 de enero de 2022 al 14 julio de 2022</ul>
                                            <ul>INICIO:  del 23 de enero de 2022 al 14 julio de 2022</ul>
                                            <ul>CALIFICACIONES: del 23 de enero de 2022 al 14 julio de 2022</ul>
                                        </ol>
                                    </td>
                                    <td>En linea y Precencial</td>
                                    <!-- BOTON ACCIONES -->
                                    <td>
                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                    </td>
                                </tr>
                            </tbody>
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
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/main.js"></script>

<!-- Agregar solo cuando exista una tabla para mostrar-->
<script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#tbl1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>