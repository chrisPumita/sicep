<?php $titulo = "Inicio - Alumno" ?>
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
                        <h3>Ficha de Inscripción</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./mis-cursos">Mis Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ficha de Inscripción</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- inicia seccion detalles alumno -->
            <section class="section">
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
                                        <img src="../assets/images/start-sesion.png" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h4 class="font-bold">Christian Pioquinto</h4>
                                        <h5 class="text-muted mb-0">Licenciatura en Informática</h5>
                                        <h5 class="text-muted mb-0">Alumno FESC</h5>
                                        <h6>Cuenta verificada</h6>
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
                                            <h6 class="mb-0">Teléfono</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">55 1080 1566</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Correo electrónico</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">chris.foppy@gmail.com</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Localidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">Nicolás Romero, EDOMEX</div>
                                    </div>
                                </div>
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Información académica:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Carrera</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">Licenciatura en informática</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Universidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">Universidad Nacional Autónoma de México</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Matrícula</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">316348852</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Fecha de Registro</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">28 de Junio, 2020</div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- INICIO INFO CURSO BANNER -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" src="https://capacitate365.com/wp-content/uploads/2020/10/Curso-excel-completo.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="row py-2">
                                        <h5 class="text-secondary">Información del curso:</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nombre del curso</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">Curso de Excel básico para contadores</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Grupo</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">2650</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profesor</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">Ricardo Anaya López</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Fecha de Inscripción</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">30 de Junio, 2020</div>
                                    </div>
                                    
                                    <div class="row py-3 mt-2">
                                        <h5 class="text-secondary">Información de costo:</h5>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Costo de curso</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">$1000.00 MXN</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Descuento aplicado</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">-50% ($500.00 MXN)</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Total de pago</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">$500.00 MXN</div>
                                    </div>
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
                        <table class="table table-hover table-lg">
                            <tbody>
                            <tr>
                                <td class="col-auto">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold ms-3 mb-0">Comprobante de Pago</p>
                                    </div>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0"><i class="fas fa-upload"></i> 15 enero 2022 05:16:15 PM</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0"><i class="fas fa-quote-left"></i> Documento invalido</p>
                                </td>
                                <td class="col-auto">
                                    <span class="badge bg-warning">Por revisar</span>
                                </td>
                                <td class="col-auto">
                                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-pdf-temario"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                    <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-auto">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold ms-3 mb-0">Comprobante de Pago</p>
                                    </div>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0"><i class="fas fa-upload"></i> 15 enero 2022 05:16:15 PM</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0"><i class="fas fa-quote-left"></i> Documento invalido</p>
                                </td>
                                <td class="col-auto">
                                    <span class="badge bg-success">Aprovado</span>
                                </td>
                                <td class="col-auto">
                                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-pdf-temario"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                    <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-auto">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold ms-3 mb-0">Comprobante de Pago</p>
                                    </div>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0"><i class="fas fa-upload"></i> 15 enero 2022 05:16:15 PM</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0"><i class="fas fa-quote-left"></i> Documento invalido</p>
                                </td>
                                <td class="col-auto">
                                    <span class="badge bg-danger">Rechazado</span>
                                </td>
                                <td class="col-auto">
                                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-pdf-temario"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                    <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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

<!-- Files JS -->

</body>
</html>