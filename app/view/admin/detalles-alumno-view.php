<?php $titulo = "Detalles del Alumno" ?>
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
                        <h3>Detalles del Alumno</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-alumnos">Alumnos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pedro Martinez Juarez</li>
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
                                <div class="col-sm-10 mb-1">
                                    Verifique la información del alumno, ya que ésta se utilizará para generar las CONSTANCIAS. Las cuentas INACTRIVAS no dan acceso al sistema. Si este profesor perdio su contraseña, puede recuperarla desde el la opción Recuperar.
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

            <!-- DETALLES DE LA CUENTA -->
            <section class="section">
                <div class="row gutters-sm">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>Pedro Martinez Juarez<span class="badge bg-light-warning"><i class="fas fa-exclamation-triangle"></i></span></h4>
                                        <p class="text-secondary mb-1">Lic. Informatica</p>
                                        <p class="text-muted font-size-sm">Comunidad FESC</p>
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
                                        <h6 class="mb-0">Nombre Completo</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Pedro Martinez Juarez
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">No. de Cuenta</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        316348852
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
                                        <h6 class="mb-0">Universidad</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Facultad de Estudios Superiores Cuatitlán, Campo 4
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Dirección</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Atizapan de Zaragoza, México
                                    </div>
                                </div>                       
                            </div>
                        </div>
                    </div>
                </div>                
            </section>            
            <!-- FIN DETALLES DE LA CUENTA -->

            <!-- ACTIVAR CUENTA Y COSNTANCIA -->
            <section class="section">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Crear Cuenta de Servicio Social</h5>
                                <p class="card-text text-muted m-0">Al registrar esta cuenta como de Servicio Social, el alumno formará parte del servicio social dentro del sistema.</p>
                                <button class="btn btn-primary w-100 mt-2 text-align-right" data-bs-toggle="modal" data-bs-target="#nuevoServicio" type="button">
                                    Crear</button>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Constancias</h5>
                                <p class="card-text text-muted mb-1">Constancias pertenecientes a este alumno.</p>
                                <select class="form-control mb-1" id="list-curso">
                                    <option>345891</option>
                                    <option>784649</option>
                                    <option>145712</option>
                                </select>
                                <button type="button" class="btn btn-primary w-100 mt-2 text-align-right">Ver</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FIN ACTIVAR CUENTA Y COSNTANCIA -->

            <!-- CARD SERVICIO SOCIAL Y CONSTANCIA -->
            <div class="section">
                <div class="card">
                    <div class="card-header img_bg_cards" style="background-image: url(../assets/images/icons/group3.svg);">
                        <div class="col-12" >
                            <h4 class="card-title "><b>CUENTA DE SERVICIO SOCIAL</b></h4>
                        </div>
                        <div class="col" >
                            <h6 class="card-subtitle mb-2 text-muted">
                                <p class="card-text text-muted small ">
                                <div class="spinner-grow bg-success" role="status" style="width: 1rem; height: 1rem"></div>
                                Este alumno tiene cuenta de Servicio Social <span class="vl ml-1 mr-2 "></span>
                                desde el <span class="font-weight-bold"> 15 Octubre de 2021</span></p>
                            </h6>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="row">
                            <div class="col">
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action">Nivel de permiso: Bajos</button>                                    
                                    <button type="button" class="list-group-item list-group-item-action">Clave:
                                        4a7d1ed414474e4033ac29ccb8653d9b</button>
                                    <button type="button" class="list-group-item list-group-item-action">Fercha de término: 20-12-2021
                                        ac</button>
                                    <button type="button" class="list-group-item list-group-item-action">Notas: Vestibulum at eros</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class=" col-md-auto ">
                                <a href="#" class="btn btn-primary btn-black" data-bs-toggle="modal" data-bs-target="#nuevoServicio">
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
            <!--FIN CARD SERVICIO SOCIAL Y CONSTANCIA-->
            
            <!-- LISTA DE INSCRIPCIONES -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Historial de Incripciones
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>GRUPO</th>
                                <th>CURSO</th>
                                <th>PROFESOR</th>
                                <th>CONSTANCIA</th>
                                <th>GENERACIÓN</th>
                                <th>PERIODO</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="tbl-inscripciones">
                            <tr id_grupo="1">
                                <th scope="row">1</th>
                                <td>1001</td>
                                <td>Induccion al computo <span class="badge bg-warning">Terminado</span></td>
                                <td>Juan Perez Sanchez</td>
                                <td>Aprobada</td>
                                <td>2021-II</td>
                                <td>10-12-2021 al 14-041-2022</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="./ficha-inscripcion" class="btn btn-outline-primary"><i class="far fa-file-alt"></i></a>
                                </td>
                            </tr>
                            <tr id_grupo="2">
                                <th scope="row">2</th>
                                <td>1601</td>
                                <td>Macros en Excel <span class="badge bg-success">En Curso</span></td>
                                <td>Alejandro Navarrete Espinoza</td>
                                <td>Pendiente</td>
                                <td>12-09-2021</td>
                                <td>10-12-2021</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <a href="./ficha-inscripcion" class="btn btn-outline-primary"><i class="far fa-file-alt"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- FIN LISTA DE INSCRIPCIONES -->

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/modal-registro-servicio.php"?>
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