<?php $titulo = "Ficha de inscripción";
    $id = $_POST['id'];
    if (!isset($_POST['id']))
        header("Location: ./lista-alumnos");

    echo '<script> window.ID_INSC = '.$id.'; </script>';
?>
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
                        <h3>Ficha de Inscripción [<?php echo $id; ?>]</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-alumnos">Alumnos</a></li>
                                <li class="breadcrumb-item"><a href="./solicitudes-inscripcion">Solicitudes</a></li>
                                <li class="breadcrumb-item active" aria-current="page" id="breadName">{name}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- inicia seccion detalles alumno -->
            <section class="section">
                <div class="row">
                    <div id="cardValidate"  class="col-md-6">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center" role="button" onclick="visitAlumno();">
                                    <div class="avatar avatar-xl">
                                        <span class=" position-absolute bottom-0 end-0 estatusAvatar" id="fichaValidaAlumno"></span>
                                        <img id="avatarImage" src="../assets/images/start-sesion.png" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h4 class="font-bold" id="fichaName">{name}</h4>
                                        <h5 class="text-muted mb-0" id="fichaCarrera">{carrera}</h5>
                                        <h6 class="text-muted mb-0" id="fichaProcedencia">{procedencia}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" id="cardPago">
                        <div class="card"  >
                            <div class="card-body py-3 px-2">
                                <div class="d-flex">
                                    <div class="m-auto">
                                        <div class="spinner-grow bg-danger mr-1" role="status" style="width: 2rem; height: 2rem"></div>
                                    </div>
                                    <div class="col-8 m-auto">
                                        <h5>Pago del Curso</h5>
                                        <h6>PENDIENTE <span id="cardPagoTotal"></span></h6>
                                        <div class="d-flex justify-center align-items-center">
                                            <select class="form-control px-2" id="status-pago">
                                                <option     value="1" selected="selected">Acreditar Pago</option>
                                                <option     value="2" >Acreditar Sin Pago</option>
                                                <option     value="0" >Cancelar Inscripcion</option>
                                            </select>
                                            <a href="#" class="btn btn-success btn-block mx-3 btnValidatePago">
                                                <i class="fas fa-check"></i> Aplicar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 d-flex align-items-center">
                        <h3>Detalles de la Inscripción</h3>
                    </div>
                    <div class="col-sm-2 align-items-center">
                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                            <i class="fas fa-print"></i> Imprimir</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <!-- DETALLES PERSONALES ACADEM -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body py-2">
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Datos personales:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Sexo</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaSexo">{sexo}</div>
                                    </div>
                                    <hr><div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Teléfono</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaTelefono">{tel}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Correo electrónico</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold"  id="fichaCorreo">{mail}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Localidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaLocalidad">{localidad}</div>
                                    </div>
                                </div>
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Información académica:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Carrera</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="carrera">{carrera}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Universidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaNameUni">{nameUni}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Matrícula</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaMatricula">{matricula}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Cuenta</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaAltaCuenta">{date}</div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- FIN DETALLES ACADEMICOS Y PER -->

                        <!-- INICIO DETALLES SERV SOCIAL -->                       
                        <div class="card" id="acountSS"></div>
                        <!-- FIN DETALLES SERV SOCIAL-->
                    </div>
                    

                    <!-- INICIO INFO CURSO -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" id="bannerCurso" src="../resources/banners/ban-fesc.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <div class="row py-2">
                                        <h5 class="text-secondary">Información del curso:</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Curso</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaNameCurso">{nameCurso}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <h6 class="mb-0">Grupo</h6>
                                        </div>
                                        <div class="col-sm-2 text-primary text-bold" id="fichaGrupo">{gpo}</div>
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Semestre</h6>
                                        </div>
                                        <div class="col-sm-4 text-primary text-bold" id="fichasemestre">{sem}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Generacion</h6>
                                        </div>
                                        <div class="col-sm-2 text-primary text-bold" id="fichaGen">{gen}</div>
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Sede</h6>
                                        </div>
                                        <div class="col-sm-4 text-primary text-bold" id="fichaCampus">{sede}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profesor</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fichaProfe">{profe}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Inscripción</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="idFechaSol">{fecha}</div>
                                    </div>

                                    <div class="row py-3 mt-2">
                                        <h5 class="text-secondary">Información de costo:</h5>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Costo de curso</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaCoste">{coste}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Descuento aplicado</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaDesc">{desc}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Total de pago</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaTotal">{total}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Notas</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold" id="fichaNotas">{notes}</div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN INFO CURSO -->
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
                                <div id="containerDocs"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FIN SECCION DE LISTA DE DOCUMENTOS -->

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/modal-vista-documento.php"?>
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX  -->
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>

<script src="./service/inscripcion-detalles.js"></script>
<script src="./service/documentacion-gral.js"></script>
<script src="./service/acounts-security.js"></script>
</body>

</html>