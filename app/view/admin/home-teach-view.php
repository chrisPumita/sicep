<?php $titulo = "Página principal" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/head.php"?>
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
                                <h3>Bienvenido a SICEP</h3>
                                <p class="text-subtitle text-muted">Dashboard Cuenta de Profesor</p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- INICIA SECCION ESTADISTICAS -->
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/grado4.svg);">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="text-muted font-semibold">CURSOS</h6>
                                                    <h3 class="font-extrabold mb-0 text-primary" id="countCursosProp">16</h3>
                                                    <h6 class="font-semibold text-success">Cursos propuestos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/comunidad4.svg);">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="text-muted font-semibold">MIS ALUMNOS</h6>
                                                    <h3 class="font-extrabold mb-0 text-primary" id="countAlumnos">18</h3>
                                                    <h6 class="font-semibold text-success">Inscritos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/inscripciones4.svg);">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="text-muted font-semibold">GRUPOS</h6>
                                                    <h3 class="font-extrabold mb-0 text-primary" id="countGrupos">5</h3>
                                                    <h6 class="font-semibold text-success">Activos</h6>
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
                                            Grupos Actuales
                                        </div>
                                        <div class="card-body">
                                            <!-- Swiper -->
                                            <div class="swiper mySwiper">
                                                <div class="swiper-wrapper" id="swiperCardsContainer">
                                                    <!--AJAX response-->
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination"></div>
                                            </div>
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
                            <!-- INICIO GRAFICA CIRCULAR -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Alumnos registrados</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-visitors-profile"></div>
                                </div>
                            </div>
                            <!-- FIN GRAFICA CIRCULAR -->
                        </div>
                    </section>
                    <!-- FIN SECCION ESTADISTICAS -->

                    <!-- INICIO CARD DE ACCIONES RAPIDAS -->
                    <section class="row">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Cursos</h5>
                                            <p class="card-text text-muted">En este apartado se pueden consultar las propuestas de cursos hechas y su estado.</p>
                                            <a href="./lista-propuestas">
                                            <button type="button" class="btn btn-primary btn-sm">Ver Propuestas</button>
                                            </a>
                                            <a href="./nuevo-curso">
                                            <button type="button" class="btn btn-primary btn-sm">Nueva propuesta</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Actas</h5>
                                            <p class="card-text text-muted">Acceso rápido para el apartado de actas en dondé se podrán ver los detalles y estado.</p>
                                            <a href="#">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#onConstruction">Ir</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Mis grupos</h5>
                                            <p class="card-text text-muted">Consulte sus grupos actuales y sus detalles, así como la lista de sus grupos anteriores</p>
                                            <a href="./lista-grupos-profesor">
                                            <button type="button" class="btn btn-primary btn-sm">Actuales</button>
                                            </a>
                                            <a href="./prof-historial-grupos">
                                            <button type="button" class="btn btn-primary btn-sm">Histórico</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FIN CARD DE ACCIONES RAPIDAS -->
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
        <script src="./service/profesor/dashboard.js"></script>
        <script src="./service/general/tipos.js"></script>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
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
                        slidesPerView: 2,
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