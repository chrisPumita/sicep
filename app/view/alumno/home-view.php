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
                        <div class="card card-ss" id="cardSS" role="button">
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