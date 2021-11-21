<?php $titulo = "Detalles de la Asignación" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php" ?>
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
</head>

<body>
    <div id="app">
        <?php include "includes/sidebar.php" ?>
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
                            <h3>2853 - ASPEL NOI Basico</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                    <li class="breadcrumb-item"><a href="./detalles-curso">ASPEL NOI Basico</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Grupo 2853</li>
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
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos eveniet
                                        perspiciatis sequi voluptatem. Alias aliquid, assumenda beatae hic maxime
                                        necessitatibus non possimus tempora. Accusamus aperiam at corporis harum provident.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- FIN SECCION CALLOUT INFO -->

                <!-- INICIO SECCION ESTADISTICAS ASIG -->
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 img_bg_cards" style="background-image: url(../assets/images/icons/inscripciones4.svg);">
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
                                    <!-- <h5 class="font-bold">Profesor</h5>
                                <h6 class="text-muted mb-0">Andres Manuel Lopez Ortiz</h6> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- FIN SECCION ESTADISTICAS ASIG -->

                <!-- SECCION BANNER CURSO -->
                <section class="section">
                    <div class="card">
                        <div class="col-md-12 text-center">
                            <div class="img" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                <div class="overlay"></div>
                                <div class="mx-auto">
                                    <h4 class="text-light text-left ">
                                        <strong>Grupo 2210 Aspel NOI Basico I 2021-1</strong>
                                        <h5 class="text-secondary">Profesora Martha Areyano Felix</h5>
                                        <span class="badge bg-success">
                                            <div class="blob green ">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTIVO
                                        </span>
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
                                            <div class="col-sm-7 text-secondary">
                                                2210
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h6 class="mb-0">Generación</h6>
                                            </div>
                                            <div class="col-sm-7 text-secondary">
                                                2021-2
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Modalidad</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                En linea/Presencial
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Cupo</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                35
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Sede</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                ----------
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Semanas</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                23
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Costo</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                $1,200
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fechas importantes-->
                                    <div class="row py-1 m-2">
                                        <h5 class="text-secondary">Fechas importantes:</h5>
                                        <div class="row py-2">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Inscripciones</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Del 27-05-2021 al 29-05-2021
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row py-2">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Calificaciones</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Del 27-05-2021 al 29-05-2021
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row py-2">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Inicio de clases</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Del 27-05-2021 al 29-05-2021
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row py-1 m-2">
                                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#editar-detalles-curso">
                                            <i class="fas fa-edit"></i> Editar detalles
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
                                        <h5 class="text-secondary">Descuentos:</h5>
                                        <div class="row py-2 align-items-center">
                                            <div class="col-sm-5">
                                                <h6 class="mb-0">Comunidad FESC</h6>
                                            </div>
                                            <div class="col-sm-3 text-secondary text-center">
                                                50%
                                            </div>
                                            <div class="col-sm-4 d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#editar-descuentos">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger me-1 mb-1" data-bs-toggle="modal" data-bs-target="#editar-descuentos">
                                                    <i class="fas fa-minus-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modal_documents">
                                                <i class="fas fa-plus"></i> Agregar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--fin detalles de descuentos-->
                    </div>
                </section>
                <!-- FIN SECCION DE DETALLES GENERALES -->

                <!-- SECCION DE HORARIOS -->
                <section class="list-group-navigation">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horarios</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-2">
                                                <div class="list-group" role="tablist">
                                                    <a class="list-group-item list-group-item-action active" id="tabla-presencial" data-bs-toggle="list" href="#horario-presencial" role="tab">Presencial</a>
                                                    <a class="list-group-item list-group-item-action" id="tabla-virtual" data-bs-toggle="list" href="#horario-virtual" role="tab">Virtual</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-10 mt-1">
                                                <div class="tab-content text-justify" id="nav-tabContent">
                                                    <div class="tab-pane show active table-responsive" id="horario-presencial" role="tabpanel" aria-labelledby="tabla-presencial">
                                                        <h4>Horario Presencial</h4>
                                                        <table class="table table-hover table-striped" id="tblPresencial">
                                                            <thead>
                                                                <tr>
                                                                    <th>HORA</th>
                                                                    <th>LUNES</th>
                                                                    <th>MARTES</th>
                                                                    <th>MIERCOLES</th>
                                                                    <th>JUEVES</th>
                                                                    <th>VIERNES</th>
                                                                    <th>SÁBADO</th>
                                                                    <th>DOMINGO</th>
                                                                    <th> </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbl-HroPresencial">
                                                                <tr id_grupo="1">
                                                                    <td>9:00</td>
                                                                    <td>A21</td>
                                                                    <td></td>
                                                                    <td>A21</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <!-- BOTON ACCIONES -->
                                                                    <td>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-trash-alt"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <tr id_grupo="2">
                                                                    <td>10:30</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>B23</td>
                                                                    <td></td>
                                                                    <!-- BOTON ACCIONES -->
                                                                    <td>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-trash-alt"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#horarioPresencial">
                                                            <i class="fas fa-plus"></i>Agregar
                                                        </button>
                                                    </div>
                                                    <div class="tab-pane table-responsive" id="horario-virtual" role="tabpanel" aria-labelledby="tabla-virtual">
                                                        <h4>Horario Virtual</h4>
                                                        <table class="table table-hover table-striped" id="tblVirtual">
                                                            <thead>
                                                                <tr>
                                                                    <th>HORA</th>
                                                                    <th>LUNES</th>
                                                                    <th>MARTES</th>
                                                                    <th>MIERCOLES</th>
                                                                    <th>JUEVES</th>
                                                                    <th>VIERNES</th>
                                                                    <th>SÁBADO</th>
                                                                    <th>DOMINGO</th>
                                                                    <th> </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbl-HroVirtual">
                                                                <tr id_grupo="1">
                                                                    <td>9:00</td>
                                                                    <td>ZOOM</td>
                                                                    <td></td>
                                                                    <td>ZOOM</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <!-- BOTON ACCIONES -->
                                                                    <td>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-trash-alt"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <tr id_grupo="2">
                                                                    <td>10:30</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>ZOOM</td>
                                                                    <td></td>
                                                                    <!-- BOTON ACCIONES -->
                                                                    <td>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                                                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-trash-alt"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#horarioVirtual">
                                                            <i class="fas fa-plus"></i>Agregar
                                                        </button>
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
                <!-- FIN SECCION DE HORARIOS -->

                <!-- SECCION SOLICITUDES Y LISTA -->
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="lista-alumnos-tabla" data-bs-toggle="list" href="#lista-alumnos" role="tab" aria-selected="true">Lista oficial de alumnos</a>
                                    <a class="list-group-item list-group-item-action" id="lista-solicitudes-tabla" data-bs-toggle="list" href="#lista-solicitudes" role="tab" aria-selected="false">Solicitudes de inscripción</a>
                                </div>
                                <div class="tab-content text-justify">
                                    <div class="tab-pane fade active show table-responsive" id="lista-alumnos" role="tabpanel" aria-labelledby="lista-alumnos-tabla">
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
                                        <button class="btn btn-primary">
                                            <i class="fas fa-download"></i>Descargar
                                        </button>
                                    </div>
                                    <div class="tab-pane fade table-responsive" id="lista-solicitudes" role="tabpanel" aria-labelledby="lista-solicitudes-tabla">
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
                    </section>
                    <!-- FIN SECCION SOLICITUDES Y LISTA -->

                </div>
                <footer class="text-center text-white ">
                    <?php include "modals/modal-horario-presencial.php" ?>
                    <?php include "modals/modal-horario-virtual.php" ?>
                    <?php include "modals/modal-cancelar-insc.php" ?>
                    <?php include "modals/generalModals.php" ?>
                    <?php include "modals/modal-documentos-alumno.php" ?>
                    <?php include "modals/modal-editar-detalles-asignacion.php" ?>
                    <?php include "modals/modal-editar-descuentos.php" ?>
                    <?php include "modals/modal-horario-presencial.php" ?>
                    <?php include "includes/footer.php" ?>
                </footer>
            </div>
        </div>
        <?php include "includes/js.php" ?>
        <?php include "includes/services-js.php" ?>
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