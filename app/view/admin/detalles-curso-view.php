<?php
if (!isset($_POST['id'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $id = $_POST['id'];
}
$titulo = "Detalles del curso"

?>
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
        <input type="hidden" value="<?php echo $id?>" id="idCurso">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-content">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Detalles del curso</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span id="nombreCursoTitulo"></span></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- seccion callout -->
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos eveniet
                                    perspiciatis sequi voluptatem. Alias aliquid, assumenda beatae hic maxime
                                    necessitatibus non possimus tempora. Accusamus aperiam at corporis harum provident.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Crear grupo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion cards estadiscticas -->
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/grado4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">GRUPOS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">16</h3>
                                            <h6 class="font-semibold text-success">Creados</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/comunidad4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">ALUMNOS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">183,000</h3>
                                            <h6 class="font-semibold text-success">Inscritos</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/inscripciones4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">SOLICITUDES</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">1,000</h3>
                                            <h6 class="font-semibold text-success">Creadas</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/constancia4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">CONSTANCIAS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">1,000</h3>
                                            <h6 class="font-semibold text-success">Entregadas</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="../assets/images/start-sesion.png" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold" id="nombreAutor"></h5>
                                    <h6 class="text-muted mb-0">AUTOR</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion detalles y banner img -->
            <section class="section">
                <div class="row gutters-sm">
                    <!-- detalles del curso-->
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body py-2">
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">General:</h5>
                                    <div class="list-group m-2">
                                        <!-- PARTE ACORDEON 1 -->
                                        <div class="list-group-item list-group-item-action" id="heading1" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="false"
                                        aria-controls="collapseOne" role="button">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="d-flex px-2 py-1 mb-0">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs">Descripción</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="collapse pt-1" aria-labelledby="heading1"
                                            data-parent="#cardAccordion">
                                            <p class="p-3" id="detallesCurso"></p>
                                        </div>

                                        <!-- PARTE ACORDEON 2 -->
                                        <div class="list-group-item list-group-item-action" id="heading2" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapseOne" role="button">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="d-flex px-2 py-1 mb-0">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs">Objetivo</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="collapse pt-1" aria-labelledby="heading2"
                                            data-parent="#cardAccordion">
                                            <p class="p-3" id="objetivo"></p>
                                        </div>

                                        <!-- PARTE ACORDEON 3 -->
                                        <div class="list-group-item list-group-item-action" id="heading3" data-bs-toggle="collapse"
                                             data-bs-target="#collapse3" aria-expanded="false"
                                             aria-controls="collapseOne" role="button">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="d-flex px-3 py-1 mb-0">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs">Antecedentes</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse3" class="collapse pt-1" aria-labelledby="heading3"
                                             data-parent="#cardAccordion">
                                            <p class="p-3" id="antecedentes"></p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Detalles:</h5>
                                    <div class="row py-2">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Dirigido a</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="dirigido_a">   </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Modalidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="modalidad"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Código</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="codigoInfo"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Sesiones</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="sesionesInfo"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Registrado desde</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fechaCreacion"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#updateDatosCursos">Editar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Temario PDF:</h5>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <span id="filePDF" class="me-1 mb-1"></span>
                                            <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-eye"></i></button>
                                            <span  class=" me-1 mb-1"><input class="form-control" type="file" id="formFile"></span>
                                            <a href="#" class="btn btn-primary me-1 mb-1"><i class="fas fa-cloud-upload-alt"></i></a>
                                            <a href="#" class="btn btn-danger me-1 mb-1"><i class="far fa-trash-alt"></i></a>

                                          </div>
                                    </div>

                                    <div class="col-sm-4">

                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner imagen -->
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-content">
                                <span id="imgContainer"></span>
                                <div class="card-body pt-3">
                                    <h4 class="card-title">Imagen del banner</h4>
                                    <p class="card-text">
                                    Debe tener una resolución de 600px por 300px
                                    </p>
                                    <button class="btn btn-primary"><i class="fas fa-sync-alt"></i></button>
                                    <button class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="callout callout-primary p-0">
                                    <div id="detallesAprobacionCurso">
                                        <div class="d-flex">
                                            <div class="m-auto">
                                                <img src="../assets/images/icons/cancel.svg" width="80" alt="svg ok">
                                            </div>
                                            <div class="m-auto">
                                                <h5>Sin acreditar</h5>
                                                Si este curso cumple con los requerimentos, puede aprobar este curso y comenzar a asignar grupos
                                            </div>
                                        </div>
                                        <div class="card-body d-flex text-align-right pb-0">
                                            <a href="#" class="btn btn-success btn-block ">Acreditar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin banner imagen -->
                </div>
            </section>
            <!-- fin de seccion de detalles -->

            <!-- seccion de temario -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <!-- boton que da problemas en responsive -->
                            <div class="col-sm-12 col-md-6">
                                Temario general del curso
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <span class="position-absolute  mx-3 end-0">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewTema">
                                    <i class="fas fa-plus"></i> Agregar</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive" id="tblTemario"></div>
                </div>
            </section>
            <!-- fin seccion de temario -->

            <!-- creacion de asignacion de profesor -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <!-- boton que da problemas en responsive -->
                            <div class="col-sm-12 col-md-6">
                                Detalles de Grupos
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <span class="position-absolute  mx-3 end-0">
                                <button class="btn btn-primary mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-plus"></i> Grupo</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 align-items-center m-auto text-center">
                                    <h2><i class="fas fa-layer-group text-grey"></i></h2>
                                    <h5 class="text-center">Grupos de este Curso</h5>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row p-3">
                                        <div class="col-md-4 text-end">
                                            <label for="indice" class="text-primary">Seleccione un Grupo:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-control" id="list-grupos"> </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 align-items-center">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 p-3">
                                    <h5 class="text-secondary">Horario establecido:</h5>
                                    <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="lista-alumnos-tabla" data-bs-toggle="list" href="#lista-alumnos" role="tab" aria-selected="true">Precencial</a>
                                        <a class="list-group-item list-group-item-action" id="lista-solicitudes-tabla" data-bs-toggle="list" href="#lista-solicitudes" role="tab" aria-selected="false">Virtual</a>
                                    </div>
                                    <div class="tab-content text-justify">
                                        <div class="tab-pane fade active show table-responsive" id="lista-alumnos" role="tabpanel" aria-labelledby="lista-alumnos-tabla">
                                            <h5>Horario presencial:</h5>
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

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#horarioPresencial">
                                                <i class="fas fa-plus"></i>Agregar
                                            </button>
                                            <button class="btn btn-primary me-1 mb-1"><i class="fas fa-plus"></i>Editar</button>
                                        </div>
                                        <div class="tab-pane fade table-responsive" id="lista-solicitudes" role="tabpanel" aria-labelledby="lista-solicitudes-tabla">
                                            <h5>Horario virtual:</h5>
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
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary  me-1 mb-1"><i class="fas fa-plus"></i>Agregar</button>
                                            <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#updateDatosCursos">Editar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 p-3">
                                    <div class="row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <h5 class="text-secondary">Descuentos Aplicados:</h5>
                                            <div class="mt-1 mb-1 overflow-auto">
                                                <table class="table table-hover text-left">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">Dirigido a:</th>
                                                        <th scope="col">Aplicar % Descuento</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="procedencias">
                                                    <tr id_procedencia="1">
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="1">
                                                            </div>
                                                        </td>
                                                        <td>Comunidad FESC</td>
                                                        <td>
                                                            <input class="form-control" type="number" disabled="" value="0" id="num1">
                                                        </td>
                                                    </tr>
                                                    <tr id_procedencia="2">
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="2">
                                                            </div>
                                                        </td>
                                                        <td>Comunidad UNAM</td>
                                                        <td>
                                                            <input class="form-control" type="number" disabled="" value="0" id="num2">
                                                        </td>
                                                    </tr>
                                                    <tr id_procedencia="3">
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="3">
                                                            </div>
                                                        </td>
                                                        <td>Ex-Alumno FESC</td>
                                                        <td>
                                                            <input class="form-control" type="number" disabled="" value="0" id="num3">
                                                        </td>
                                                    </tr>
                                                    <tr id_procedencia="4">
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="4">
                                                            </div>
                                                        </td>
                                                        <td>Ex-Alumno UNAM</td>
                                                        <td>
                                                            <input class="form-control" type="number" disabled="" value="0" id="num4">
                                                        </td>
                                                    </tr>
                                                    <tr id_procedencia="5">
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="5">
                                                            </div>
                                                        </td>
                                                        <td>Externos de fuera</td>
                                                        <td>
                                                            <input class="form-control" type="number" disabled="" value="0" id="num5">
                                                        </td>
                                                    </tr>
                                                    <tr id_procedencia="6">
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="6">
                                                            </div>
                                                        </td>
                                                        <td>Personal UNAM</td>
                                                        <td>
                                                            <input class="form-control" type="number" disabled="" value="0" id="num6">
                                                        </td>
                                                    </tr></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
                <!-- FIN SECCION SOLICITUDES Y LISTA -->
            <!-- seccion de historico de cursos -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Historico de Grupos Derivados de este Curso
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped" id="tblHistCursos">
                            <thead>
                            <tr>
                                <th>GRUPO</th>
                                <th>CURSO</th>
                                <th>PROFESOR</th>
                                <th>INSCRITOS</th>
                                <th>PERIODO</th>
                                <th>TIPO</th>
                                <th>ESTADO</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody id="HistoricoCursos">
                            <tr id_curso ="1">
                                <th scope="row">2456</th>
                                <td>Aspel NOI para principiantes</td>
                                <td>Romulo Albertiño Suarez</td>
                                <td>28/30</td>
                                <td>5/11/2021</td>
                                <td>Presencial</td>
                                <td>Finalizado</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="./detalles-asignacion" class="btn btn-outline-primary"><i class="fas fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- fin seccion de historico de cursos -->

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/modal-horario-presencial.php" ?>
            <?php include "modals/modal-horario-virtual.php" ?>
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-nuevo-tema.php"?>
            <?php include "modals/modal-pdf-temario.php"?>
            <?php include "modals/modal-edita-curso.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>

<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX
    <script src="./service/lista-alumnos.js"></script>
-- INCLUDE SERIVES AJAX -->
<!-- Agregar solo cuando exista una tabla para mostrar-->
<script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>

<!--CARGAR SERVICIOS AJAX-->
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/curso-details.js"></script>

<script>
    // Simple Datatable
    let table1 = document.querySelector('#tbl1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>