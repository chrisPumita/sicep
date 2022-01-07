<?php $titulo = "Detalles grupo" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "includes/head.php"; ?>
        <!--swiper-->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    </head>
    <body>
        <div id="app">
            <div id="main" class="layout-horizontal">
                <?php include_once "includes/header.php"; ?>
                <div class="content-wrapper container">
                    <div class="page-heading">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Iniciación al cómputo I - 3456</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="./mis-cursos">Mis cursos</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Iniciación al cómputo I</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="page-content">
                        <section class="section">
                            <div class="card">
                                <div class="card-body py-4 px-5 d-flex">
                                    <div class="col-sm-8 d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="../assets/images/start-sesion.png" alt="Face 1">
                                        </div>
                                        <div class="ms-3 name">
                                            <!-- <h4 class="font-bold">Inscribirse</h4> -->
                                            <h6 class="text-muted mb-0">Una vez termines tu inscripción un administrador procederá a su validación.</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 m-auto">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#">Inscribirse</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- seccion detalles y banner img -->
                        <section class="section">
                            <div class="row gutters-sm">
                                <!-- banner detalles -->
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="img d-block w-100" style="background-image: url(https://cambiodigital-ol.com/wp-content/uploads/2019/06/excel_logo2.jpg); height: 300px; "></div>
                                            <span class="badge bg-info ">5/20 Disponibles</span>
                                            <div class="card-body pt-3">

                                                <div class="card-content">
                                                    <div class="row py-1 m-2">
                                                        <h5 class="text-secondary">General:</h5>
                                                        <div class="list-group m-2">
                                                            <!-- PARTE ACORDEON 1 -->
                                                            <div class="list-group-item list-group-item-action" id="heading1" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseOne" role="button">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <div class="d-flex px-2 py-1 mb-0">
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-xs">Descripción</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapse1" class="collapse pt-1" aria-labelledby="heading1" data-parent="#cardAccordion">
                                                                <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, culpa. Voluptatem libero eligendi sapiente sunt reiciendis explicabo mollitia facilis aspernatur, consectetur incidunt debitis, officia delectus repudiandae natus sequi veniam iste.</p>
                                                            </div>
                                                            <!-- PARTE ACORDEON 2 -->
                                                            <div class="list-group-item list-group-item-action" id="heading2" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseOne" role="button">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <div class="d-flex px-2 py-1 mb-0">
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-xs">Objetivo</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapse2" class="collapse pt-1" aria-labelledby="heading2" data-parent="#cardAccordion">
                                                                <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, culpa. Voluptatem libero eligendi sapiente sunt reiciendis</p>
                                                            </div>
                                                            <!-- PARTE ACORDEON 3 -->
                                                            <div class="list-group-item list-group-item-action" id="heading3" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseOne" role="button">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <div class="d-flex px-3 py-1 mb-0">
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-xs">Antecedentes</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapse3" class="collapse pt-1" aria-labelledby="heading3" data-parent="#cardAccordion">
                                                                <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, culpa. Voluptatem libero eligendi sapiente sunt reiciendis</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row py-1 m-2">
                                                        <h5 class="text-secondary">Detalles:</h5>
                                                        <div class="row py-2">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Dirigido a</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">Egresados</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Modalidad</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">Presencial</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Grupo</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">54564</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Sesiones</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">15</div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin banner detalles -->

                                <div class="col-md-5 mb-3">
                                    <!-- profesor -->
                                    <div class="col-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body py-4 px-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xl">
                                                        <img src="../assets/images/start-sesion.png" alt="Face 1">
                                                    </div>
                                                    <div class="ms-3 name">
                                                        <h4 class="font-bold">Predro Rene Hernandez Suarez</h4>
                                                        <h6 class="text-muted mb-0">PROFESOR</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- costo -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Costo del curso</h4>
                                            <h2 class="mb-0 text-primary">$1,600.00</h2>
                                            <h7 class="text-primary text-muted">Con 70% de descuento por ser Comunidad FESC</h7>
                                        </div>
                                    </div>
                                    <!-- fechas importantes -->
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body pt-3">
                                                <h4 class="card-title">Fechas importantes</h4>
                                                <div class="row py-2">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Inscripciones</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary text-bold">Del 20 de Junio, 2020 al 12 de Enero, 2021</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Entrega de documentos</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary text-bold">Del 20 de Junio, 2020 al 12 de Enero, 2021</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Clases</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-primary text-bold">Del 20 de Junio, 2020 al 12 de Enero, 2021</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Calificaciones</h6>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Temario del curso</h4>
                                            <button type="button" class="btn btn-primary btn-block me-1 mb-1" data-bs-toggle="modal" data-bs-target="#">Descargar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- fin de seccion de detalles -->

                        <!-- seccion de temario -->
                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <!-- boton que da problemas en responsive -->
                                        <div class="col-sm-12 col-md-6">
                                            <h5 class="text-secondary"><i class="fas fa-bookmark"></i> Temario General</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <span class="position-absolute  mx-3 end-0">
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewTema">
                                            <i class="fas fa-plus"></i> Agregar</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>INDICE</th>
                                                <th>TEMA</th>
                                                <th>DESCRIPCIÓN</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id_tema="2">
                                                <td>1.1</td>
                                                <td>Nombre de tema 2</td>
                                                <td>Resumen de tema2</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addNewTema"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger deleteTema"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr id_tema="4">
                                                <td>1.2</td>
                                                <td>Nombre Actualizado de Tema</td>
                                                <td>Resumen Actualizado de Tema</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addNewTema"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger deleteTema"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr id_tema="1">
                                                <td>2.1</td>
                                                <td>Nombre de tema</td>
                                                <td>Resumen de tema</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addNewTema"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger deleteTema"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr id_tema="5">
                                                <td>2.2</td>
                                                <td>Nombre de tema 256</td>
                                                <td>Resumen</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addNewTema"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger deleteTema"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <!-- fin seccion de temario -->
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
    </body>
</html>