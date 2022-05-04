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
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>

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
                                    Bienvenido al apartado administrativo de SICEP, en dondé podrá encontrar toda la
                                    información referente a las inscripciones a los cursos, así como crear y publicar grupos para la
                                    inscripción de los alumnos.
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
                                            <h3 class="font-extrabold mb-0 text-primary" id="panelCursosCount">0</h3>
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
                                            <h3 class="font-extrabold mb-0 text-primary" id="panelAlumnosCount">0</h3>
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
                                            <h3 class="font-extrabold mb-0 text-primary" id="panelSolCount">0</h3>
                                            <h6 class="font-semibold text-warning">por revisar</h6>
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
                                            <h3 class="font-extrabold mb-0 text-primary" id="panelConstanciasCount">0</h3>
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
                                    <h4>Solicitudes de Inscripción Recibidas</h4>
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
                            <h4>Alumnos registrados</h4>
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
                            <div class="swiper-wrapper" id="swiperCardsContainer">
                                <!--AJAX response-->
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
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
                                    <p class="card-text text-muted">Administrar las cuentas de los profesores. Altas y bajas de profesores.</p>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNewProfesor">Crear cuenta</button>
                                    <a href="./lista-profesores">
                                        <button type="button" class="btn btn-primary btn-sm">Cuentas Profesores</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Cuentas Administrativas</h5>
                                    <p class="card-text text-muted">Gestionar las cuentas de Administración del sistema.</p>
                                    <a href="./lista-cuentas">
                                        <button type="button" class="btn btn-primary btn-sm">Gestionar Cuentas</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Alumnos</h5>
                                    <p class="card-text text-muted">Verifique las cuentas de los alumnos registrados y valide su procedencia.</p>
                                    <a href="./cuentas-alumnos">
                                        <button type="button" class="btn btn-primary btn-sm">Revisar cuentas</button>
                                    </a>
                                    <a href="./lista-alumnos" data-toggle="modal" data-target="#listaServicio">
                                        <button type="button" class="btn btn-primary btn-sm">Ver Alumnos</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Buscar Alumno</h5>
                                    <p class="card-text text-muted">Escriba el No. de cuenta/Matricula.</p>
                                    <form class="form-inline position-relative my-2 d-flex">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Escriba No Cta / Matricula" aria-label="Search">
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
                                    <p>Cursos diponibles para abrir grupos nuevos al semestre actual.</p>
                                </div>
                                <div class="card-body" id="caroucel-courses-dashboard">

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Pagos Recientes</h4>
                                        <p>
                                            Últimos pagos registrados en el sistema
                                        </p>
                                        <div class="list-group" id="listaUltimosPagos">
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
<script src="./service/general/tipos.js"></script>
<script src="./service/dashboard.js"></script>

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

</body>

</html>