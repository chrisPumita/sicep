<?php
if (!isset($_POST['id'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $id = $_POST['id'];
}
$titulo = "Detalles del curso"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <!--Only datatable use-->
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
</head>

<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>
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
                    <div class="col-12 col-md-12 order-md-1 order-last">
                        <h3>Detalles <span id="nombreCursoTitulo"></span></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- seccion callout -->
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos eveniet
                                    perspiciatis sequi voluptatem. Alias aliquid, assumenda beatae hic maxime
                                    necessitatibus non possimus tempora. Accusamus aperiam at corporis harum provident.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" onclick="openGroup(<?php echo $id ?>)">
                                        <i class="fas fa-users"></i> Abrir grupo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion cards estadiscticas --
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/grado4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">GRUPOS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">16</h3>
                                            <h6 class="font-semibold text-success">Creados</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/comunidad4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">ALUMNOS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">183,000</h3>
                                            <h6 class="font-semibold text-success">Inscritos</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/inscripciones4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">SOLICITUDES</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">1,000</h3>
                                            <h6 class="font-semibold text-success">Creadas</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/constancia4.svg);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="text-muted font-semibold">CONSTANCIAS</h6>
                                            <h3 class="font-extrabold mb-0 text-primary">1,000</h3>
                                            <h6 class="font-semibold text-success">Entregadas</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            -- END SECCION ESTADITICA-->
            <!-- seccion detalles y banner img -->
            <section class="section">
                <div class="row gutters-sm">
                    <!-- detalles del curso-->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-content">
                                <div class="callout callout-primary p-0">
                                    <div id="detallesAprobacionCurso">
                                        <div class="d-flex">
                                            <div class="m-auto">
                                                <img src="../assets/images/icons/cancel.svg" width="80" alt="svg ok">
                                            </div>
                                            <div class="m-auto">
                                                <h5>Sin acreditar</h5>
                                                Si este curso cumple con los requerimentos, puede aprobar este curso y comenzar a asignar grupos
                                            </div>
                                            <div class="card-body d-flex text-align-right pb-0">
                                                <a href="#" class="btn btn-success btn-block ">Acreditar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body py-2">
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">General:</h5>
                                    <div class="list-group m-2">
                                        <!-- PARTE ACORDEON 1 -->
                                        <div class="list-group-item list-group-item-action" id="heading1" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="false"
                                        aria-controls="collapseOne" role="button">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="d-flex px-2 py-1 mb-0">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs">Descripción</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="collapse pt-1" aria-labelledby="heading1"
                                            data-parent="#cardAccordion">
                                            <p class="p-3" id="detallesCurso"></p>
                                        </div>

                                        <!-- PARTE ACORDEON 2 -->
                                        <div class="list-group-item list-group-item-action" id="heading2" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapseOne" role="button">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="d-flex px-2 py-1 mb-0">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs">Objetivo</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="collapse pt-1" aria-labelledby="heading2"
                                            data-parent="#cardAccordion">
                                            <p class="p-3" id="objetivo"></p>
                                        </div>

                                        <!-- PARTE ACORDEON 3 -->
                                        <div class="list-group-item list-group-item-action" id="heading3" data-bs-toggle="collapse"
                                             data-bs-target="#collapse3" aria-expanded="false"
                                             aria-controls="collapseOne" role="button">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="d-flex px-3 py-1 mb-0">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs">Antecedentes</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse3" class="collapse pt-1" aria-labelledby="heading3"
                                             data-parent="#cardAccordion">
                                            <p class="p-3" id="antecedentes"></p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row py-1 m-2">
                                    <h5 class="text-secondary">Detalles:</h5>
                                    <div class="row py-2">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Dirigido a</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="dirigido_a">   </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Modalidad</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="modalidad"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Código</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="codigoInfo"> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Sesiones</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="sesionesInfo"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Costo Sugerido:</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="costoSugerido"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Registrado desde</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold" id="fechaCreacion"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#updateDatosCursos">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner imagen -->
                    <div class="col-md-5 mb-3">
                        <div class="col-12 col-lg-12">
                            <div class="card">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="../assets/images/start-sesion.png" alt="Face 1">
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold" id="nombreAutor"></h5>
                                            <h6 class="text-muted mb-0">AUTOR</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span id="imgContainer"></span>
                                <div class="card-body pt-3">
                                    <h4 class="card-title">Imagen del banner</h4>
                                    <p class="card-text">
                                    Debe tener una resolución de 600px por 300px
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateBannerCurso">
                                        <i class="fas fa-sync-alt"></i> Cambiar
                                    </button>
                                    <button class="btn btn-outline-danger" onclick="removeBanner()"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body pt-3">
                                    <h4 class="card-title">Temario PDF</h4>
                                    <div class="col">
                                        <form id="inputPDF">
                                            <div class="mb-3">
                                                <label for="pdfFile" class="form-label">Seleccionar nuevo PDF</label>
                                                <input type="hidden" id="idCursoPDF" name="idCursoPDF">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="pdfFile" name="pdfFile">
                                                    <button class="btn btn-secondary" type="submit" id="btnSubir">Subir</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <span id="filePDF" class="me-1 mb-1"></span>
                                        <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-eye"></i></button>
                                        <a href="#" class="btn btn-outline-danger me-1 mb-1"><i class="fas fa-times"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin banner imagen -->
                </div>
            </section>
            <!-- fin de seccion de detalles -->

            <!-- seccion de temario -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <!-- boton que da problemas en responsive -->
                            <div class="col-sm-12 col-md-6">
                                <h5 class="text-secondary"><i class="fas fa-bookmark"></i> Temario General</h5>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <span class="position-absolute  mx-3 end-0">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewTema">
                                    <i class="fas fa-plus"></i> Agregar</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive" id="tblTemario"></div>
                </div>
            </section>
            <!-- fin seccion de temario -->
            <!-- seccion de temario -->
            <section class="section" id="sectionDescuentos">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <!-- boton que da problemas en responsive -->
                            <div class="col-sm-12 col-md-6">
                                <h5 class="text-secondary"><i class="fas fa-tags"></i> Público y Descuentos Aplicados:</h5>
                            </div>
                            <div class="col-sm-12">
                                <p class="text-primary">De acuerdo al costo sugerido <span class="badge bg-success" id="lblCostoFinalCallout"></span>, estos serian los precios con descuento para cada
                                Grupo de estudiantes que deseen cursar este curso. Considere que el precio puede cambiarse al
                                momento de abrir un grupo</p>
                            </div>
                            <div class="col-sm-12 col-md-12" id="containerNewAsignaciones"> </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive" id="containerDescuentos">
                    </div>
                </div>
            </section>
            <!-- fin seccion de temario -->

            <!-- creacion de asignacion de profesor -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <!-- boton que da problemas en responsive -->
                            <div class="col-sm-12 col-md-6">
                                Detalles de Grupos
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <span class="position-absolute  mx-3 end-0">
                                <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#modalCreaGrupoCurso">
                                    <i class="fas fa-plus-square"></i> Grupo
                                 </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 align-items-center m-auto text-center">
                                    <h2><i class="fas fa-layer-group text-grey"></i></h2>
                                    <h5 class="text-center">Grupos de este Curso</h5>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row p-3" id="containerLisGpos"><div class="col-md-4 text-end">
                                            <label for="indice" class="text-primary">Seleccione un Grupo:</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <select class="form-control" id="grupos">
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <button id="btnDeleteGrupo" class="btn btn-danger me-1 mb-1"><i class="fas fa-trash-alt"></i> Grupo</button>
                                        </div>
                                        <span id="alertGpos"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 align-items-center">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 p-3">
                                    <h5 class="text-secondary"> <i class="fas fa-clock"></i> Horario establecido:</h5>
                                    <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="lista-alumnos-tabla" data-bs-toggle="list" href="#lista-alumnos" role="tab" aria-selected="true">Precencial</a>
                                        <a class="list-group-item list-group-item-action" id="lista-solicitudes-tabla" data-bs-toggle="list" href="#lista-solicitudes" role="tab" aria-selected="false">Virtual</a>
                                    </div>
                                    <div class="tab-content text-justify">
                                        <div class="tab-pane fade active show table-responsive" id="lista-alumnos" role="tabpanel" aria-labelledby="lista-alumnos-tabla">
                                            <h5>Horario presencial:</h5>
                                            <div id="containerTblPresencial">
                                                <div class="alert alert-warning alert-dismissible fade show alert-danger d-flex align-items-center" role="alert">
                                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                                    <div>
                                                        Genere un grupo para poder agregar <strong>HORARIO</strong>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade table-responsive" id="lista-solicitudes" role="tabpanel" aria-labelledby="lista-solicitudes-tabla">
                                            <h5>Horario virtual:</h5>
                                            <div id="containerTblVirtual">
                                                <div class="alert alert-warning alert-dismissible fade show alert-danger d-flex align-items-center" role="alert">
                                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                                    <div>
                                                        Genere un grupo para poder agregar <strong>HORARIO VIRTUAL</strong>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <!-- FIN SECCION SOLICITUDES Y LISTA -->
            <!-- seccion de historico de cursos -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Historico de Grupos creados de <span id="nombreCursoHistorial"></span>
                    </div>
                    <div class="card-body table-responsive">
                        <!--Table prototype to use | tablas con  paginador-->
                        <table class="table table-hover table-striped" id="tblHistAsigCurso" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>PROFESOR</th>
                                <th>CUPO</th>
                                <th>PERIODO</th>
                                <th>TIPO</th>
                                <th>ESTADO</th>
                                <th>DETALLES</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </section>
            <!-- fin seccion de historico de cursos -->

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/modal-horario-presencial.php" ?>
            <?php include "modals/modal-update-banner-curso.php" ?>
            <?php include "modals/modal-horario-virtual.php" ?>
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-nuevo-tema.php"?>
            <?php include "modals/modal-pdf-temario.php"?>
            <?php include "modals/modal-edita-curso.php"?>
            <?php include "modals/modal-add-grupo-curso.php"?>
            <?php include "modals/modal-editar-descuentos.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>

<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- INCLUDE SERIVES AJAX
    <script src="./service/lista-alumnos.js"></script>
-- INCLUDE DATATABLE -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

<!--CARGAR SERVICIOS AJAX-->
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/asignacion-gral.js"></script>
<script src="./service/curso-details.js"></script>
<script src="./service/files-ajax.js"></script>
<script src="./service/datatable-historial-asig-curso.js"></script>


<script>
    $(document).on("click", ".custom-file-input", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#preview").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

</script>

</body>

</html>