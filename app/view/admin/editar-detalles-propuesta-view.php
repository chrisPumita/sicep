<?php
if (!isset($_POST['id'])){
    header("Location: ./lista-propuestas");
}
else{
    $id = $_POST['id'];
    echo '<script> let ID_CURSO = '.$id.'; </script>';
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
                        <h3>Editar detalles del curso propuesto <span id="nombreCursoTitulo"></span></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-propuestas">Cursos Propuestos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Editar detalles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- seccion detalles y banner img -->
            <section class="section">
                <div class="row gutters-sm">
                    <!-- detalles del curso-->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body py-4 d-flex" id="cardEstatus">
                                <div class="col-sm-8 d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="../assets/images/icons/edit2.svg" width="80" alt="svg ok">
                                    </div>
                                    <div class="ms-3 name">
                                        <h4 class="font-bold">Editando Curso</h4>
                                        <h6 class="text-muted mb-0">Si este curso ya está listo, puede enviarlo para su revisión y aprobación.</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 m-auto">
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary me-1 mb-1 confirmSend"><i class="fas fa-paper-plane"></i> Terminar y Enviar</button>
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
                                        <div class="col-sm-12 d-flex justify-content-end readOny">
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
                                        <div class="avatar avatar-xl" id="avatarAutor">  </div>
                                        <div class="ms-3 name">
                                            <h4 class="font-bold" id="nombreAutor"></h4>
                                            <h6 class="text-muted mb-0">AUTOR</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <span id="imgContainer"></span>
                                <div class="card-body pt-3 readOny">
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
                                    <div class="col readOny">
                                        <form id="inputPDF">
                                            <div class="mb-3">
                                                <label for="pdfFile" class="form-label">Seleccionar nuevo PDF</label>
                                                <input type="hidden" id="idCursoPDF" name="idCursoPDF">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="pdfFile" name="pdfFile" accept=".pdf">
                                                    <button class="btn btn-secondary" type="submit" id="btnSubir">Subir</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <div class="col-sm-12 d-flex justify-content-end" id="containerPDF"></div>
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
                            <div class="col-sm-12 col-md-6 readOny">
                                <span class="position-absolute  mx-3 end-0">
                                <button class="btn btn-primary" onclick="limpiaModalTema()">
                                    <i class="fas fa-plus"></i> Agregar</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive" id="tblTemario"></div>
                </div>
            </section>
            <!-- fin seccion de temario -->

        </div>
        <footer class="text-center text-white ">

            <?php include "modals/modal-update-banner-curso.php" ?>
            <?php include "modals/modal-nuevo-tema.php"?>
            <?php include "modals/modal-pdf-temario.php"?>
            <?php include "modals/modal-edita-curso.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>

<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<script src="./service/profesor/async-rest-p.js"></script>
<script src="./service/profesor/detalles-propuesta.js"></script>
<script src="./service/detalle-curso-gral.js"></script>
<script src="./service/general/tipos.js"></script>
<script src="./service/general/tools.js"></script>
<script src="./service/files-ajax.js"></script>

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