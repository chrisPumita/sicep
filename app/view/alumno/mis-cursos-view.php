<?php $titulo = "Mis cursos" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "includes/head.php"; ?>
    </head>
    <body>
        <div id="app">
            <div id="main" class="layout-horizontal">
                <?php include_once "includes/header.php"; ?>
                <div class="content-wrapper container">
                    <div class="page-heading">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Mis Cursos | Solicitudes </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mis Cursos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="page-content">
                        <!-- INICIO CURSOS SOLICITADOS -->
                        <section class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4><i class="fas fa-chalkboard-teacher"></i> ACREDITADOS <i class="fas fa-check-circle text-success small"></i></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-around flex-wrap py-3" id="containerCardsAsig">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN CURSOS SOLICITADOS -->
                        <section class="row">
                            <div class="col-12 col-lg-9">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4><i class="far fa-paper-plane"></i> ENVIADAS</h4>
                                            </div>
                                            <div class="card-body d-flex justify-content-around flex-wrap py-3" id="swiperCardsContainer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>CANCELADAS <i class="far fa-times-circle text text-danger"></i></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" id="containerSolEnviadas">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <?php include 'includes/footer.php'; ?>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
        <?php include 'includes/js.php'; ?>
        <?php include 'includes/serivices-js.php'; ?>

        <?php include 'modals/modal-horario.php'; ?>
        <?php include 'modals/modal-detalles-curso.php'; ?>
        <?php include 'modals/modal-pdf-temario.php'; ?>
        <?php include "modals/modal-tbl-descuentos.php" ?>

        <script src="./service/alumnos/mis-cursos.js"></script>
        <script src="./service/alumnos/details-general.js"></script>

    </body>
</html>