<?php
if (!isset($_POST['id'])){
    header("Location: ./home");
}
else{
    $id = $_POST['id'];
    echo '<script> window.ID_FICHA = '.$id.'; </script>';
}
$titulo = "Inicio - Alumno"; ?>
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
            </div>
            <div class="page-content">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Detalles de la Inscripción</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./mis-cursos">Mis Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ficha de Inscripción <?php echo $id  ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- inicia seccion detalles alumno -->
            <section class="section">
                <div class="row">
                    <div class="col-sm-10 d-flex align-items-center">
                        <h4  id="tiitleCurso"></h4>
                    </div>
                    <div class="col-sm-2 align-items-center">
                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                            <i class="fas fa-print"></i> Imprimir</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body py-4 px-2">
                                <div class="d-flex">
                                    <div class="m-auto">
                                        <img src="../assets/images/icons/ok.svg" width="80" alt="svg ok">
                                    </div>
                                    <div class="col-8 m-auto">
                                        <h5>Inscripción acreditada</h5>
                                        <h6>El 19 de Enero del 2021</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <span class=" position-absolute bottom-0 end-0 estatusAvatar" id="fichaValidaAlumno"><i class="fas text-warning fa-exclamation-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Cuenta No Verificada"></i></span>
                                        <img id="avatarImage" src="../resources/default-avatar.png" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h4 class="font-bold" id="fichaName">Coyin Canallin Cuyo</h4>
                                        <h5 class="text-muted mb-0" id="fichaCarrera">Animal</h5>
                                        <h6 class="text-muted mb-0" id="fichaProcedencia">Comunidad FESC</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                        <div class="card">
                            <div class="card-body py-2">
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Datos personales:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Sexo</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaSexo">Hombre</div>
                                    </div>
                                    <hr><div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Teléfono</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaTelefono">45641564165</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Correo electrónico</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaCorreo">cuyo@gmail.com</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Localidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaLocalidad">Ixtlahuacán, Colima</div>
                                    </div>
                                </div>
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Información académica:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Carrera</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="carrera"></div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Universidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaNameUni"></div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Matrícula</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaMatricula"></div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Cuenta</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaAltaCuenta"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- INICIO INFO CURSO BANNER -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" id="bannerCurso" src="../resources/banners/2147483647/banner-20220104210055.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <div class="row py-2">
                                        <h5 class="text-secondary">Información del curso:</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Curso</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaNameCurso"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Grupo</h6>
                                        </div>
                                        <div class="col-sm-3 text-primary text-bold" id="fichaGrupo"></div>
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Semestre</h6>
                                        </div>
                                        <div class="col-sm-3 text-primary text-bold" id="fichasemestre"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Generacion</h6>
                                        </div>
                                        <div class="col-sm-3 text-primary text-bold" id="fichaGen"></div>
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Sede</h6>
                                        </div>
                                        <div class="col-sm-3 text-primary text-bold" id="fichaCampus"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profesor</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaProfe"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Inscripción</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="idFechaSol"></div>
                                    </div>

                                    <div class="row py-3 mt-2">
                                        <h5 class="text-secondary">Información de costo:</h5>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Costo de curso</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaCoste"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Descuento aplicado</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaDesc"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Total de pago</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaTotal"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Notas</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaNotas"></div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN INFO CURSO BANNER -->
                </div>
            </section>
            <!-- FIN seccion detalles-->

            <!-- INICIA SECCION DE LISTA DE DOCUMENTOS -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Revisión de documentos
                        </div>
                        <div class="card-body table-responsive">
                            <div class="tab-content text-justify" id="nav-tabContent">
                                <div class="tab-pane show " id="list-1-1" role="tabpanel" aria-labelledby="list-home-list">
                                    <div class="col-12 col-md-12">
                                        <div class="card mb-3">
                                            <div class="py-2">
                                                <div class="row py-1 m-2">
                                                    <h5 class="text-secondary">Ficha de Inscipción: No1415254252</h5>
                                                    <div class="row py-2">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Curso:</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">Diccionarios de datos GRUPO: 666</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-7 col-sm-3">
                                                            <h6 class="mb-0">Semestre</h6>
                                                        </div>
                                                        <div class="col-5 col-sm-3 text-secondary">2021-2</div>
                                                        <div class="col-7 col-sm-3">
                                                            <h6 class="mb-0">Generación</h6>
                                                        </div>
                                                        <div class="col-5 col-sm-3 text-secondary">2020</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Modalidad</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">En Linea</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Procedencia:</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">Comunidad UNAM </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Contacto:</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary"><a href="mailto:lucia@hotmail.com" class="text-secondary"><i class="fas fa-paper-plane"></i> lucia@hotmail.com</a>
                                                            <br> <i class="fas fa-mobile-alt"></i> 5587481564</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Solicitud:</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">mié, 16 de diciembre de 2020 11:09 a.&nbsp;m.</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-7 col-sm-3">
                                                            <h6 class="mb-0">Costo:</h6>
                                                        </div>
                                                        <div class="col-5 col-sm-3 text-secondary">$1500.00</div>
                                                        <div class="col-7 col-sm-3">
                                                            <h6 class="mb-0">Descuento:</h6>
                                                        </div>
                                                        <div class="col-5 col-sm-3 text-secondary">No Aplica</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <h6 class="mb-0">Estatus de la Inscripción</h6>
                                                        </div>
                                                        <div class="col-sm-4 text-secondary"><i class="fas fa-exclamation-circle text-warning"></i> POR REVISAR  </div>
                                                        <div class="col-sm-4 text-secondary"><i class="fas fa-hand-holding-usd text-warning"></i> PAGO PENDIENTE </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="list-2-1" role="tabpanel" aria-labelledby="list-profile-list">
                                    <div id="containerDocs"><div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <tbody></tbody><thead>
                                                <tr>
                                                    <th>DOCUMENTO</th>
                                                    <th>ESTADO</th>
                                                    <th>VER</th>
                                                    <th>OPCIONES</th>
                                                </tr>
                                                </thead>
                                                <tbody><tr iddoc="null">
                                                    <td class="text-sm-start">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="spinner-grow text-black" role="status"></div>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-md-start px-3">
                                                                <p class="mb-0 text-xs">Tarjeta de la Leche </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm-start">
                                                        Esperando...
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                                <tr iddoc="null">
                                                    <td class="text-sm-start">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="spinner-grow text-black" role="status"></div>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-md-start px-3">
                                                                <p class="mb-0 text-xs">FICHA DE PAGO </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm-start">
                                                        Esperando...
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                                <tr iddoc="null">
                                                    <td class="text-sm-start">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="spinner-grow text-black" role="status"></div>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-md-start px-3">
                                                                <p class="mb-0 text-xs">CURP </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm-start">
                                                        Esperando...
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr></tbody>
                                            </table></div>
                                        <div class="container">
                                            <div class="row small text-primary">
                                                <div class="col-12 col-md-2">
                                                    <i class="fas fa-circle text-success dotDocs small"></i> Acreditado
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <i class="fas fa-circle text-warning dotDocs small"></i>   Por Revisar
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <i class="fas fa-circle text-info dotDocs small"></i>  Rechazado
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-circle text-black dotDocs small"></i>  Esperando que el alumno suba el archivo
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- FIN SECCION DE LISTA DE DOCUMENTOS -->

        </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/js.php'; ?>
<?php include 'includes/serivices-js.php'; ?>
<!-- Files JS -->
<script src="./service/alumnos/ficha-inscripcion.js"></script>

</body>
</html>