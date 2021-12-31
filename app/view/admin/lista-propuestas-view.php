<?php $titulo = "Cursos Propuestos" ?>
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
                        <h3>Curso Propuestos</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Propuestas</li>
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
                                <div class="col-sm-12">
                                    Aqui puede encontrar todos los cursos que han sido propuestos. Una vez aprobado el curso no se podrá editar el curso.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- INICIO TABLA DE CURSOS -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Lista de Cursos Propuestos
                    </div>
                    <div class="card-body">
                        <div class="row py-3">
                            <div class="col-10">
                                <div class="col"><h4><i class="fas fa-filter"></i> Filtrar:</h4></div>
                            </div>
                            <div class="col-2">
                                <div class="btn-group submitter-group float-right">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">ESTATUS: </div>
                                    </div>
                                    <select class="form-control status-dropdown">
                                        <option value="">TODOS</option>
                                        <option value="APROBADO">APROBADOS</option>
                                        <option value="PENDIENTE">PENDIENTE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--Table prototype to use | tablas con  paginador-->
                        <table class="table table-hover table-striped" id="" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>CLAVE</th>
                                    <th>NOMBRE</th>
                                    <th>TIPO</th>
                                    <th>TEMARIO</th>
                                    <th>APROBACIÓN</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id_curso="1">
                                    <td>002</td>
                                    <td>Excel Avanzado</td>
                                    <td>
                                        <p class="mb-0 text-xs">Diplomado</p>
                                    </td>
                                    <td>
                                        <a href="https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf " class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i>Descargar</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">PENDIENTE</span>
                                    </td>
                                    <td>
                                        <a href="./editar-detalles-propuesta" class="btn btn-primary" ><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ver-detalles-prop"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr id_curso="2">
                                    <td>003</td>
                                    <td>Excel Básico para contadores</td>
                                    <td>
                                        <p class="mb-0 text-xs">Curso</p>
                                    </td>
                                    <td>
                                        <a href="https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf " class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i>Descargar</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">APROBADO</span>
                                    </td>
                                    <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ver-detalles-prop"><i class="far fa-eye"></i></a></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </section>
            <!-- FIN TABLA DE CURSOS -->
        </div>
        <footer class="text-center text-white ">
            <?php include "modals/modal-ver-detalles-propuesta.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!--Only datatable use library -->

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<!-- Agregar solo cuando exista una tabla para mostrar-->
<!--CARGAR SERVICIOS GENERALES-->
<script src="./service/general/tipos.js"></script>
<script src="./service/datatable-lista-cursos.js"></script>
<script src="./service/general/tools.js"></script>
</body>

</html>