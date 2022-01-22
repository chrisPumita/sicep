<?php $titulo = "Inscripción" ?>
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
                    <h3>Inscripción a curso</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="./mis-cursos">Cursos Abiertos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inscripción</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-content">

                    <!-- seccion detalles y banner img -->
                    <section class="section">
                        <div class="row gutters-sm">
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-body ">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <img src="../assets/images/start-sesion.png" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h4 class="font-bold">Predro Rene Hernandez Suarez</h4>
                                                <h6 class="text-muted mb-0">PROFESOR</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body py-2">
                                            <div class="row py-1 m-2">
                                                <h5>Resumen del curso</h5>
                                                <div class="row py-2">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Curso:</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary">Diccionarios de datos GRUPO: 666</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Grupo:</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary">2854 </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Semestre</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary">2021-2</div>
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Generación</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary">2020</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Dirigido a:</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary">Comunidad FESC </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Modalidad</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary">Mixto</div>
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Sesiones</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary">20</div>
                                                </div>
                                                <hr>
                                                <!-- <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Procedencia:</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary">Comunidad FESC </div>
                                                </div> -->
                                                <!-- <div class="row">
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">Estatus de la Inscripción</h6>
                                                    </div>
                                                    <div class="col-sm-4 text-primary"><i class="fas fa-check-circle text-success"></i> APROBADA</div>
                                                    <div class="col-sm-4 text-primary"><i class="fas fa-hand-holding-usd text-success"></i> PAGADO</div>
                                                </div>
                                                <hr> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <!-- costo -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Costo del curso</h4>
                                        <h2 class="mb-0 text-primary">$1,600.00</h2>
                                        <h7 class="text-primary text-muted">Con 70% de descuento por ser Comunidad FESC</h7>
                                    </div>
                                </div>
                                <!-- fechas -->
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body py-4">
                                            <h4 class="card-title">Fechas importantes</h4>
                                            <div class="row py-2">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Inscripciones</h6>
                                                </div>
                                                <div class="col-sm-8 text-primary text-bold">Del 20 de Junio, 2020 al 12 de Enero, 2021</div>
                                            </div>
                                            <hr class="m-2">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Entrega de documentos</h6>
                                                </div>
                                                <div class="col-sm-8 text-primary text-bold">Del 20 de Junio, 2020 al 12 de Enero, 2021</div>
                                            </div>
                                            <hr class="m-2">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Clases</h6>
                                                </div>
                                                <div class="col-sm-8 text-primary text-bold">Del 20 de Junio, 2020 al 12 de Enero, 2021</div>
                                            </div>
                                            <hr class="m-2">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Calificaciones</h6>
                                                </div>
                                            </div>
                                            <hr class="m-2">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- fin de seccion de detalles -->
                    <section class="section">
                        <div class="card">
                            <div class="card-body py-4 px-5 d-flex">
                                <div class="row">
                                    <div class="col-sm-10 d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="../assets/images/ok.svg" alt="Face 1">
                                        </div>
                                        <div class="ms-3 name">
                                            <!-- <h4 class="font-bold">Inscribirse</h4> -->
                                            <h6 class="text-muted mb-0">Una vez termines tu inscripción un administrador procederá a su validación por lo que asegurate de llenar y subir correctamente todos los documentos requeridos.</h6>
                                        </div>
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Default checkbox
                                            </label>
                                        </div> -->
                                    </div>
                                    <div class="col-sm-2 m-auto">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary btn-block me-1 mb-1" data-bs-toggle="modal" data-bs-target="#solicitud">Inscribirse</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
    </div>
    <?php include "modals/modal-solicitud.php" ?>
    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/js.php'; ?>
    <?php include 'includes/serivices-js.php'; ?>
    <!-- Files JS -->

</body>

</html>