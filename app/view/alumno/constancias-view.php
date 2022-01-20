<?php $titulo = "Constancias" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "includes/head.php"; ?>
    <!--css-->
</head>
<body>
<div id="app">
    <div id="main" class="layout-horizontal">
        <?php include_once "includes/header.php"; ?>

        <div class="content-wrapper container">
            <div class="page-heading">
                <h3>Mis constancias</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="./mis-cursos">Mis Cursos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mis Constancias</li>
                        </ol>
                    </nav>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Lista de constancias liberadas</h4>
                                </div>
                                <div class="card-body px-1">
                                    <table class="table table-hover table-striped text-center" id="" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>CURSO</th>
                                            <th>GRUPO</th>
                                            <th>PROFESOR</th>
                                            <th>GENERACIÓN</th>
                                            <th>EXPEDICIÓN</th>
                                            <th>CALIF.</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                        </thead>

                                        <tbody id="">
                                        <tr id_grupo="1">
                                            <td>Introduccion a la informatica</td>
                                            <td>2654</td>
                                            <td>Vicente Fox Herrera</td>                                            
                                            <td>II-2022</td>
                                            <td>10/04/2020</td>
                                            <td>10</td>
                                            <!-- <td><span class="badge bg-success">ACTIVO</span></td> -->
                                            <!-- BOTON ACCIONES -->
                                            <td>
                                                <a href="#" class="btn btn-outline-primary"><i class="fas fa-file-download"></i></a>
                                            </td>
                                        </tr>
                                        <tr id_grupo="2">
                                            <td>Mineria de datos</td>
                                            <td>2654</td>
                                            <td>Vicente Fox Herrera</td>                                            
                                            <td>II-2022</td>
                                            <td>10/04/2020</td>
                                            <td>10</td>
                                            <!-- BOTON ACCIONES -->
                                            <td>
                                                <a href="#" class="btn btn-outline-primary"><i class="fas fa-file-download"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Mis Cursos</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><i class="fas fa-chalkboard"></i> Iniciacion al computo 1</h5>
                                            <small><i class="fas fa-circle text-success"></i></small>
                                        </div>
                                        <p class="mb-1">
                                            En Curso
                                        </p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><i class="fas fa-chalkboard"></i> Inciciacion al computo 1</h5>
                                            <small><i class="fas fa-circle text-success"></i></small>
                                        </div>
                                        <p class="mb-1">
                                            En Curso
                                        </p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><i class="fas fa-chalkboard"></i> Excel avanzado</h5>
                                            <small><i class="fas fa-circle text-danger"></i></small>
                                        </div>
                                        <p class="mb-1">
                                            Terminado
                                        </p>
                                    </a>                                    
                                </div>
                                <!-- <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-primary font-bold mt-3'>Ver todos</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/js.php'; ?>
<?php include 'includes/serivices-js.php'; ?>
<!-- Files JS -->

</body>
</html>