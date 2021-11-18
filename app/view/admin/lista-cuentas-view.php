<?php $titulo = "Cuentas Administrativas" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <!--Only datatable use-->
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
                        <h3>Cuentas de Administrador</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-profesores">Profesores</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cuentas Administrativas</li>
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
                                    Las cuentas adminstrativas le permiten llevar el control de la plataforma. Cada acceso es
                                    independiente y personal. Si desea asignar una cuenta nueva a un profesor. Porfavor seleccionelo
                                    y el siguiente paso es asignar el nivel.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                        <!-- Button trigger for primary themes modal -->
                                        <button type="button" class="btn btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#primary">
                                            Nueva Cuenta
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-user-check"></i> Administradores del sistema
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tblProfesores" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>NO CTA</th>
                                <th>NIVEL</th>
                                <th>DEPTO</th>
                                <th>CONTACTO</th>
                                <th>REGISTRO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </section>

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-confirma-admin.php"?>
            <?php include "modals/modal-nuevo-admin.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<!-- Agregar solo cuando exista una tabla para mostrar-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/datatable-lista-admins.js"></script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>