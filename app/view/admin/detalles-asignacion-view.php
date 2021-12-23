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
                                <div class="col-sm-12">
                                    A continuación, se muestra la información del grupo, aquí puede modificar las fechas de inicio/término del curso.
                                            Puede cambiar al profesor que impartirá el curso,
                                            puede modificar el cupo original por si necesita más lugares o limitarlo
                                            según lo necesite. También podrá modificar el costo que va a tener.
                                            (Considere que los descuentos dependen del costo).
                                            Revise las solicitudes de inscripción y apruebe o rechace la inscripción
                                            del solicitante.
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
                        <div class="img" id="fondoImg">
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
                                            <h6 class="mb-0">Serestre</h6>
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
                                    <h5 class="text-secondary">Fechas importantes:</h5>
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
                                                    El costo final para este curso es de <span class="badge bg-success" id="lblCostoFinalCallout"></span> a continuación
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
                                                <a class="list-group-item list-group-item-action active" id="tabla-presencial" data-bs-toggle="list" href="#horario-presencial" role="tab">Lista Oficial</a>
                                                <a class="list-group-item list-group-item-action" id="tabla-virtual" data-bs-toggle="list" href="#horario-virtual" role="tab">Solicitudes</a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-10 mt-1">
                                            <div class="tab-content text-justify" id="nav-tabContent">
                                                <div class="tab-pane show active table-responsive" id="horario-presencial" role="tabpanel" aria-labelledby="tabla-presencial">
                                                    <table class="table table-hover table-striped" id="tblListaGrupo">
                                                        <thead>
                                                        <tr>
                                                            <th>MATRICULA</th>
                                                            <th>NOMBRE</th>
                                                            <th>INCORPORACIÓN</th>
                                                            <th>ESTADO</th>
                                                            <th>CALIFICACIÓN</th>
                                                            <th>CONSTANCIA</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tbl-listaGrupo">
                                                        <tr id_grupo="1">
                                                            <td>316345892</td>
                                                            <td>Jennifer Morales Rosas</td>
                                                            <td>19-OCT-2020</td>
                                                            <td><span class="badge bg-success">ACTIVO</span></td>
                                                            <td>No disponible</td>
                                                            <td>Pendiente</td>
                                                            <td>
                                                                <a href="./ficha-inscripcion" class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                                                                <a href="#" class="btn btn-outline-primary"><i class="far fa-file-alt"></i></a>
                                                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#previaDocs"><i class="fas fa-folder"></i></a>
                                                                <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#confrimaCnacelacion"><i class="fas fa-times-circle"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr id_grupo="2">
                                                            <td>316345892</td>
                                                            <td>Enrique Peña Nieto</td>
                                                            <td>20-OCT-2020</td>
                                                            <td><span class="badge bg-success">ACTIVO</span></td>
                                                            <td>No disponible</td>
                                                            <td>Pendiente</td>
                                                            <td>
                                                                <a href="./ficha-inscripcion" class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                                                                <a href="#" class="btn btn-outline-primary"><i class="far fa-file-alt"></i></a>
                                                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#previaDocs"><i class="fas fa-folder"></i></a>
                                                                <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#confrimaCnacelacion"><i class="fas fa-times-circle"></i></a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#horarioVirtual">
                                                        <i class="fas fa-download"></i>Descargar
                                                    </button>
                                                </div>
                                                <div class="tab-pane table-responsive" id="horario-virtual" role="tabpanel" aria-labelledby="tabla-virtual">
                                                    <table class="table table-hover table-striped" id="tblSolInscripcion">
                                                        <thead>
                                                        <tr>
                                                            <th>MATRICULA</th>
                                                            <th>NOMBRE</th>
                                                            <th>PAGO</th>
                                                            <th>INSCRIPCIÓN</th>
                                                            <th>ESTADO</th>
                                                            <th>NOTAS</th>
                                                            <th> </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tbl-SolInsc">
                                                        <tr id_grupo="1">
                                                            <td>316345892</td>
                                                            <td>Jennifer Morales Rosas</td>
                                                            <td><span class="badge bg-success">ACREDITADO</span></td>
                                                            <td><span class="badge bg-warning">PENDIENTE</span></td>
                                                            <td>Activo</td>
                                                            <td>----------</td>
                                                            <td></td>
                                                            <!-- BOTON ACCIONES -->
                                                            <td>
                                                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#previaDocs"><i class="fas fa-folder"></i></a>
                                                                <a href="./ficha-inscripcion" class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                                                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#confrimaCnacelacion"><i class="fas fa-times-circle"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr id_grupo="2">
                                                            <td>316345892</td>
                                                            <td>Jennifer Morales Rosas</td>
                                                            <td><span class="badge bg-success">ACREDITADO</span></td>
                                                            <td><span class="badge bg-warning">PENDIENTE</span></td>
                                                            <td>Activo</td>
                                                            <td>----------</td>
                                                            <td></td>
                                                            <!-- BOTON ACCIONES -->
                                                            <td>
                                                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#previaDocs"><i class="fas fa-folder"></i></a>
                                                                <a href="./ficha-inscripcion" class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                                                                <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#confrimaCnacelacion"><i class="fas fa-times-circle"></i></a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
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
            <?php include "modals/modal-documentos-alumno.php" ?>
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
<script src="./service/asignacion-gral.js"></script>
<script src="./service/asignacion-detalles.js"></script>

</body>

</html>