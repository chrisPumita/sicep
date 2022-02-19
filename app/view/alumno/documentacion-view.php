<?php $titulo = "Inicio - Alumno" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "includes/head.php"; ?>
        <!--css-->
    </head>
    <body>
        <div id="app">
            <div id="main" class="layout-horizontal">
                <?php include_once "includes/header.php"; ?>
                <div class="content-wrapper container">
                    <div class="page-heading">
                        <h3>Documentación Solicitada</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./mis-cursos">Solicitudes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Documentación</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Documentación de cursos</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="list-group" id="containerFichas"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <?php include 'includes/footer.php'; ?>
                <?php include 'modals/modal-view-document.php'; ?>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
        <?php include 'includes/js.php'; ?>
        <?php include 'includes/serivices-js.php';
        include 'modals/modal-upload-file.php';?>

        <!-- Files JS -->
        <script src="./service/alumnos/documentacion.js"></script>
        <script src="./service/alumnos/document-gral.js"></script>
    </body>
</html>