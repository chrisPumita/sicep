<?php $titulo = "Ficha de inscripción" ?>
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
                        <h3>Ficha de Inscripción</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home-admin.php">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-alumnos-view.php">Lista de alumnos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manolo Perez Ramirez</li>
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
                                        <div class="spinner-grow bg-dark mr-1" role="status" style="width: 2rem; height: 2rem"></div>
                                    </div>
                                    <div class="col-8 m-auto">
                                        <h5>Pago del Curso</h5>
                                        <h6>Pagado el 25 de enero de 2022</h6>
                                        <select class="form-control" id="status-pago">
                                            <option>Acreditado</option>
                                            <option>Verificado y Rechazado</option>
                                            <option>Pendiente</option>
                                        </select>
                                        <a href="#" class="btn btn-success btn-block "><i class="fas fa-power-off"></i> Aplicar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body py-4 px-2">
                                <div class="d-flex">
                                    <div class="m-auto">
                                        <img src="../assets/images/icons/ok.svg" width="80" alt="svg ok">
                                    </div>
                                    <div class="col-8 m-auto">
                                        <h5>Inscripción acreditada</h5>
                                        <input type="hidden" value="1" id="valAcredCurso">
                                        <h5><strong>Lic Cesar Haziel Pineda Pacheco</strong></h5>
                                        <h6>Jefe de Departamento de Administracion</h6>
                                        <a href="#" class="btn btn-danger btn-block "><i class="fas fa-power-off"></i> Inhabilitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- DETALLES PERSONALES ACADEM -->
                    <div class="col-md-6">
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
                        <!-- FIN DETALLES ACADEMICOS Y PER -->

                        <!-- INICIO DETALLES SERV SOCIAL -->                       
                        <div class="card">
                            <div class="card-body pb-3">
                                <div class="m-auto">
                                    <h5>Información de Servicio Social</h5>
                                    Este alumno está registrado con una cuenta de Servicio Social
                                </div>

                                <div class="row py-3">
                                    <h5 class="text-secondary">Detalles:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Inicio de servicio</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">22 de Febrero, 2020</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Fin de servicio</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">22 de Agosto, 2020</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni numquam corrupti in ducimus.</div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                        <!-- FIN DETALLES SERV SOCIAL-->
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
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
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