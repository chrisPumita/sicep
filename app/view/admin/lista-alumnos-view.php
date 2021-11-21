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
                                    <a href="./cuentas-alumnos">
                                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                                            <i class="fas fa-user-check"></i> Revisar Cuentas
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
                        <i class="fas fa-user-check"></i> Alumnos Verificados
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tblAlumnos" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>MATRICULA</th>
                                <th>PROCEDENCIA</th>
                                <th>CONTACTO</th>
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
<script src="./service/datatable-lista-alumnos.js"></script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>