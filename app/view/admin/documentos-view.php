<?php $titulo = "Documentos recibidas" ?>
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
                        <h3>Documentos Por Revisar <span class="badge bg-danger">150</span></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Documentos por Revisar</li>
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
                                    Una lista general de los documentos a revisar, puede revisar uno a uno e ir aceptando o descarganto.
                                    Tenga en cuenta que al completar el 100% de revision de cada inscripcion, puede confirmar
                                    la inscripcion y el alumno quedara automaticamente inscrito.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                       Documentos por Revisar
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <div class="list-group-item list-group-item-action" id="heading1" data-bs-toggle="collapse"
                               data-bs-target="#collapse1" aria-expanded="false"
                               aria-controls="collapseOne" role="button">
                                <div class="d-flex w-100 justify-content-between">
                                    <div class="d-flex px-2 py-1 mb-0">
                                        <div class="px-3">
                                            <i class="fas fa-folder-open"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">Iniciacion al computo I [1003]</p>
                                        </div>
                                    </div>
                                    <small><span class="badge bg-danger">4</span></small>
                                </div>
                            </div>
                            <div id="collapse1" class="collapse pt-1" aria-labelledby="heading1"
                                 data-parent="#cardAccordion">
                                <div class="table-responsive">
                                    <div class="card">
                                        <div class="alert alert-primary">
                                            <p>
                                                <a href="#" class="btn btn-outline-info"><i class="fas fa-folder-open"></i> Folio: 156156</a>
                                                <a href="#" class="btn btn-outline-info"><i class="fas fa-paper-plane"></i> Enviar Mensaje</a>
                                                <a href="#" class="btn btn-outline-info"><i class="far fa-id-card"></i> Ver Datos</a>
                                                <a href="#" class="btn btn-outline-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                            </p>
                                        </div>

                                    </div>

                                    <table class="table table-hover table-lg">
                                        <tbody>
                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action" id="heading2" data-bs-toggle="collapse"
                                 data-bs-target="#collapse2" aria-expanded="false"
                                 aria-controls="collapseOne" role="button">
                                <div class="d-flex w-100 justify-content-between">
                                    <div class="d-flex px-2 py-1 mb-0">
                                        <div class="px-3">
                                            <i class="fas fa-folder-open"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">Iniciacion al computo I [1003]</p>
                                        </div>
                                    </div>
                                    <small><span class="badge bg-danger">4</span></small>
                                </div>
                            </div>
                            <div id="collapse2" class="collapse pt-1" aria-labelledby="heading2"
                                 data-parent="#cardAccordion">
                                <div class="table-responsive">
                                    <div class="card">
                                        <div class="alert alert-primary">
                                            <p>
                                                <a href="#" class="btn btn-outline-info"><i class="fas fa-folder-open"></i> Folio: 156156</a>
                                                <a href="#" class="btn btn-outline-info"><i class="fas fa-paper-plane"></i> Enviar Mensaje</a>
                                                <a href="#" class="btn btn-outline-info"><i class="far fa-id-card"></i> Ver Datos</a>
                                                <a href="#" class="btn btn-outline-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                            </p>
                                        </div>

                                    </div>

                                    <table class="table table-hover table-lg">
                                        <tbody>
                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="spinner-grow text-danger" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
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
                                                <p class=" mb-0"> Por Revisar</p>
                                            </td>
                                            <td class="col-auto">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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