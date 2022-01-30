<?php $titulo = "Acerca de" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "includes/head.php"; ?>
    <!--css-->
</head>
<body>
<div id="app">
    <div id="main" class="layout-horizontal">
        <?php include_once "includes/header.php"; ?>

        <div class="content-wrapper container">
            <div class="page-heading">
                <h3>Acerca de</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mis Cursos</li>
                    </ol>
                </nav>
            </div>
            <div class="page-content">
                
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Titulo de card contenido</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- CONTENIDO -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
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
<!-- Files JS -->

</body>
</html>