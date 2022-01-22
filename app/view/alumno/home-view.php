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
                                    <div class="card-header" >
                                        <h4><span id="countOferta"></span> Cursos abiertos </h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Swiper -->
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper" id="swiperCardsContainer">
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                        <!--END Swiper -->
                                        <div class="" id="alertOferta"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Mis Cursos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive" id="containerMisCursos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <?php if($_SESSION['serv']){ ?>
                        <div class="card card-ss" id="cardSS" role="button">
                            <div class="card-body py-3 px-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="<?php echo $_SESSION['perfil_image']; ?>" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">SERVICIO SOCIAL</h5>
                                        <h6 class="text-muted mb-0">Servicio Social</h6>
                                        <h6>ACTIVA</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Documentos Pendientes</h4>
                            </div>
                            <div class="card-body">
                                <div class="row" id="containerDocsPend">

                                </div>
                                <div class="row d-flex justify-content-center  py-3 px-3">
                                    <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modalInscripcion">
                                        <i class="fas fa-plus"></i>Ver todo
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Solicitudes Enviadas</h4>
                            </div>
                            <div class="card-body">
                                <div class="row" id="containerSolEnviadas">
                                    <div class="list-group small">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><i class="fas fa-file-upload"></i> ACTA</h6>
                                                <small><i class="fas fa-circle text-danger"></i></small>
                                            </div>
                                            <p class="mb-1">
                                                Inteligencia Artificial (1000)
                                            </p>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><i class="fas fa-file-upload"></i> CERTIFICADO 1 NVL</h6>
                                                <small><i class="fas fa-circle text-danger"></i></small>
                                            </div>
                                            <p class="mb-1">
                                                Inteligencia Artificial (1000)
                                            </p>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><i class="fas fa-file-upload"></i> CERTIFICADO 2 NVL</h6>
                                                <small><i class="fas fa-circle text-danger"></i></small>
                                            </div>
                                            <p class="mb-1">
                                                Inteligencia Artificial (1000)
                                            </p>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><i class="fas fa-file-upload"></i> CREDENCIAL</h6>
                                                <small><i class="fas fa-circle text-danger"></i></small>
                                            </div>
                                            <p class="mb-1">
                                                Inteligencia Artificial (1000)
                                            </p>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><i class="fas fa-file-upload"></i> CREDENCIAL</h6>
                                                <small><i class="fas fa-circle text-danger"></i></small>
                                            </div>
                                            <p class="mb-1">
                                                Excel Avanzado (1603)
                                            </p>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><i class="fas fa-file-upload"></i> CURP</h6>
                                                <small><i class="fas fa-circle text-danger"></i></small>
                                            </div>
                                            <p class="mb-1">
                                                Inteligencia Artificial (1000)
                                            </p>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><i class="fas fa-file-upload"></i> FICHA DE PAGO</h6>
                                                <small><i class="fas fa-circle text-danger"></i></small>
                                            </div>
                                            <p class="mb-1">
                                                Inteligencia Artificial (1000)
                                            </p>
                                        </a>
                                    </div></div>
                                <div class="row d-flex justify-content-center  py-3 px-3">
                                    <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modalInscripcion">
                                        <i class="fas fa-plus"></i>Ver todo
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--
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
                        -->

                    </div>

                </section>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'modals/modal-inscribir-alumno.php'; ?>
        <?php include 'modals/modal-pdf-temario.php'; ?>
    </div>
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/js.php'; ?>
<?php include 'includes/serivices-js.php'; ?>
<script src="./service/alumnos/home.js"></script>
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
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 10,
            }
        },
    });
</script>
</body>
</html>