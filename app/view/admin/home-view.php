<?php $titulo = "Inicio" ?>

<?php
    !$_SESSION['admin'] ? header('Location: ./home-teach'):"";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
    <!--swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
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
                        <h3>PANEL DE ADMINISTRADOR</h3>
                        <p class="text-subtitle text-muted">Administrar el sistema</p>
                    </div>
                </div>
            </div>
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
                                    <a href="./lista-cursos">
                                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                                            Ver cursos</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/grado4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">CURSOS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">16</h3>
                                            <h6 class="font-semibold text-success">Cursos activos</h6>
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
                                            <h6 class="font-semibold text-success">Registrados</h6>
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
                                            <h6 class="text-muted font-semibold">SOLCITUDES</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">1,000</h3>
                                            <h6 class="font-semibold text-warning">de Inscripción por revisar</h6>
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
                                            <h6 class="font-semibold text-warning">Por acreditar</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Registros de alumnos</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-profile-visit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="<?php echo $_SESSION['img_perfil'];?>" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold"><?php echo $_SESSION['nombre_completo'];?></h5>
                                    <h6 class="text-muted mb-0"><?php echo $_SESSION['cuenta'];?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Visita a la página</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-visitors-profile"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="card">
                    <div class="card-header">
                        Grupos Actuales
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
                                <div class="swiper-slide">Slide 6</div>
                                <div class="swiper-slide">Slide 7</div>
                                <div class="swiper-slide">Slide 8</div>
                                <div class="swiper-slide">Slide 9</div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>

            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Grupos Actuales
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>GRUPO</th>
                                <th>CURSO</th>
                                <th>PROFESOR</th>
                                <th>CUPO</th>
                                <th>INICIO</th>
                                <th>TIPO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                            <tr id_grupo="3">
                                <th scope="row">1</th>
                                <td>1001</td>
                                <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                <td>Christian Garduño Pioquinto</td>
                                <td>15</td>
                                <td>2021-06-30 00:00:00</td>
                                <td>En linea y Precencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">Activo</span></td>
                                <td>Christian Hdz Pioquinto</td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Documentación Pendiente
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tbl2">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Inscripcion</th>
                                <th>Documento</th>
                                <th>Alumno</th>
                                <th>Curso</th>
                                <th>Grupo</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                            <tr id_doc="1">
                                <th scope="row">1</th>
                                <td>123456789</td>
                                <td>Credencial <span class="badge bg-warning">Por revisar</span></td>
                                <td>Cesar Haziel Pineda Pacheco</td>
                                <td>Computo I</td>
                                <td>666</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-ban"></i></a>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-folder-open"></i> Documentación Completa</a>
                                </td>
                            </tr>
                            <tr id_doc="1">
                                <th scope="row">1</th>
                                <td>123456789</td>
                                <td>Credencial <span class="badge bg-warning">Por revisar</span></td>
                                <td>Cesar Haziel Pineda Pacheco</td>
                                <td>Computo I</td>
                                <td>666</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-ban"></i></a>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-folder-open"></i> Documentación Completa</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Profesores</h5>
                                    <p class="card-text text-muted">En este apartado se pueden realizar distintas acciones de gestion para las cuentas de profesores.</p>
                                    <a href="#" data-toggle="modal" data-target="#nuevoProfesor">
                                        <button type="button" class="btn btn-primary btn-sm">Crear cuenta</button>
                                    </a>
                                    <a href="./lista-profesores">
                                        <button type="button" class="btn btn-primary btn-sm">Gestión de cuentas</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Cuentas Administrativas</h5>
                                    <p class="card-text text-muted">Crear nueva cuenta administrativa para entrar al sistema de Administración.</p>
                                    <a href="./lista-cuentas">
                                        <button type="button" class="btn btn-primary btn-sm">Ir</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Servicio Social</h5>
                                    <p class="card-text text-muted">Cree o gestiones cuentas de alumno de servicio social.</p>
                                    <button type="button" class="btn btn-primary btn-sm">Crear cuenta</button>
                                    <a href="#" data-toggle="modal" data-target="#listaServicio">
                                        <button type="button" class="btn btn-primary btn-sm">Ver Alumnos</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Alumnos</h5>
                                    <p class="card-text text-muted">Buscar alumno para ver su situacion actual dentro del sistema de inscripción de cursos. Ingresar numero de cuenta registrado por el alumno.</p>
                                    <form class="form-inline position-relative my-2 d-flex">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar alumno" aria-label="Search">
                                        <button class="btn btn-search position-relative posicion-btn" type="submit"><img src="../assets/images/icons/buscar1.svg" width="24px"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Cursos Recientes</h4>
                                    <p>Estos sonnlos los ultimos cursos aprobados</p>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                         data-bs-ride="carouselfade">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                                                class="active"></li>
                                            <li data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="../assets/images/samples/1.png" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/images/samples/2.png" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Second slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/images/samples/3.png" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Third slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                           data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                           data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pagos Recientes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Ultimos pagos registrados en el sistema
                                        </p>
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1"><i class="fas fa-tag"></i> Inscripcion No 123456789 </h6>
                                                    <small>$30,000</small>
                                                </div>
                                                <small>2021-06-15 08:20:21</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1"><i class="fas fa-tag"></i> Inscripcion No 123456789 </h6>
                                                    <small>$30,000</small>
                                                </div>
                                                <small>2021-06-15 08:20:21</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1"><i class="fas fa-tag"></i> Inscripcion No 123456789 </h6>
                                                    <small>$30,000</small>
                                                </div>
                                                <small>2021-06-15 08:20:21</small>
                                            </a>
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
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<script src="../assets/vendors/apexcharts/apexcharts.js"></script>
<script src="../assets/js/pages/dashboard.js"></script>


<script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
<!-- INCLUDE SERIVES AJAX

<script src="./service/lista-alumnos.js"></script>-->

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
            clickable: true,
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
                slidesPerView: 4,
                spaceBetween: 50,
            },
            2000:{
                slidesPerView: 5,
                spaceBetween: 50,
            }
        },
    });
</script>
<!-- INCLUDE SERIVES AJAX -->
<script>
    // Simple Datatable
    let table1 = document.querySelector('#tbl1');
    let dataTable = new simpleDatatables.DataTable(table1);

    let table2 = document.querySelector('#tbl2');
    let dataTable2 = new simpleDatatables.DataTable(table2);
</script>
</body>

</html>