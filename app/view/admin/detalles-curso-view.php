<?php $titulo = "Detalles del curso" ?>
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
                        <h3>Detalles del curso</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Aspel NOI</li>
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
                                    <h5 class="font-bold">Christian Pioquinto</h5>
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
                                                        <h6 class="mb-0 text-xs">Objetivo</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="collapse pt-1" aria-labelledby="heading1"
                                            data-parent="#cardAccordion">
                                            <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nulla, odit,      
                                            labore atque nostrum magnam nisi neque rem beatae quibusdam necessitatibus magni 
                                            culpa, molestiae est nihil reiciendis eos deserunt suscipit?</p>
                                        </div>

                                        <!-- PARTE ACORDEON 2 -->
                                        <div class="list-group-item list-group-item-action" id="heading2" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapseOne" role="button">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="d-flex px-2 py-1 mb-0">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs">Antecedentes</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="collapse pt-1" aria-labelledby="heading2"
                                            data-parent="#cardAccordion">
                                            <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae accusamus et nostrum ut. Perferendis, quo veniam! Omnis numquam possimus nesciunt, nulla veniam praesentium explicabo, pariatur quaerat odit, recusandae obcaecati? Illum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Detalles:</h5>
                                    <div class="row py-2">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Dirigido a</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Alumnos y público en general
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tipo</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Diplomado con opcion para titulación
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Código</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            003
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Sesiones</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            23
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Registrado desde</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            19 - 05 - 2021
                                        </div>
                                    </div>                                          
                                </div>

                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Temario PDF:</h5>
                                    <div class="col-md-4" id="filePDF"><a href="www.link.com" download="" target="_blank" class="btn btn-primary btn-block"> Descargar</a></div>
                                    <div class="col-md-4">
                                        <a href="#" class="btn btn-primary btn-block"><i class="icon ion-md-cloud"></i> Subir</a>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary  btn-block" data-bs-toggle="modal" data-bs-target="#modalPdftemario">
                                        Ver</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner imagen -->
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" src="https://capacitate365.com/wp-content/uploads/2020/10/Curso-excel-completo.png" alt="Card image cap">
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
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped" id="tblTemario">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>INDICE</th>
                                <th>TEMA</th>
                                <th>DESCRIPCIÓN</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="temas">
                            <tr id_grupo="3">
                                <th scope="row">1</th>
                                <td>1.0</td>
                                <td>Induccion al computo</td>
                                <td>---------------------------------</td>
                                <!-- <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                    </div>
                                </td> -->
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- fin seccion de temario -->

            <!-- creacion de asignacion de profesor -->
            <section class="section">
                <div class="card">
                    <div class="row p-3">
                        <div class="col-lg-1 align-items-center m-auto text-center">
                            <h2><i class="fas fa-layer-group text-grey"></i></h2>
                        </div>
                        <div class="col-lg-9">
                            <h3>Creacion de asignacion de Grupo</h3>
                            <div class="form-group">
                                <label for="sel1">Crear y Asignar un grupo de este curso, seleccione el profesor asignado:</label>
                                <select class="form-control" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2 align-items-center">
                            <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#">
                            Crear</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fin creacion de asignacion de profesor -->

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
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-nuevo-tema.php"?>
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
<script>
    // Simple Datatable
    let table1 = document.querySelector('#tbl1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>