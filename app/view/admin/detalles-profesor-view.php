<?php $titulo = "Detalles del Profesor" ?>
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
                        <h3>Detalles del Profesor</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-profesores">Profesores</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lic. Christian RCSG</li>
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
                                    Verifique la información del profesor, ya que ésta se utilizará para generar las
                                    CONSTANCIAS y enlace con los alumnos inscritos en los grupos que se asignen. Las cuentas
                                    INACTRIVAS no dan acceso al sistema. Si este profesor perdio su contraseña, puede recuperarla
                                    desde el la opción Recuperar.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-success w-100 mr-3 mt-3 mb-3">
                                        <i class="fas fa-check-circle"></i> ACTIVAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>Lic. Christian RCSG  <span class="badge bg-light-warning"><i class="fas fa-exclamation-triangle"></i></span></h4>
                                        <p class="text-secondary mb-1">Informatica</p>
                                        <p class="text-muted font-size-sm">ADMINISTRADOR</p>
                                        <button class="btn btn-success"><i class="fab fa-whatsapp"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">No. Trabajador</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        561561651
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nombre Completo</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Lic. Christian RCSG
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        correo@algo.com
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Telefono</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        (55)3051 1515
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Departamento</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Administración
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">CUENTA</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Cuenta de ADMINISTRADOR
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ADMIN ACCOUNT ENABLE-->
                <div class="section">
                    <div class="card">
                        <div class="card-header img_bg_cards" style="background-image: url(../assets/images/icons/group3.svg);">
                            <div class="col-12" >
                                <h4 class="card-title "><b>CUENTA DE ADMINISTRADOR</b></h4>
                            </div>
                            <div class="col" >
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <p class="card-text text-muted small ">
                                    <div class="spinner-grow bg-success" role="status" style="width: 1rem; height: 1rem"></div>
                                    Este profesor tiene cuenta de adminsitrador <span class="vl ml-1 mr-2 "></span>
                                    desde el <span class="font-weight-bold"> 15 Octubre de 2021</span></p>
                                </h6>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action">Cargo: Coordinador</button>
                                        <button type="button" class="list-group-item list-group-item-action">Nivel de permiso: Bajos</button>
                                        <button type="button" class="list-group-item list-group-item-action">Clave:
                                            4a7d1ed414474e4033ac29ccb8653d9b</button>
                                        <button type="button" class="list-group-item list-group-item-action">Porta
                                            ac
                                            consectetur
                                            ac</button>
                                        <button type="button" class="list-group-item list-group-item-action">Vestibulum at
                                            eros</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class=" col-md-auto ">
                                    <a href="#" class="btn btn-primary btn-black">
                                        <i class="fas fa-edit"></i>
                                        <small>EDITAR</small></a>
                                </div>
                                <div class=" col-md-auto ">
                                    <a href="#" class="btn btn-danger btn-black">
                                        <i class="fas fa-ban"></i>
                                        <small>Deshabilitar</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ADMIN ACCOUNT ENABLE-->
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Historial de grupos impartidos por este profesor
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>GRUPO</th>
                                <th>CURSO</th>
                                <th>CUPO</th>
                                <th>INICIO</th>
                                <th>TIPO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupos">
                            <tr id_grupo="3">
                                <th scope="row">1</th>
                                <td>1001</td>
                                <td>Induccion al computo <span class="badge bg-warning">Terminado</span></td>
                                <td>15</td>
                                <td>2021-06-30 00:00:00</td>
                                <td>En linea y Precencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
                            <tr id_grupo="5">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">En Curso</span></td>
                                <td>30</td>
                                <td>2021-07-26 00:00:00</td>
                                <td>Presencial</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-clock"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-tasks"></i> Solicitudes</a>
                                </td>
                            </tr>
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
<script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#tbl1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>