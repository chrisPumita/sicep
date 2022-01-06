<?php $titulo = "Documentos recibidas" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
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
                        <h3>Documentos Por Revisar <span class="badge bg-danger" id="contadorDocs">0</span></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Documentos por Revisar</li>
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
                                    Una lista general de los documentos a revisar, puede revisar uno a uno e ir aceptando o descarganto.
                                    Tenga en cuenta que al completar el 100% de revision de cada inscripcion, puede confirmar
                                    la inscripcion y el alumno quedara automaticamente inscrito.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                       Documentos por Revisar
                    </div>
                    <div class="card-body">
                        <div class="list-group" id="containerFichas">
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <footer class="text-center text-white ">

            <?php include "modals/modal-pdf-temario.php"?>
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX  -->
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/revisa-socumentos.js"></script>
</body>

</html>