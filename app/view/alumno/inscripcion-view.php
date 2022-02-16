<?php
if (!isset($_POST['id'])){
    header("Location: ./home");
}
else{
    $id = $_POST['id'];
    echo '<script> window.ID_ASIG = '.$id.'; </script>';
}
$titulo = "Inscripción";
?>
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
                    <h3>Inscripción a <span id="nameCursoTittle"></span></h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
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
                                                <h4 class="font-bold" id="lblProfesorName"></h4>
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
                                                    <div class="col-sm-9 text-primary" id="nameAsignacion"></div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Grupo:</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary" id="lblGrupo"></div>
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Semestre</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary" id="lblSemestre"></div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Generación</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary" id="lblGeneracion"></div>
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Sede</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary" id="lblCampusCede"></div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Modalidad</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary" id="lblModalidad"></div>
                                                    <div class="col-7 col-sm-3">
                                                        <h6 class="mb-0">Sesiones</h6>
                                                    </div>
                                                    <div class="col-5 col-sm-3 text-primary" id="lblSesiones"></div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Dirigido a:</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary table-responsive" id="listaDirige"></div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Notas:</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary" id="lblNotas"></div>
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
                                    <div class="card-body" id="costeInscrito">
                                        <span class="badge bg-info position-absolute my-0 mx-3 end-0" role="button"
                                              data-bs-toggle="modal" data-bs-target="#modalDescuentos">
                                                <i class="fas fa-tags"></i>&nbsp;Ver descuentos
                                            </span>
                                        <h4 class="card-title">Costo del curso</h4>
                                        <h2 class="mb-2 text-primary" id="lblCostoFinalCallout"></h2>
                                        <h7 class="text-primary text-muted py-3" id="lblDescuentoAplciado"></h7>

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
                                                <div class="col-sm-8 text-primary text-bold" id="lblInsc"></div>
                                            </div>
                                            <hr class="m-2">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Clases</h6>
                                                </div>
                                                <div class="col-sm-8 text-primary text-bold" id="lblClases"></div>
                                            </div>
                                            <hr class="m-2">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Calificaciones</h6>
                                                </div>
                                                <div class="col-sm-8 text-primary text-bold" id="lblCalif"></div>
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
                                <div class="row w-100">
                                    <div class="col-12 col-sm-8 d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img id="imgAlertInscripcion" src="../assets/images/icons/checked3.svg" alt="Face 1">
                                        </div>
                                        <div class="ms-3 name">
                                            <h6 class="text-muted mb-0" id="alertConfimInscripcion">Una vez termines tu inscripción un administrador procederá a su validación por lo que asegurate de llenar y subir correctamente todos los documentos requeridos.</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 m-auto">
                                        <div class="col-sm-12 d-flex justify-content-end" id="succesBoton">
                                            <button type="button" class="btn btn-primary btn-block me-1 mb-1 bntInpcion" id="btnsend">Inscribirse</button>
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
    <?php include "modals/modal-tbl-descuentos.php" ?>
    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/js.php'; ?>
    <?php include 'includes/serivices-js.php'; ?>
    <!-- Files JS -->
    <script src="./service/alumnos/inscripcion.js"></script>
</body>

</html>