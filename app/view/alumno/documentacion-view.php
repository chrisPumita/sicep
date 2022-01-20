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
                                <li class="breadcrumb-item"><a href="#">Solicitudes</a></li>
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
                                                <div class="list-group" id="containerFichas">
                                                    <div class="list-group-item list-group-item-action" idinsc="123456789" id="heading1" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne" role="button" onclick="showDocs('1',this);">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <div class="d-flex px-2 py-1 mb-0">
                                                                <div class="px-3 d-flex align-items-center">
                                                                    <i class="fas fa-folder-open"></i>
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-xs">Diccionarios de datos [666]</h6>
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
                                                                                <a href="#" class="btn btn-secondary"><i class="fas fa-print"></i> Imprimir</a>
                                                                                <a href="#" class="btn btn-danger" ><i class="fas fa-ban"></i> Cancelar</a>
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
                                                                                <div  id="containerDocs-1">
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
                                                                                                <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
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
        <?php include 'includes/js.php'; ?>
        <?php include 'includes/serivices-js.php'; ?>
        <!-- Files JS -->
    </body>
</html>