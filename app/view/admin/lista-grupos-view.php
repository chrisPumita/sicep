<?php $titulo = "Grupos Activos" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../../../assets/css/asignacion.css">
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

        <div class="container-fluid">
            <div class="page-content">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Grupos Activos Actualmente</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Grupos Activos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h5 class="display-5 fw-bold">Grupos Activos</h5>
                        <p class="col-md-12 fs-4">Los grupos presentados con<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span> indican
                        que están listos para ser publicados pero no estan visibles al público. Los cursos mostrados con<span class="badge  position-relative">
                                <span class="blob yellow" style="position: absolute; top: 0px; left: 10px; right: 0; bottom: 0;"></span></span>
                            significa que requieren acciones.</p>
                        <a href="./solicitudes-inscripcion">
                            <button class="btn btn-primary btn-lg" type="button">Ver Solicitudes</button>
                        </a>
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filtrar Grupos
                                    </button>
                                    <div class="dropdown-menu" style="margin: 0px;">
                                        <a class="dropdown-item" href="#">En Curso</a>
                                        <a class="dropdown-item" href="#">Disponibles</a>
                                        <a class="dropdown-item" href="#">Ver todos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around flex-wrap py-3" id="containerCardsAsig">
                            <!-- AJAX RESPONSE DINAMIC-->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-vista-listas.php"?>
            <?php include "modals/modal-documentos-alumno.php"?>
            <?php include "modals/modal-vista-documento.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/grupos-actuales.js"></script>
<script src="./service/documentacion-gral.js"></script>
<script src="./service/listasInscripcion.js"></script>
<script src="./service/acounts-security.js"></script>
</body>

</html>