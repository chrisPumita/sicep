<?php $titulo = "Detalles del curso" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
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
                        <h3>Detalles del curso</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Aspel NOI</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- seccion callout -->
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
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Crear grupo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion cards estadiscticas -->
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/grado4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">GRUPOS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">16</h3>
                                            <h6 class="font-semibold text-success">Creados</h6>
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
                                            <h6 class="font-semibold text-success">Inscritos</h6>
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
                                            <h6 class="text-muted font-semibold">SOLICITUDES</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">1,000</h3>
                                            <h6 class="font-semibold text-success">Creadas</h6>
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
                                            <h6 class="font-semibold text-success">Entregadas</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="../assets/images/start-sesion.png" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Christian Pioquinto</h5>
                                    <h6 class="text-muted mb-0">AUTOR</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion detalles -->
            <section class="section">
                <div class="row gutters-sm">
                    <!-- detalles del curso-->
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row m-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Objetivo</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, doloribus. Magnam ipsam corrupti, animi expedita consequuntur laborum?
                                    </div>
                                    <hr>
                                </div>
                                
                                <div class="row m-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Antecedentes</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Conocimientos avanzados de excel, programacion lineal y aspectos contables básicos.
                                    </div>
                                </div>

                                <div class="list-group">
                                    <!-- PARTE ACORDEON 1 -->
                                    <div class="list-group-item list-group-item-action" id="heading1" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false"
                                    aria-controls="collapseOne" role="button">
                                        <div class="d-flex w-100 justify-content-between">
                                            <div class="d-flex px-2 py-1 mb-0">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs">Detalles</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapse1" class="collapse pt-1" aria-labelledby="heading1"
                                        data-parent="#cardAccordion">
                                        <div class="row py-1 m-2">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Dirigido a</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Alumnos y público en general
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Tipo</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Diplomado con opcion para titulación
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Código</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    003
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Sesiones</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    23
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Registrado desde</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    19 - 05 - 2021
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>

                                    <!-- PARTE ACORDEON 2 -->
                                    <div class="list-group-item list-group-item-action" id="heading2" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false"
                                        aria-controls="collapseOne" role="button">
                                        <div class="d-flex w-100 justify-content-between">
                                            <div class="d-flex px-2 py-1 mb-0">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs">PDF del Temario</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapse2" class="collapse pt-1" aria-labelledby="heading2"
                                        data-parent="#cardAccordion">
                                        <div class="row">
                                            <div class="col-md-4" id="filePDF"><a href="www.link.com" download="" target="_blank" class="btn btn-primary btn-block"> Descargar</a></div>
                                            <div class="col-md-4">
                                                <a href="#" class="btn btn-primary btn-block"><i class="icon ion-md-cloud"></i> Subir</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalPDF"><i class="icon ion-md-eye"></i> Ver</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner -->
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4" alt="Admin" width="200">
                                    <div class="mt-3">
                                        <p class="text-secondary mb-1"><strong>Imagen del banner</strong></p>
                                        <p class="text-muted font-size-sm">Debe tener una resolución de 600px por 300px</p>
                                        <button class="btn btn-success"><i class="fab fa-whatsapp"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ADMIN ACCOUNT ENABLE
                <div class="section">
                    <div class="card">
                        <div class="card-header img_bg_cards" style="background-image: url(../assets/images/icons/group3.svg);">
                            <div class="col-12" >
                                <h4 class="card-title "><b>CUENTA DE ADMINISTRADOR</b></h4>
                            </div>
                            <div class="col" >
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <p class="card-text text-muted small ">
                                    <div class="spinner-grow bg-success" role="status" style="width: 1rem; height: 1rem"></div>
                                    Este profesor tiene cuenta de adminsitrador <span class="vl ml-1 mr-2 "></span>
                                    desde el <span class="font-weight-bold"> 15 Octubre de 2021</span></p>
                                </h6>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action">Cargo: Coordinador</button>
                                        <button type="button" class="list-group-item list-group-item-action">Nivel de permiso: Bajos</button>
                                        <button type="button" class="list-group-item list-group-item-action">Clave:
                                            4a7d1ed414474e4033ac29ccb8653d9b</button>
                                        <button type="button" class="list-group-item list-group-item-action">Porta
                                            ac
                                            consectetur
                                            ac</button>
                                        <button type="button" class="list-group-item list-group-item-action">Vestibulum at
                                            eros</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class=" col-md-auto ">
                                    <a href="#" class="btn btn-primary btn-black">
                                        <i class="fas fa-edit"></i>
                                        <small>EDITAR</small></a>
                                </div>
                                <div class=" col-md-auto ">
                                    <a href="#" class="btn btn-danger btn-black">
                                        <i class="fas fa-ban"></i>
                                        <small>Deshabilitar</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ADMIN ACCOUNT ENABLE-->
            </section>
            <!-- fin de seccion de detalles -->

            <!-- seccion de temario -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Temario general del curso
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tblTemario">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>INDICE</th>
                                <th>TEMA</th>
                                <th>DESCRIPCIÓN</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="temas">
                            <tr id_grupo="3">
                                <th scope="row">1</th>
                                <td>1.0</td>
                                <td>Induccion al computo</td>
                                <td>---------------------------------</td>
                                <!-- <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                    </div>
                                </td> -->
                                <!-- BOTON ACCIONES -->
                                <td>
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
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                    </div>
                                </td>
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

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX
    <script src="./service/lista-alumnos.js"></script>
-- INCLUDE SERIVES AJAX -->
<!-- Agregar solo cuando exista una tabla para mostrar-->
<script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#tbl1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>