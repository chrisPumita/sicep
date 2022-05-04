<?php $titulo = "Cuentas de Servicio Social" ?>
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
                        <h3>Cuentas de Servicio Social</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <!-- <li class="breadcrumb-item"><a href="./lista-profesores">Alumnos</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">Cuentas de Servicio Social</li>
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
                                    Aquí se muestran las cuentas de alumnos que tienen permisos de servicio social y cuentan con permisos especiales, así como el estado de su Servicio Social.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                        <!-- Button trigger for primary themes modal
                                        <button type="button" class="btn btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#primary">
                                            Nueva Cuenta
                                        </button>
                                        -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-user-check"></i> Alumnos registrados como Servicio Social
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tblServicio" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>NO CTA</th>
                                <th>CARRERA</th>
                                <th>CORREO</th>
                                <th>TELÉFONO</th>
                                <th>ALTA</th>
                                <th>TÉRMINO</th>
                                <th>ESTADO</th>
                            </tr>
                            </thead>

                            <tbody id="tblAlumnos">
                            <tr id_grupo="1">
                                <td>Vicente Fox Herrera</td>
                                <td>316348895</td>
                                <td>Informática</td>
                                <td>vicente2003@gmail.com</td>
                                <td>55 1420 3649</td>
                                <td>10/04/2020</td>
                                <td>10/11/2020</td>
                                <td><span class="badge bg-success">ACTIVO</span></td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="./detalles-alumno" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalConfirmaPw"><i class="fas fa-times-circle"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="2">
                                <td>Donald Trump Biden</td>
                                <td>316348895</td>
                                <td>Informática</td>
                                <td>patodonald@gmail.com</td>
                                <td>55 1420 3649</td>
                                <td>10/04/2020</td>
                                <td>10/11/2020</td>
                                <td><span class="badge bg-warning">FINALIZADO</span></td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="./detalles-alumno" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalConfirmaPw"><i class="fas fa-times-circle"></i></a>
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
            <?php include "modals/modal-confirma-admin.php"?>
            <?php include "modals/modal-nuevo-admin.php"?>
            <?php include "modals/modal-confirma-admin.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<!-- Agregar solo cuando exista una tabla para mostrar-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>