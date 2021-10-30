<?php $titulo = "Lista de Alumnos Registrados" ?>
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
                        <h3>Lista de Alumnos Registrados</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Alumnos</li>
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
                                    Aqui se muestran solo las cuentas verificadas y activadas. Por lo que si el
                                    alumno no aparece, significa que no ha confirmado el correo. Puede confirmalo de forma manual.
                                    Una vez el alumno este verificado via correo electronico, puede activar procedencia
                                    con algun comprobante oficial.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-user-check"></i>  Revisar Cuentas</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-user-check"></i> Alumnos Verificados
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>MATRICULA</th>
                                <th>NOMBRE</th>
                                <th>PROCEDENCIA</th>
                                <th>UNIVERSIDAD</th>
                                <th>CARRERA</th>
                                <th>CORREO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                            <tr id_grupo="3">
                                <th scope="row">1</th>
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <p class="mb-0">Christian Pioquinto Hernández</p>
                                    </div>
                                </td>
                                <td>Comunidad FESC</td>
                                <td>UNAM</td>
                                <td>Informática</td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="far fa-id-card"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
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
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="far fa-id-card"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
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