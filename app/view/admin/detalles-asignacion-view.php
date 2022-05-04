<?php
$id = $_POST['id'];
$titulo = "Detalles de la Asignación" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>

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
                        <h3 id="nameCursoTittle"></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                <li class="breadcrumb-item" id="liCursoAction"><a href="#" id="nameBreadCurso"></a></li>
                                <li class="breadcrumb-item active" aria-current="page" id="grupoBread"></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- SECCION CALLOUT INFO -->
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10">
                                    A continuación, se muestra la información del grupo, aquí puede modificar las fechas de inicio/término del curso.
                                            Puede cambiar al profesor que impartirá el curso,
                                            puede modificar el cupo original por si necesita más lugares o limitarlo
                                            según lo necesite. También podrá modificar el costo que va a tener.
                                            (Considere que los descuentos dependen del costo).
                                            Revise las solicitudes de inscripción y apruebe o rechace la inscripción
                                            del solicitante.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <!-- Example single danger button -->
                                    <div class="btn-group w-100 mr-3 mt-3 mb-3">
                                        <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                            Opciones
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Concluir</a></li>
                                            <li><a class="dropdown-item" href="#">Generar Constancias</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Termino Forzado</a></li>
                                            <li><a class="dropdown-item" href="#">Archivar</a></li>
                                            <li><a class="dropdown-item" href="#">Cancelar Grupo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FIN SECCION CALLOUT INFO -->
            <!-- INICIO SECCION ESTADISTICAS ASIG -->
<!--
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 img_bg_cards"  style="background-image: url(../assets/images/icons/inscripciones4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">ALUMNOS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">40</h3>
                                            <h6 class="font-semibold text-success">Inscritos</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 img_bg_cards" style="background-image: url(../assets/images/icons/grado4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">SOLICITUDES</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">16</h3>
                                            <h6 class="font-semibold text-warning">Por revisar</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 img_bg_cards" style="background-image: url(../assets/images/icons/comunidad4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">CONSTANCIAS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">0</h3>
                                            <h6 class="font-semibold text-success">Pendientes</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <div class="dateInicio">
                                    <h5 class="font-bold pt-2">Fecha de inicio</h5>
                                    <h6 class="text-muted mb-0 pb-4">09 de noviembre, 2021</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            -->
            <!-- FIN SECCION ESTADISTICAS ASIG -->
            <!-- SECCION BANNER CURSO -->

            <section class="section">
                <div class="card">
                    <div class="col-md-12 text-center">
                        <div class="img bannerImg" id="fondoImg">
                            <div class="overlay"></div>
                            <div class="mx-auto">
                                <h4 class="text-light text-left ">
                                    <strong id="nameAsignacion">{NAME}}</strong>
                                    <h5 class="text-secondary" id="lblProfesorName">{PROFESOR_NAME}</h5>
                                    <div id="statusFlag"></div>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FIN SECCION BANNER CURSO -->
            <!-- SECCION DE DETALLES GENERALES -->
            <section class="section">
                <div class="row gutters-sm">
                    <!-- detalles generales del curso-->
                    <div class="col-12 col-md-6">
                        <div class="card mb-3">
                            <div class="card-body py-2">
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Detalles Generales:</h5>
                                    <div class="row py-2">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Grupo</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblGrupo">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Generación</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblGeneracion"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Modalidad</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblModalidad"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Cupo</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblCupo">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Sede</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblCampusCede">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Semeestre</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblSemestre">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Costo</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblCostoFinal"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Visibilidad</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblVisible"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">NOTAS</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblNotas"> </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row py-1 m-2">
                                    <button class="btn btn-primary mr-3 mt-3 mb-3 w-50" data-bs-toggle="modal" data-bs-target="#editarDetallesAsig">
                                        <i class="fas fa-edit"></i> Editar detalles
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body py-2">
                                <!-- fechas importantes-->
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Fechas importantes</h5>
                                    <div class="row py-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Inscripciones</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary" id="lblInsc"> </div>
                                    </div>
                                    <hr>
                                    <div class="row py-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Clases</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary" id="lblClases"> </div>
                                    </div>
                                    <hr>
                                    <div class="row py-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Calificaciones</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary" id="lblCalif"> </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row py-1 m-2">
                                    <button class="btn btn-primary mr-3 mt-3 mb-3 w-50" data-bs-toggle="modal" data-bs-target="#editarDetallesAsigFechas">
                                        <i class="fas fa-edit"></i> Editar Fechas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- detalles de descuentos-->
                    <div class="col-12 col-md-6">
                        <div class="card mb-3">
                            <div class="card-body py-2">
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Precios Calculados:</h5>
                                    <div class="callout callout-second bg-grey">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    El costo final para este curso es de <span class="badge bg-success" id="lblCostoFinalCallout"></span>, a continuación
                                                    se muestran los costos aplicados para cada uno de los estudiantes a quien va dirigido:
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2 align-items-center table-responsive" id="containerDescuentos">
                                        <div class="card-body table-responsive" id="containerDescuentos"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fin detalles de descuentos-->
                </div>
            </section>
            <!-- FIN SECCION DE DETALLES GENERALES -->

            <!-- SECCION SOLICITUDES Y LISTA -->
            <section class="list-group-navigation">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listas de Alumnos</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-2">
                                            <div class="list-group" role="tablist">
                                                <a class="list-group-item list-group-item-action active" id="acreditados_container" data-bs-toggle="list" href="#lista_oficial_container" role="tab">Lista Oficial <span class="badge bg-primary" id="badgeAprobados">0</span></a>
                                                <a class="list-group-item list-group-item-action" id="pendientes" data-bs-toggle="list" href="#solic_pendientes_container" role="tab">Solicitudes <span class="badge bg-danger" id="badgePendientes">0</span></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-10 mt-1">
                                            <div class="tab-content text-justify" id="nav-tabContent">
                                                <div class="tab-pane show active table-responsive" id="lista_oficial_container" role="tabpanel" aria-labelledby="acreditados_container">
                                                </div>
                                                <div class="tab-pane table-responsive" id="solic_pendientes_container" role="tabpanel" aria-labelledby="pendientes">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="text-center text-white ">
            <?php include "modals/modal-cancelar-insc.php" ?>
            <?php include "modals/modal-documentos-alumno.php"?>
            <?php include "modals/modal-vista-documento.php"?>
            <?php include "modals/modal-editar-detalles-asignacion.php" ?>
            <?php include "modals/modal-editar-descuentos.php" ?>
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-add-grupo-curso.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX-->
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/asignacion-gral.js"></script>
<script src="./service/asignacion-detalles.js"></script>
<script src="./service/documentacion-gral.js"></script>
<script src="./service/listasInscripcion.js"></script>
<script src="./service/acounts-security.js"></script>

</body>

</html>