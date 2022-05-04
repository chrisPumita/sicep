<?php $titulo = "Grupos Activos" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../assets/css/asignacion.css">
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
                        <h3>Grupos Actuales</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./prof-historial-grupos">Historial</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Grupos Actuales</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10">
                                    Estos son los grupos abiertos actualmente. Si desea ver grupos anteriores, porfavor de clic
                                    al boton de "Ver Histórico". Para ver mas información del grupo abierto, así como descargar
                                    la lista de alumnos, de clic en "Más Detalles".
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <a href="./prof-historial-grupos">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                                        <i class="fas fa-history"></i> Ver Historial</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="container py-2">
                    <div class="row">
                        <div class="d-flex justify-content-around flex-wrap py-3" id="containerCardsAsig">
                            <!-- AJAX RESPONSE DINAMIC-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-ver-detalles-propuesta.php"?>
            <?php include "modals/modal-pdf-temario.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/profesor/mis-grupos-actuales.js"></script>
<script src="./service/modal-detalles-asig.js"></script>
<script src="./service/profesor/async-rest-p.js"></script>
</body>

</html>