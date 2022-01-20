<?php $titulo = "Inicio - Alumno" ?>
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
                <h3>Bienvenido <?php echo $_SESSION['nombre_completo'] ?></h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Cursos abiertos</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Swiper -->
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                                            <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                                                <div class="blob blue positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO <span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                                            </span>
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-info ">0/20 Disponibles</span>
                                                        <h5 class="name text-center pt-lg-3">Word</h5>
                                                        <h6 class="name text-center text-secondary">Grupo 666</h6>
                                                        <div class="recent-message d-flex px-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="../resources/default-avatar.png">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <h5 class="mb-1">Maria Hernandez Romero</h5>
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
                                                                            <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 13 de diciembre de 2021<br> al jueves, 30 de diciembre de 2021</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-2-1" role="tabpanel" aria-labelledby="list2-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del viernes, 24 de diciembre de 2021<br> al miércoles, 30 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-3-1" role="tabpanel" aria-labelledby="list3-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del martes, 22 de marzo de 2022<br> al martes, 22 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-4-1" role="tabpanel" aria-labelledby="list4-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-tag"></i>Costo:<strong> $1000.00</strong>
                                                                        </li>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-chalkboard"></i>Diplomado (9 Sesiones)<strong>Mixto</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-center">
                                                            <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432455);">
                                                                <i class="fas fa-plus"></i> Mas info
                                                            </button>

                                                            <button class="btn btn-primary mr-3 me-1 mb-1" disabled="" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                                <i class="fas fa-clipboard-check"></i>Sin solicitudes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob blue positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO <span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                    </span>
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-info ">0/20 Disponibles</span>
                                                        <h5 class="name text-center pt-lg-3">Word</h5>
                                                        <h6 class="name text-center text-secondary">Grupo 666</h6>
                                                        <div class="recent-message d-flex px-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="../resources/default-avatar.png">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <h5 class="mb-1">Maria Hernandez Romero</h5>
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
                                                                            <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 13 de diciembre de 2021<br> al jueves, 30 de diciembre de 2021</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-2-1" role="tabpanel" aria-labelledby="list2-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del viernes, 24 de diciembre de 2021<br> al miércoles, 30 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-3-1" role="tabpanel" aria-labelledby="list3-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del martes, 22 de marzo de 2022<br> al martes, 22 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-4-1" role="tabpanel" aria-labelledby="list4-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-tag"></i>Costo:<strong> $1000.00</strong>
                                                                        </li>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-chalkboard"></i>Diplomado (9 Sesiones)<strong>Mixto</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-center">
                                                            <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432455);">
                                                                <i class="fas fa-plus"></i> Mas info
                                                            </button>

                                                            <button class="btn btn-primary mr-3 me-1 mb-1" disabled="" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                                <i class="fas fa-clipboard-check"></i>Sin solicitudes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob blue positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO <span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                    </span>
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-info ">0/20 Disponibles</span>
                                                        <h5 class="name text-center pt-lg-3">Word</h5>
                                                        <h6 class="name text-center text-secondary">Grupo 666</h6>
                                                        <div class="recent-message d-flex px-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="../resources/default-avatar.png">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <h5 class="mb-1">Maria Hernandez Romero</h5>
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
                                                                            <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 13 de diciembre de 2021<br> al jueves, 30 de diciembre de 2021</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-2-1" role="tabpanel" aria-labelledby="list2-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del viernes, 24 de diciembre de 2021<br> al miércoles, 30 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-3-1" role="tabpanel" aria-labelledby="list3-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del martes, 22 de marzo de 2022<br> al martes, 22 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-4-1" role="tabpanel" aria-labelledby="list4-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-tag"></i>Costo:<strong> $1000.00</strong>
                                                                        </li>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-chalkboard"></i>Diplomado (9 Sesiones)<strong>Mixto</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-center">
                                                            <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432455);">
                                                                <i class="fas fa-plus"></i> Mas info
                                                            </button>

                                                            <button class="btn btn-primary mr-3 me-1 mb-1" disabled="" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                                <i class="fas fa-clipboard-check"></i>Sin solicitudes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob blue positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO <span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                    </span>
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-info ">0/20 Disponibles</span>
                                                        <h5 class="name text-center pt-lg-3">Word</h5>
                                                        <h6 class="name text-center text-secondary">Grupo 666</h6>
                                                        <div class="recent-message d-flex px-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="../resources/default-avatar.png">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <h5 class="mb-1">Maria Hernandez Romero</h5>
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
                                                                            <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 13 de diciembre de 2021<br> al jueves, 30 de diciembre de 2021</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-2-1" role="tabpanel" aria-labelledby="list2-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del viernes, 24 de diciembre de 2021<br> al miércoles, 30 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-3-1" role="tabpanel" aria-labelledby="list3-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del martes, 22 de marzo de 2022<br> al martes, 22 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-4-1" role="tabpanel" aria-labelledby="list4-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-tag"></i>Costo:<strong> $1000.00</strong>
                                                                        </li>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-chalkboard"></i>Diplomado (9 Sesiones)<strong>Mixto</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-center">
                                                            <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432455);">
                                                                <i class="fas fa-plus"></i> Mas info
                                                            </button>

                                                            <button class="btn btn-primary mr-3 me-1 mb-1" disabled="" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                                <i class="fas fa-clipboard-check"></i>Sin solicitudes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob blue positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO <span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                    </span>
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-info ">0/20 Disponibles</span>
                                                        <h5 class="name text-center pt-lg-3">Word</h5>
                                                        <h6 class="name text-center text-secondary">Grupo 666</h6>
                                                        <div class="recent-message d-flex px-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="../resources/default-avatar.png">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <h5 class="mb-1">Maria Hernandez Romero</h5>
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
                                                                            <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del lunes, 13 de diciembre de 2021<br> al jueves, 30 de diciembre de 2021</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-2-1" role="tabpanel" aria-labelledby="list2-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del viernes, 24 de diciembre de 2021<br> al miércoles, 30 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-3-1" role="tabpanel" aria-labelledby="list3-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del martes, 22 de marzo de 2022<br> al martes, 22 de marzo de 2022</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="list-4-1" role="tabpanel" aria-labelledby="list4-1">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-tag"></i>Costo:<strong> $1000.00</strong>
                                                                        </li>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <i class="fas fa-chalkboard"></i>Diplomado (9 Sesiones)<strong>Mixto</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-center">
                                                            <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(765432455);">
                                                                <i class="fas fa-plus"></i> Mas info
                                                            </button>

                                                            <button class="btn btn-primary mr-3 me-1 mb-1" disabled="" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                                                <i class="fas fa-clipboard-check"></i>Sin solicitudes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Historial Cursos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-circle text-primary"></i>
                                                    <h5 class="mb-0 ms-3">En curso</h5>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">0</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-circle text-success"></i>
                                                    <h5 class="mb-0 ms-3">Terminados</h5>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">0</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-circle text-danger"></i>
                                                    <h5 class="mb-0 ms-3">Cancelados</h5>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">0</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Mis Cursos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped" id="" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>NOMBRE</th>
                                                    <th>PROFESOR</th>
                                                    <th>TIPO</th>
                                                    <th>TEMARIO</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr id_curso="1">
                                                    <td>002</td>
                                                    <td>Excel Avanzado</td>
                                                    <td>
                                                        <p class="mb-0 text-xs">Diplomado</p>
                                                    </td>
                                                    <td>
                                                        <a href="https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf " class="btn btn-primary" target="_blank">
                                                            <i class="fas fa-file-download"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ver-detalles-prop"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr id_curso="2">
                                                    <td>003</td>
                                                    <td>Excel Básico para contadores</td>
                                                    <td>
                                                        <p class="mb-0 text-xs">Curso</p>
                                                    </td>
                                                    <td>
                                                        <a href="https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf " class="btn btn-primary" target="_blank">
                                                            <i class="fas fa-file-download"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ver-detalles-prop"><i class="far fa-eye"></i></a>
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
                    <div class="col-12 col-lg-3">
                        <div class="card" id="cardSS">
                            <div class="card-body py-3 px-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Christian RCSG</h5>
                                        <h6 class="text-muted mb-0">Servicio Social</h6>
                                        <h6>ACTIVA</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Documentos Pendientes</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><i class="fas fa-file-upload"></i> Ficha de Pago</h5>
                                            <small><i class="fas fa-circle text-warning"></i></small>
                                        </div>
                                        <p class="mb-1">
                                            Inciciacion al computo 1
                                        </p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><i class="fas fa-file-upload"></i> Credencial Estudiante</h5>
                                            <small><i class="fas fa-circle text-warning"></i></small>
                                        </div>
                                        <p class="mb-1">
                                            Inciciacion al computo 1
                                        </p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><i class="fas fa-file-upload"></i> INE</h5>
                                            <small><i class="fas fa-circle text-danger"></i></small>
                                        </div>
                                        <p class="mb-1">
                                            Inciciacion al computo 1
                                        </p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><i class="fas fa-file-upload"></i> Constancia Nivel 1</h5>
                                            <small><i class="fas fa-circle text-warning"></i></small>
                                        </div>
                                        <p class="mb-1">
                                            Inciciacion al computo 1
                                        </p>
                                    </a>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-primary font-bold mt-3'>Ver todos</button>
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