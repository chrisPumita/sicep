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
                        <div class="row py-3">
                            <div class="col-12 col-lg-2 col-md-12 ">
                                <div class="col"><h4><i class="fas fa-filter"></i> Filtrar:</h4></div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-4">
                                <div class="btn-group submitter-group float-right">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">PROCEDENCIA: </div>
                                    </div>
                                    <select class="form-control procedencia-dropdown" id="list-procedencias">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-4">
                                <div class="btn-group submitter-group float-right">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">UNIVERSIDAD: </div>
                                    </div>
                                    <select class="form-control universidad-dropdown" id="list-universidad">
                                        <option value="">TODOS</option>
                                        <option value="APROBADO">APROBADOS</option>
                                        <option value="PENDIENTE">PENDIENTE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-4">
                                <div class="btn-group submitter-group float-right">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">SEXO: </div>
                                    </div>
                                    <select class="form-control sexo-dropdown">
                                        <option value="">TODOS</option>
                                        <option value="MUJER">MUJER</option>
                                        <option value="HOMBRE">HOMBRE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover table-striped" id="tblAlumnos" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>MATRICULA</th>
                                <th>UNIVERSIDAD</th>
                                <th>ORIGEN</th>
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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/datatable-lista-alumnos.js"></script>
<script src="./service/filter_alumnos_datatable.js"></script>
<script>
    $(document).ready(function() {
        cargaDatosAlumnosPendientesDataTable(0);
    });
</script>
</body>

</html>