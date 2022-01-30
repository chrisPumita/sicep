<?php $titulo = "Mis cursos" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "includes/head.php"; ?>
        <!--swiper-->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    </head>
    <body>
        <div id="app">
            <div id="main" class="layout-horizontal">
                <?php include_once "includes/header.php"; ?>
                <div class="content-wrapper container">
                    <div class="page-heading">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Mis Cursos</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mis Cursos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="page-content">
                        <!-- INICIO CURSOS SOLICITADOS -->
                        <section class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>SOLICITADOS</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-around flex-wrap py-3" id="containerCardsAsig">
                                            <div class="d-flex justify-content-around flex-wrap py-3" id="containerCardsAsig">
                                                <div class="card single_course pb-3" style="width: 20rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSCRIPCIONES
                    </span>
                                                    <div class="banner" style="background-image: url(../resources/banners/2147483647/banner-20220104210055.jpg); ">
                                                    </div>
                                                    <span class="badge bg-info ">0/30 Disponibles</span>
                                                    <h5 class="name text-center pt-lg-3">Aprende Finanzas basicas</h5>
                                                    <h6 class="name text-center text-secondary">Grupo 1001</h6>
                                                    <div class="recent-message d-flex px-3">
                                                        <div class="avatar avatar-lg">
                                                            <img src="../resources/default-avatar.png">
                                                        </div>
                                                        <div class="name ms-4">
                                                            <h5 class="mb-1">Agapito Mendoza Herrera</h5>
                                                        </div>
                                                    </div>
                                                    <div class="py-3">
                                                        <div class="list-group list-group-horizontal mb-1 px-2 text-center" role="tablist">
                                                            <a class="list-group-item list-group-info list-group-item-action active" id="list1-1" data-bs-toggle="list" href="#list-1-1" role="tab">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list2-1" data-bs-toggle="list" href="#list-2-1" role="tab">
                                                                <i class="fas fa-caret-square-right"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list3-1" data-bs-toggle="list" href="#list-3-1" role="tab">
                                                                <i class="fas fa-check-double"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list4-1" data-bs-toggle="list" href="#list-4-1" role="tab">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                        </div>
                                                        <div class="tab-content text-justify">
                                                            <div class="tab-pane fade show active" id="list-1-1" role="tabpanel" aria-labelledby="list1-1">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del jueves, 27 de enero de 2022<br> al lunes, 31 de enero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-2-1" role="tabpanel" aria-labelledby="list2-1">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del lunes, 31 de enero de 2022<br> al sábado, 5 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-3-1" role="tabpanel" aria-labelledby="list3-1">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del domingo, 6 de febrero de 2022<br> al domingo, 6 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-4-1" role="tabpanel" aria-labelledby="list4-1">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-tag"></i>Costo:<strong> $600.00</strong>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-chalkboard"></i>Taller (15 Sesiones)<strong>Presencial</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-center">
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432470);">
                                                            <i class="fas fa-plus"></i> Mas info
                                                        </button>
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                            <i class="fas fa-clipboard-check"></i>Solicitudes <span class="badge bg-danger">1</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card single_course pb-3" style="width: 20rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSCRIPCIONES
                    </span>
                                                    <div class="banner" style="background-image: url(../resources/banners/12/banner-20211228021628.jpg); ">
                                                    </div>
                                                    <span class="badge bg-info ">1/30 Disponibles</span>
                                                    <h5 class="name text-center pt-lg-3">Aspel COI</h5>
                                                    <h6 class="name text-center text-secondary">Grupo 1001</h6>
                                                    <div class="recent-message d-flex px-3">
                                                        <div class="avatar avatar-lg">
                                                            <img src="../resources/default-avatar.png">
                                                        </div>
                                                        <div class="name ms-4">
                                                            <h5 class="mb-1">FRancisco ROmo Segundo</h5>
                                                        </div>
                                                    </div>
                                                    <div class="py-3">
                                                        <div class="list-group list-group-horizontal mb-1 px-2 text-center" role="tablist">
                                                            <a class="list-group-item list-group-info list-group-item-action active" id="list1-2" data-bs-toggle="list" href="#list-1-2" role="tab">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list2-2" data-bs-toggle="list" href="#list-2-2" role="tab">
                                                                <i class="fas fa-caret-square-right"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list3-2" data-bs-toggle="list" href="#list-3-2" role="tab">
                                                                <i class="fas fa-check-double"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list4-2" data-bs-toggle="list" href="#list-4-2" role="tab">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                        </div>
                                                        <div class="tab-content text-justify">
                                                            <div class="tab-pane fade show active" id="list-1-2" role="tabpanel" aria-labelledby="list1-2">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 24 de enero de 2022<br> al miércoles, 2 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-2-2" role="tabpanel" aria-labelledby="list2-2">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del lunes, 31 de enero de 2022<br> al lunes, 28 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-3-2" role="tabpanel" aria-labelledby="list3-2">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del lunes, 28 de febrero de 2022<br> al lunes, 28 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-4-2" role="tabpanel" aria-labelledby="list4-2">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-tag"></i>Costo:<strong> $3050.00</strong>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-chalkboard"></i>Curso (50 Sesiones)<strong>Presencial</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-center">
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432471);">
                                                            <i class="fas fa-plus"></i> Mas info
                                                        </button>
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                            <i class="fas fa-clipboard-check"></i>Solicitudes
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card single_course pb-3" style="width: 20rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSCRIPCIONES
                    </span>
                                                    <div class="banner" style="background-image: url(../resources/banners/4/banner-20211228020410.png); ">
                                                    </div>
                                                    <span class="badge bg-info ">0/30 Disponibles</span>
                                                    <h5 class="name text-center pt-lg-3">Diccionarios de datos</h5>
                                                    <h6 class="name text-center text-secondary">Grupo 672</h6>
                                                    <div class="recent-message d-flex px-3">
                                                        <div class="avatar avatar-lg">
                                                            <img src="https://avatars.githubusercontent.com/u/21067489?v=4">
                                                        </div>
                                                        <div class="name ms-4">
                                                            <h5 class="mb-1">Marco Solis Balderas</h5>
                                                        </div>
                                                    </div>
                                                    <div class="py-3">
                                                        <div class="list-group list-group-horizontal mb-1 px-2 text-center" role="tablist">
                                                            <a class="list-group-item list-group-info list-group-item-action active" id="list1-3" data-bs-toggle="list" href="#list-1-3" role="tab">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list2-3" data-bs-toggle="list" href="#list-2-3" role="tab">
                                                                <i class="fas fa-caret-square-right"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list3-3" data-bs-toggle="list" href="#list-3-3" role="tab">
                                                                <i class="fas fa-check-double"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list4-3" data-bs-toggle="list" href="#list-4-3" role="tab">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                        </div>
                                                        <div class="tab-content text-justify">
                                                            <div class="tab-pane fade show active" id="list-1-3" role="tabpanel" aria-labelledby="list1-3">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 27 de diciembre de 2021<br> al viernes, 4 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-2-3" role="tabpanel" aria-labelledby="list2-3">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del lunes, 7 de febrero de 2022<br> al lunes, 7 de marzo de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-3-3" role="tabpanel" aria-labelledby="list3-3">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del lunes, 7 de marzo de 2022<br> al lunes, 7 de marzo de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-4-3" role="tabpanel" aria-labelledby="list4-3">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-tag"></i>Costo:<strong> $3050.00</strong>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-chalkboard"></i>Curso (55 Sesiones)<strong>Presencial</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-center">
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432463);">
                                                            <i class="fas fa-plus"></i> Mas info
                                                        </button>
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                            <i class="fas fa-clipboard-check"></i>Solicitudes <span class="badge bg-danger">1</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card single_course pb-3" style="width: 20rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob blue positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO
                    </span>
                                                    <div class="banner" style="background-image: url(../resources/banners/100/banner-20211222000250.jpg); ">
                                                    </div>
                                                    <span class="badge bg-info ">0/30 Disponibles</span>
                                                    <h5 class="name text-center pt-lg-3">Diseño Web</h5>
                                                    <h6 class="name text-center text-secondary">Grupo 1000</h6>
                                                    <div class="recent-message d-flex px-3">
                                                        <div class="avatar avatar-lg">
                                                            <img src="../resources/default-avatar.png">
                                                        </div>
                                                        <div class="name ms-4">
                                                            <h5 class="mb-1">Luisa Echeverria Calderon</h5>
                                                        </div>
                                                    </div>
                                                    <div class="py-3">
                                                        <div class="list-group list-group-horizontal mb-1 px-2 text-center" role="tablist">
                                                            <a class="list-group-item list-group-info list-group-item-action active" id="list1-4" data-bs-toggle="list" href="#list-1-4" role="tab">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list2-4" data-bs-toggle="list" href="#list-2-4" role="tab">
                                                                <i class="fas fa-caret-square-right"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list3-4" data-bs-toggle="list" href="#list-3-4" role="tab">
                                                                <i class="fas fa-check-double"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list4-4" data-bs-toggle="list" href="#list-4-4" role="tab">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                        </div>
                                                        <div class="tab-content text-justify">
                                                            <div class="tab-pane fade show active" id="list-1-4" role="tabpanel" aria-labelledby="list1-4">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del miércoles, 1 de diciembre de 2021<br> al viernes, 31 de diciembre de 2021</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-2-4" role="tabpanel" aria-labelledby="list2-4">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del sábado, 1 de enero de 2022<br> al lunes, 31 de enero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-3-4" role="tabpanel" aria-labelledby="list3-4">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del martes, 1 de febrero de 2022<br> al martes, 1 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-4-4" role="tabpanel" aria-labelledby="list4-4">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-tag"></i>Costo:<strong> $3050.00</strong>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-chalkboard"></i>Curso (13 Sesiones)<strong>Presencial</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-center">
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432462);">
                                                            <i class="fas fa-plus"></i> Mas info
                                                        </button>
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                            <i class="fas fa-clipboard-check"></i>Solicitudes <span class="badge bg-danger">2</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card single_course pb-3" style="width: 20rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob blue positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO
                    </span>
                                                    <div class="banner" style="background-image: url(../resources/banners/22/banner-20211217032305.jpg); ">
                                                    </div>
                                                    <span class="badge bg-info ">1/30 Disponibles</span>
                                                    <h5 class="name text-center pt-lg-3">Power Point Avanzado</h5>
                                                    <h6 class="name text-center text-secondary">Grupo 2711</h6>
                                                    <div class="recent-message d-flex px-3">
                                                        <div class="avatar avatar-lg">
                                                            <img src="../resources/default-avatar.png">
                                                        </div>
                                                        <div class="name ms-4">
                                                            <h5 class="mb-1">Felipe Calderon Hinojosa</h5>
                                                        </div>
                                                    </div>
                                                    <div class="py-3">
                                                        <div class="list-group list-group-horizontal mb-1 px-2 text-center" role="tablist">
                                                            <a class="list-group-item list-group-info list-group-item-action active" id="list1-5" data-bs-toggle="list" href="#list-1-5" role="tab">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list2-5" data-bs-toggle="list" href="#list-2-5" role="tab">
                                                                <i class="fas fa-caret-square-right"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list3-5" data-bs-toggle="list" href="#list-3-5" role="tab">
                                                                <i class="fas fa-check-double"></i>
                                                            </a>
                                                            <a class="list-group-item list-group-info list-group-item-action" id="list4-5" data-bs-toggle="list" href="#list-4-5" role="tab">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                        </div>
                                                        <div class="tab-content text-justify">
                                                            <div class="tab-pane fade show active" id="list-1-5" role="tabpanel" aria-labelledby="list1-5">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 27 de diciembre de 2021<br> al miércoles, 2 de febrero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-2-5" role="tabpanel" aria-labelledby="list2-5">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del sábado, 1 de enero de 2022<br> al lunes, 31 de enero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-3-5" role="tabpanel" aria-labelledby="list3-5">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del lunes, 31 de enero de 2022<br> al lunes, 31 de enero de 2022</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="list-4-5" role="tabpanel" aria-labelledby="list4-5">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-tag"></i>Costo:<strong> $2000.00</strong>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <i class="fas fa-chalkboard"></i>Diplomado (9 Sesiones)<strong>Presencial</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-center">
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432465);">
                                                            <i class="fas fa-plus"></i> Mas info
                                                        </button>
                                                        <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                            <i class="fas fa-clipboard-check"></i>Solicitudes <span class="badge bg-danger">1</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN CURSOS SOLICITADOS -->
                    </div>
                </div>
                <?php include 'includes/footer.php'; ?>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
        <?php include 'includes/js.php'; ?>
        <?php include 'includes/serivices-js.php'; ?>
        <?php include 'modals/modal-detalles-curso.php'; ?>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: false,
                },
                loop: true,
                loopFillGroupWithBlank: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                    1550:{
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                    2000:{
                        slidesPerView: 4,
                        spaceBetween: 50,
                    }
                },
            });
        </script>
    </body>
</html>