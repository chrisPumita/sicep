<?php $titulo = "Cursos Registrados" ?>
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
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>CLAVE</th>
                                <th>NOMBRE</th>
                                <th>AUTOR</th>
                                <th>TIPO</th>
                                <th>TEMARIO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                            <tr id_curso="3">
                                <th scope="row">1</th>
                                <td>003</td>
                                <td>Aspel NOI Basico I <span class="badge bg-warning">Por Revisar</span></td>
                                <td>Paola Cortes Ponciano</td>
                                <td>Curso</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalPDF">
                                        <i class="fas fa-file-pdf"></i> Ver</a>
                                </td>

                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                                    <a href="./nueva-asignacion" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Grupo</a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-history"></i></a>
                                </td>
                            </tr>
                            <tr id_curso="3">
                                <th scope="row">1</th>
                                <td>003</td>
                                <td>Aspel NOI Basico I <span class="badge bg-warning">Por Revisar</span></td>
                                <td>Paola Cortes Ponciano</td>
                                <td>Curso</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalPDF">
                                        <i class="fas fa-file-pdf"></i> Ver</a>
                                </td>

                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                                    <a href="./nueva-asignacion" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Grupo</a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-history"></i></a>
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