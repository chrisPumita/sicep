<?php $titulo = "Solicitudes recibidas" ?>
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
                        <h3>Solicitudes de inscripción <span class="badge bg-danger">4</span></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="#">Grupos Abiertos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Solicitudes de Inscripción</li>
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
                                    Aqui se muesrtan las solicitudes de inscripcion de los grupos abiertos actualmente, sirvase de
                                    revisar la documentación y aprobar/rechazar documentacion, asi como aprovar la inscripción
                                    que cumpla con los criterios establecidos y el pago correspondiente (segun sea el caso).
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Solocitudes recibidas
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>CURSO</th>
                                <th>GRUPO</th>
                                <th>NOMBRE</th>
                                <th>PROCEDENCIA</th>
                                <th>FECHA</th>
                                <th>DOCUMENTOS</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                            <tr id_grupo="3">
                                <th scope="row">1</th>
                                <td>Induccion al computo</td>
                                <td>1001</td>
                                <td>Christian Hernandez Pioquinto <i class="fas fa-check-circle text-success"></i></td>
                                <td>FES Cuautitlan</td>
                                <td>2021-06-30 00:00:00</td>
                                <td>
                                    <div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-sm font-weight-bold">3/5 Entregados</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuenow="25%" aria-valuemax="100" style="width: 60%;">60%</div>
                                        </div>
                                    </div>
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-ban"></i></a>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-folder-open"></i> Documentación</a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <th scope="row">1</th>
                                <td>Induccion al computo II</td>
                                <td>1001</td>
                                <td>Christian Hernandez Pioquinto <i class="fas fa-check-circle text-success"></i></td>
                                <td>FES Cuautitlan</td>
                                <td>2021-06-30 00:00:00</td>
                                <td>
                                    <div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-sm font-weight-bold">3/5 Entregados</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuenow="25%" aria-valuemax="100" style="width: 60%;">60%</div>
                                        </div>
                                    </div>
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-ban"></i></a>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-folder-open"></i> Documentación</a>
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
<?php include "includes/js.php"?>
<!-- INCLUDE SERIVES AJAX
    <script src="./service/lista-alumnos.js"></script>
-- INCLUDE SERIVES AJAX -->
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