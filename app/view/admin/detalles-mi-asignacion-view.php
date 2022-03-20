<?php

if (!isset($_POST['id'])){
    header("Location: ./prof-historial-grupos");
}
else{
    $id = $_POST['id'];
    echo '<script> let ID_MyASIG = '.$id.'; </script>';
}
$titulo = "Detalles de la Asignación" ?>
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
                        <h3 id="nameCursoTittle"></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-propuestas">Cursos</a></li>
                                <li class="breadcrumb-item" id="liCursoAction"><a href="#" id="nameBreadCurso"></a></li>
                                <li class="breadcrumb-item active" aria-current="page" id="grupoBread"></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- SECCION CALLOUT INFO -->
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    A continuación, se muestra la información del grupo. Puede descargar la lista oficial de su grupo
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FIN SECCION CALLOUT INFO -->

            <!-- SECCION BANNER CURSO -->

            <section class="section">
                <div class="card">
                    <div class="col-md-12 text-center">
                        <div class="img bannerImg" id="fondoImg">
                            <div class="overlay"></div>
                            <div class="mx-auto">
                                <h4 class="text-light text-left ">
                                    <strong id="nameAsignacion placeholder "></strong>
                                    <h5 class="text-secondary" aria-hidden="true" ><span class="placeholder col-6" id="lblProfesorName"></span></h5>
                                    <div id="statusFlag"></div>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FIN SECCION BANNER CURSO -->
            <!-- SECCION DE DETALLES GENERALES -->
            <section class="section">
                <div class="row gutters-sm">
                    <!-- detalles generales del curso-->
                    <div class="col-12 col-md-6">
                        <div class="card mb-3">
                            <div class="card-body py-2">
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Detalles Generales:</h5>
                                    <div class="row py-2">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Grupo</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary placeholder " id="lblGrupo">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Generación</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblGeneracion"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Modalidad</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblModalidad"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Cupo</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblCupo">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Sede</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblCampusCede">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Serestre</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblSemestre">  </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Costo</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblCostoFinal"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Visibilidad</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblVisible"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">NOTAS</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary" id="lblNotas"> </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- detalles de descuentos-->
                    <div class="col-12 col-md-6">

                        <div class="card mb-3">
                            <div class="card-body py-2">
                                <!-- fechas importantes-->
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Fechas importantes:</h5>
                                    <div class="row py-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Inscripciones</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary" id="lblInsc"> </div>
                                    </div>
                                    <hr>
                                    <div class="row py-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Clases</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary" id="lblClases"> </div>
                                    </div>
                                    <hr>
                                    <div class="row py-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Calificaciones</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary" id="lblCalif"> </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fin detalles de descuentos-->
                </div>
            </section>
            <!-- FIN SECCION DE DETALLES GENERALES -->

            <!-- SECCION SOLICITUDES Y LISTA -->
            <section class="list-group-navigation">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listas Oficial de Alumnos</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12" id="lista_oficial_container">
                                        </div>
                                    </div>
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
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX-->
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/profesor/mi-asignacion-detalles.js"></script>

</body>

</html>