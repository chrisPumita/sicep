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
                        <h3>TEMPLATE DEMO</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mis Cursos</li>
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
                                                <h4>Titulo de card contenido</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="list-group" id="containerFichas">
                                                    <div class="list-group-item list-group-item-action" idinsc="123456789" id="heading1" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne" role="button" onclick="showDocs('1',this);">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <div class="d-flex px-2 py-1 mb-0">
                                                                <div class="px-3 d-flex align-items-center">
                                                                    <i class="fas fa-folder-open"></i>
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-xs">Jaques Alcalá Armando</h6>
                                                                    <p class="text-xs text-secondary mb-0">Diccionarios de datos [666]</p>
                                                                </div>
                                                            </div>
                                                            <small><span class="badge bg-danger" id="contadorBadgeCol-1">1</span></small>
                                                        </div>
                                                    </div>
                                                    <div id="collapse1" class="pt-1 collapse show" aria-labelledby="heading1" data-parent="#cardAccordion" style="">
                                                        <div class="card-content">
                                                            <div class="py-1 px-1">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12 col-md-4">
                                                                        <div class="list-group" role="tablist">
                                                                            <a class="list-group-item list-group-item-action " id="list-home-list" data-bs-toggle="list" href="#list-1-1" role="tab"><i class="far fa-id-card"></i> Ficha De Inscripcion</a>
                                                                            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-bs-toggle="list" href="#list-2-1" role="tab"><i class="fas fa-folder-open"></i> Documentos </a>
                                                                        </div>
                                                                        <div class="row py-1 m-2">
                                                                            <p>
                                                                                <a href="#" class="btn btn-primary" onclick="goDetailsAlumno('1');"><i class="fas fa-user"></i></a>
                                                                                <a href="#" class="btn btn-secondary" onclick="goFichaInsc('123456789');"><i class="far fa-id-card"></i></a>
                                                                                <a href="#" class="btn btn-danger" onclick="cancelarInscripcion(1)"><i class="fas fa-ban"></i></a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                                        <div class="tab-content text-justify" id="nav-tabContent">
                                                                            <div class="tab-pane show " id="list-1-1" role="tabpanel" aria-labelledby="list-home-list">
                                                                                <div class="col-12 col-md-12">
                                                                                    <div class="card mb-3">
                                                                                        <div class="py-2">
                                                                                            <div class="row py-1 m-2">
                                                                                                <h5 class="text-secondary">Ficha de Inscipción: No123456789</h5>
                                                                                                <div class="row py-2">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Curso:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">Diccionarios de datos GRUPO: 666</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Semestre</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">2021-2</div>
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Generación</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">2020</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Modalidad</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">En Linea</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Procedencia:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">Comunidad FESC </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Contacto:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-7 text-secondary"><a href="mailto:alumno@correo.com" class="text-secondary"><i class="fas fa-paper-plane"></i> alumno@correo.com</a>
                                                                                                        <br> <i class="fas fa-mobile-alt"></i> 5151121212
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Solicitud:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">lun, 24 de mayo de 2021 12:00 a.&nbsp;m.</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Costo:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">$1500.00</div>
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Descuento:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">$450 (-70.00%)</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <h6 class="mb-0">Estatus de la Inscripción</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 text-secondary"><i class="fas fa-check-circle text-success"></i> APROBADA</div>
                                                                                                    <div class="col-sm-4 text-secondary"><i class="fas fa-hand-holding-usd text-success"></i> PAGADO</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane active" id="list-2-1" role="tabpanel" aria-labelledby="list-profile-list">
                                                                                <div class="table-responsive" id="containerDocs-1">
                                                                                    <table class="table table-hover table-lg">
                                                                                        <tbody></tbody>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>DOCUMENTO</th>
                                                                                                <th>ESTADO</th>
                                                                                                <th>VER</th>
                                                                                                <th>OPCIONES</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr iddoc="null">
                                                                                                <td>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="spinner-grow text-black" role="status"></div>
                                                                                                        </div>
                                                                                                        <div class="d-flex flex-column justify-content-center px-3">
                                                                                                            <p class="mb-0 text-xs">CREDENCIAL </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    Esperando...
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <div class="container">
                                                                                        <div class="row small">
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-success dotDocs small"></i> Acreditado
                                                                                            </div>
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-warning dotDocs small"></i>   Por Revisar
                                                                                            </div>
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-info dotDocs small"></i>  Rechazado
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <i class="fas fa-circle text-black dotDocs small"></i>  Esperando que el alumno suba el archivo
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item list-group-item-action" idinsc="1415254252" id="heading2" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapseOne" role="button" onclick="showDocs('2',this);">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <div class="d-flex px-2 py-1 mb-0">
                                                                <div class="px-3 d-flex align-items-center">
                                                                    <i class="fas fa-folder-open"></i>
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-xs">Perez Jimenez Lucia</h6>
                                                                    <p class="text-xs text-secondary mb-0">Diccionarios de datos [666]</p>
                                                                </div>
                                                            </div>
                                                            <small><span class="badge bg-danger" id="contadorBadgeCol-2">2</span></small>
                                                        </div>
                                                    </div>
                                                    <div id="collapse2" class="pt-1 collapse show" aria-labelledby="heading2" data-parent="#cardAccordion" style="">
                                                        <div class="card-content">
                                                            <div class="py-1 px-1">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12 col-md-4">
                                                                        <div class="list-group" role="tablist">
                                                                            <a class="list-group-item list-group-item-action " id="list-home-list" data-bs-toggle="list" href="#list-1-2" role="tab"><i class="far fa-id-card"></i> Ficha De Inscripcion</a>
                                                                            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-bs-toggle="list" href="#list-2-2" role="tab"><i class="fas fa-folder-open"></i> Documentos </a>
                                                                        </div>
                                                                        <div class="row py-1 m-2">
                                                                            <p>
                                                                                <a href="#" class="btn btn-primary" onclick="goDetailsAlumno('2');"><i class="fas fa-user"></i></a>
                                                                                <a href="#" class="btn btn-secondary" onclick="goFichaInsc('1415254252');"><i class="far fa-id-card"></i></a>
                                                                                <a href="#" class="btn btn-danger" onclick="cancelarInscripcion(1)"><i class="fas fa-ban"></i></a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                                        <div class="tab-content text-justify" id="nav-tabContent">
                                                                            <div class="tab-pane show " id="list-1-2" role="tabpanel" aria-labelledby="list-home-list">
                                                                                <div class="col-12 col-md-12">
                                                                                    <div class="card mb-3">
                                                                                        <div class="py-2">
                                                                                            <div class="row py-1 m-2">
                                                                                                <h5 class="text-secondary">Ficha de Inscipción: No1415254252</h5>
                                                                                                <div class="row py-2">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Curso:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">Diccionarios de datos GRUPO: 666</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Semestre</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">2021-2</div>
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Generación</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">2020</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Modalidad</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">En Linea</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Procedencia:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">Comunidad UNAM </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Contacto:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-7 text-secondary"><a href="mailto:lucia@hotmail.com" class="text-secondary"><i class="fas fa-paper-plane"></i> lucia@hotmail.com</a>
                                                                                                        <br> <i class="fas fa-mobile-alt"></i> 5587481564
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Solicitud:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">mié, 16 de diciembre de 2020 11:09 a.&nbsp;m.</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Costo:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">$1500.00</div>
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Descuento:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">No Aplica</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <h6 class="mb-0">Estatus de la Inscripción</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 text-secondary"><i class="fas fa-exclamation-circle text-warning"></i> POR REVISAR  </div>
                                                                                                    <div class="col-sm-4 text-secondary"><i class="fas fa-hand-holding-usd text-warning"></i> PAGO PENDIENTE </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane active" id="list-2-2" role="tabpanel" aria-labelledby="list-profile-list">
                                                                                <div class="table-responsive" id="containerDocs-2">
                                                                                    <table class="table table-hover table-lg">
                                                                                        <tbody></tbody>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>DOCUMENTO</th>
                                                                                                <th>ESTADO</th>
                                                                                                <th>VER</th>
                                                                                                <th>OPCIONES</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr iddoc="null">
                                                                                                <td>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="spinner-grow text-black" role="status"></div>
                                                                                                        </div>
                                                                                                        <div class="d-flex flex-column justify-content-center px-3">
                                                                                                            <p class="mb-0 text-xs">CREDENCIAL </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    Esperando...
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <div class="container">
                                                                                        <div class="row small">
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-success dotDocs small"></i> Acreditado
                                                                                            </div>
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-warning dotDocs small"></i>   Por Revisar
                                                                                            </div>
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-info dotDocs small"></i>  Rechazado
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <i class="fas fa-circle text-black dotDocs small"></i>  Esperando que el alumno suba el archivo
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item list-group-item-action" idinsc="527242452" id="heading3" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapseOne" role="button" onclick="showDocs('3',this);">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <div class="d-flex px-2 py-1 mb-0">
                                                                <div class="px-3 d-flex align-items-center">
                                                                    <i class="fas fa-folder-open"></i>
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-xs">Cortes Ponciano Paola</h6>
                                                                    <p class="text-xs text-secondary mb-0">Induccion al computo II [1001]</p>
                                                                </div>
                                                            </div>
                                                            <small><span class="badge bg-danger" id="contadorBadgeCol-3">1</span></small>
                                                        </div>
                                                    </div>
                                                    <div id="collapse3" class="pt-1 collapse show" aria-labelledby="heading3" data-parent="#cardAccordion" style="">
                                                        <div class="card-content">
                                                            <div class="py-1 px-1">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12 col-md-4">
                                                                        <div class="list-group" role="tablist">
                                                                            <a class="list-group-item list-group-item-action " id="list-home-list" data-bs-toggle="list" href="#list-1-3" role="tab"><i class="far fa-id-card"></i> Ficha De Inscripcion</a>
                                                                            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-bs-toggle="list" href="#list-2-3" role="tab"><i class="fas fa-folder-open"></i> Documentos </a>
                                                                        </div>
                                                                        <div class="row py-1 m-2">
                                                                            <p>
                                                                                <a href="#" class="btn btn-primary" onclick="goDetailsAlumno('5');"><i class="fas fa-user"></i></a>
                                                                                <a href="#" class="btn btn-secondary" onclick="goFichaInsc('527242452');"><i class="far fa-id-card"></i></a>
                                                                                <a href="#" class="btn btn-danger" onclick="cancelarInscripcion(1)"><i class="fas fa-ban"></i></a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                                        <div class="tab-content text-justify" id="nav-tabContent">
                                                                            <div class="tab-pane show " id="list-1-3" role="tabpanel" aria-labelledby="list-home-list">
                                                                                <div class="col-12 col-md-12">
                                                                                    <div class="card mb-3">
                                                                                        <div class="py-2">
                                                                                            <div class="row py-1 m-2">
                                                                                                <h5 class="text-secondary">Ficha de Inscipción: No527242452</h5>
                                                                                                <div class="row py-2">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Diplomado:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">Induccion al computo II GRUPO: 1001</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Semestre</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">2021-2</div>
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Generación</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">2020</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Modalidad</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">En Linea</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Procedencia:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">Ex-Alumno UNAM </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Contacto:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-7 text-secondary"><a href="mailto:paola@hotmail.com" class="text-secondary"><i class="fas fa-paper-plane"></i> paola@hotmail.com</a>
                                                                                                        <br> <i class="fas fa-mobile-alt"></i> 5584321548
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-3">
                                                                                                        <h6 class="mb-0">Solicitud:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-9 text-secondary">mié, 16 de diciembre de 2020 11:08 a.&nbsp;m.</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Costo:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">$1200.00</div>
                                                                                                    <div class="col-7 col-sm-3">
                                                                                                        <h6 class="mb-0">Descuento:</h6>
                                                                                                    </div>
                                                                                                    <div class="col-5 col-sm-3 text-secondary">$840 (-30.00%)</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <h6 class="mb-0">Estatus de la Inscripción</h6>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 text-secondary"><i class="fas fa-exclamation-circle text-warning"></i> POR REVISAR  </div>
                                                                                                    <div class="col-sm-4 text-secondary"><i class="fas fa-hand-holding-usd text-warning"></i> PAGO PENDIENTE </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane active" id="list-2-3" role="tabpanel" aria-labelledby="list-profile-list">
                                                                                <div class="table-responsive" id="containerDocs-3">
                                                                                    <table class="table table-hover table-lg">
                                                                                        <tbody></tbody>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>DOCUMENTO</th>
                                                                                                <th>ESTADO</th>
                                                                                                <th>VER</th>
                                                                                                <th>OPCIONES</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr iddoc="null">
                                                                                                <td>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="spinner-grow text-black" role="status"></div>
                                                                                                        </div>
                                                                                                        <div class="d-flex flex-column justify-content-center px-3">
                                                                                                            <p class="mb-0 text-xs">CURP </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    Esperando...
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <div class="container">
                                                                                        <div class="row small">
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-success dotDocs small"></i> Acreditado
                                                                                            </div>
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-warning dotDocs small"></i>   Por Revisar
                                                                                            </div>
                                                                                            <div class="col-12 col-md-2">
                                                                                                <i class="fas fa-circle text-info dotDocs small"></i>  Rechazado
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <i class="fas fa-circle text-black dotDocs small"></i>  Esperando que el alumno suba el archivo
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                </div>
                <?php include 'includes/footer.php'; ?>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
        <!-- Files JS -->
    </body>
</html>