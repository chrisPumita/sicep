<?php $titulo = "Lista de Profesores" ?>
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
                        <h3>Lista de Profesores</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profesores</li>
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
                                    Aqui se encuenran todos los profesores registrados en el sistema. En este apartado
                                    puede crear cuentas de profesores y/o autorizar las cuentas generadas a partir del formulario.
                                    Revise la información y asegurese de verificar bien los datos de las solicitudes.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-succes">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-1">
                                    <img src="../assets/images/icons/mail4.svg" width="90px">
                                </div>
                                <div class="col-lg-5">
                                    <h4 class="mt-3">Envíar invitación de registro</h4>
                                    <p>Envíe la invitación al profesor, para que éste pueda registrarse en el sistema.</p>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="ejemplo@dominio.com" aria-label="Correo">
                                </div>
                                <div class="col-lg-2">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Lista de Profesores
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tblProfesores">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NO</th>
                                <th>NOMBRE</th>
                                <th>DEPARTAMENTO</th>
                                <th>TELEFONO</th>
                                <th>EMAIL</th>
                                <th>REGISTRO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tblProfesores">
                            
                            <!-- AJAX RESPONSE LP-->
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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<script src="./service/lista-profesores.js"></script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>