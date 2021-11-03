<?php $titulo = "Historial de Grupos Creados" ?>
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
                        <h3>Historial de Grupos</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="#">Pagina</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SubPagina</li>
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
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos eveniet
                                    perspiciatis sequi voluptatem. Alias aliquid, assumenda beatae hic maxime
                                    necessitatibus non possimus tempora. Accusamus aperiam at corporis harum provident.
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

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Grupos Actuales
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos eveniet
                                perspiciatis sequi voluptatem. Alias aliquid, assumenda beatae hic maxime
                                necessitatibus non possimus tempora. Accusamus aperiam at corporis harum provident.
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown">
                                    <div class="row">
                                        <div class="col-12 col-md-4 order-md-1">
                                            <div class="form-group mx-3">
                                                <label for="listaProfesores">Filtrar por </label>
                                                <select id="listaProfesores" class="dataTable-selector form-select">
                                                    <option value="5">Todos los Profesores</option>
                                                    <option value="10">Profesor Name 1</option>
                                                    <option value="10">Profesor Name 2</option>
                                                    <option value="10">Profesor Name 3</option>
                                                    <option value="10">Profesor Name 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 order-md-1">
                                            <div class="form-group mx-3">
                                                <label>Filtrar por curso</label>
                                                <select class="dataTable-selector form-select">
                                                    <option value="5">Curso 1</option>
                                                    <option value="10">Curso 2</option>
                                                    <option value="15">Curso 3</option>
                                                    <option value="20">Curso 4</option>
                                                    <option value="25">Curso 5</option>
                                                    <option value="25">Curso 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 order-md-1">
                                            <div class="form-group mx-3">
                                                <label>Periodo</label>
                                                <select class="dataTable-selector form-select">
                                                    <option value="5">2019</option>
                                                    <option value="10">2020</option>
                                                    <option value="15">2021</option>
                                                    <option value="20">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataTable-search">
                                    <div class="row">
                                        <div class="col-12 col-md-12 order-md-1">
                                            <label>Ordenar por</label>
                                            <select class="dataTable-selector form-select">
                                                <option value="5">Nombre A-Z</option>
                                                <option value="10">Nombre Z-A</option>
                                                <option value="15">Primera-Ultima Generacion</option>
                                                <option value="20">Ultima-Primera generacion</option>
                                                <option value="25">Tipo A-Z</option>
                                                <option value="25">Tipo Z-A</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>GRUPO</th>
                                <th>CURSO</th>
                                <th>PROFESOR</th>
                                <th>CUPO</th>
                                <th>INICIO</th>
                                <th>TIPO</th>
                                <th>ESTATUS</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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
                                <tr id_grupo="3">
                                    <th scope="row">1</th>
                                    <td>1001</td>
                                    <td>Induccion al computo <span class="badge bg-warning">Inactivo</span></td>
                                    <td>Christian Garduño Pioquinto</td>
                                    <td>15</td>
                                    <td>2021-06-30 00:00:00</td>
                                    <td>En linea y Precencial</td>
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