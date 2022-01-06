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
                            <h3>Mis Grupos</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mis Grupos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="page-content">
                        <!-- INICIO CURSOS ACTIVOS CARD RESUMEN -->
                        <section class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>ACTIVOS</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Swiper -->
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                                                        <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                                                            <div class="blob blue positionBadge"></div>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO <span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                                                        </span>
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-success ">INSCRIPCIÓN ACREDITADA</span>
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
                                                            <button class="btn btn-primary mr-3 me-1 mb-1">
                                                            <i class="fas fa-plus"></i> Mas info
                                                            </button>
                                                            <button class="btn btn-primary mr-3 me-1 mb-1">
                                                            <i class="fas fa-clipboard-check"></i>Ver inscripción
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
                        </section>
                        <!-- FIN CURSOS ACTIVOS CARD RESUMEN -->

                        <!-- INICIO CURSOS SOLICITADOS -->
                        <section class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>SOLICITADOS</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Swiper -->
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                                                        <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                                                            <div class="blob blue positionBadge"></div>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTIVO<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                                                        </span>
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-info ">5/20 Disponibles</span>
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
                                                            <button class="btn btn-primary mr-3 me-1 mb-1">
                                                            <i class="fas fa-clipboard-check"></i>Ver Inscripción
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
                        </section>
                        <!-- FIN CURSOS SOLICITADOS -->

                        <!-- INICIO CURSOS FINALIZADOS -->
                        <section class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>FINALIZADOS</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Swiper -->
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="card single_course pb-3" >
                                                        <!-- <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                                                            <div class="blob blue positionBadge"></div>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTIVOS<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>
                                                        </span> -->
                                                        <div class="banner" style="background-image: url(../resources/banners/20/banner-20211221234318.jpg); ">
                                                        </div>
                                                        <span class="badge bg-warning ">CONSTANCIA EN TRÁMITE</span>
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
                                                                            <strong><i class="fas fa-paper-plane"></i> Calificaciones<br> del lunes, 13 de diciembre de 2021<br> al jueves, 30 de diciembre de 2021</strong>
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
                                                            <button class="btn btn-primary mr-3 me-1 mb-1">
                                                            <i class="fas fa-plus"></i> Más info
                                                            </button>
                                                            <button class="btn btn-success mr-3 me-1 mb-1" disabled="">
                                                            <i class="fas fa-download"></i>Ver Constancia
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
                        </section>
                        <!-- FIN CURSOS FINALIZADOS -->
                    </div>
                </div>
                <?php include 'includes/footer.php'; ?>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
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