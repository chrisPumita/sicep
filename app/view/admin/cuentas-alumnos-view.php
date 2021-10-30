<?php $titulo = "Revisar Cuenta de Alumnos" ?>
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
                        <h3>Revisa cuentas de alumnos</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-alumnos">Alumnos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Revisar Cuentas</li>
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
                                    Nuevas Cuentas creadadas, sirvase de revisar las cuentas y verificarlas para revisar su inscripción,
                                    procedencia y demás información proporcionada por el alumno. Esto es necesario para que los
                                    descuentos puedan ser aplicados de forma automática.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <a href="./lista-alumnos">
                                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                                            <i class="fas fa-check-circle"></i> Ver Alumnos
                                        </button>
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
                        <i class="fas fa-user-check"></i> Alumnos Por Verificar
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>MATRICULA</th>
                                <th>NOMBRE</th>
                                <th>PROCEDENCIA</th>
                                <th>CONTACTO</th>
                                <th>REGISTRO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">

                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="3">
                                <td>314265985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">
                                            <span class="avatar-status bg-danger"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">Christian René Pioquinto Hernández</p>
                                            <p class="text-xs text-primary mb-0">HOMBRE</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">Comunidad FESC</p>
                                        <p class="text-xs text-primary mb-0">UNAM</p>
                                        <p class="text-xs text-primary mb-0">Informática</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-xs">christian.fploppy@gmail.com</p>
                                        <p class="text-xs text-primary mb-0">1666054512</p>
                                    </div>
                                </td>
                                <td>
                                    15/03/2020 11:45:25 am
                                </td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
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