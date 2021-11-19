<?php $titulo = "Preferencias" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="../assets/css/preferences.css">

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
                        <h3>Preferencias generales</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Preferencias</li>
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
                                <div class="col-sm-12">
                                Este acceso es sólo para cuentas de administrador con alto acceso, por lo que si desea 
                                que alguien más pueda realizar cambios, es necesario que configure la cuenta en nivel alto.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="row my-4 p-4 bg-white">
                            <div class="col-sm-2 bhoechie-tab-container">
                                <div class="bhoechie-tab-menu">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active text-center">
                                            <img src="../assets/images/icons/depto3.svg" class="card-img-top img-config" alt="">
                                            <h6>Departamentos</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="../assets/images/icons/uni3.svg" class="card-img-top img-config" alt="">
                                            <h6>Universidades</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="../assets/images/icons/comunidad5.svg" class="card-img-top img-config" alt="">
                                            <h6>Procedencias</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="../assets/images/icons/home3.svg" class="card-img-top img-config" alt="">
                                            <h6>Aulas</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="../assets/images/icons/doc1.svg" class="card-img-top img-config" alt="">
                                            <h6>Documentos</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="../assets/images/icons/constancia1.svg" class="card-img-top img-config" alt="">
                                            <h6>Constancias Profesores</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="../assets/images/icons/constancia1.svg" class="card-img-top img-config" alt="">
                                            <h6>Constancias Alumnos</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 my-4">
                                <div class="col-md-12 bhoechie-tab">
                                    <!-- Deptos section -->
                                    <div class="bhoechie-tab-content active">
                                        <div class="text-center">
                                            <img src="../assets/images/icons/depto1.svg" class="card-img-top img-config" alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Departamentos</h2>
                                            <p>
                                                Departamentos disponibles del sistema
                                            </p>
                                        </div>
                                        <div class="container">
                                            <h3>Departamentos almacenados</h3>
                                            <div class="row">
                                                <div id="tbl-containerCursos" class="col-lg-12 overflow-auto table-responsive">
                                                    <table class="table table-hover table-striped table-sm bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbl-cursos">
                                                        </tbody>
                                                    </table>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#departamentos">
                                                    Agregar Nuevo
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Universidades section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="../assets/images/icons/uni1.svg" class="card-img-top img-config" alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Universidades</h2>
                                            <p>
                                                Agregue o edite las Universidades
                                            </p>
                                        </div>
                                        <div class="container">
                                            <h3>Universidades almacenadas</h3>
                                            <div class="row">
                                                <div id="tbl-containerUniversidades" class="col-lg-12 overflow-auto table-responsive">
                                                    <table class="table table-hover table-striped table-sm bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Siglas</th>
                                                                <th scope="col">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbl-universidades">
                                                        </tbody>
                                                    </table>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#universidades">
                                                    Agregar Nueva
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Procedencias section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="../assets/images/icons/comunidad1.svg" class="card-img-top img-config" alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Procedencias de la comunidad</h2>
                                            <p>
                                                Agregue o edite las procedencias principales del sistema
                                            </p>
                                        </div>
                                        <div class="container">
                                            <h3>Procedencias almacenadas</h3>
                                            <div class="row">
                                                <div id="tbl-containerProcedencias" class="col-lg-12 overflow-auto table-responsive">
                                                    <table class="table table-hover table-striped table-sm bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbl-procedencias">
                                                        </tbody>
                                                    </table>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#procedencias">
                                                    Agregar Nueva
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Aulas section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="../assets/images/icons/home1.svg" class="card-img-top img-config" alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Aulas de la Facultad</h2>
                                            <p>
                                                Agregue o edite las aulas disponibles para impartir cursos de forma presencial
                                            </p>
                                        </div>
                                        <div class="container">
                                            <h3>Aulas almacenadas</h3>
                                            <div class="row">
                                                <div id="tbl-containerAulas" class="col-lg-12 overflow-auto table-responsive">
                                                    <table class="table table-hover table-striped table-sm bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Edificio</th>
                                                                <th scope="col">Aula</th>
                                                                <th scope="col">Campo</th>
                                                                <th scope="col">Cupo</th>
                                                                <th scope="col">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbl-aulas">
                                                        </tbody>
                                                    </table>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aulas">
                                                    Agregar Nuevo
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Documentos section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="../assets/images/icons/doc3.svg" class="card-img-top img-config" alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Tipo de Documentos</h2>
                                            <p>
                                                Agregue o edite las documentos que podra solicitar al momento de abrir un grupo
                                            </p>
                                        </div>
                                        <div class="container">
                                            <h3>Documentos almacenados</h3>
                                            <div class="row">
                                                <div id="tbl-containerDocumentos" class="col-lg-12 overflow-auto table-responsive">
                                                    <table class="table table-hover table-striped table-sm bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Formato</th>
                                                                <th scope="col">Peso máximo</th>
                                                                <th scope="col">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbl-docs">
                                                        </tbody>
                                                    </table>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentos">
                                                    Agregar Nuevo
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Constancias section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="../assets/images/icons/constancia2.svg" class="card-img-top img-config" alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Constancias de los Profesores</h2>
                                            <p>
                                                Modifique el estilo de la constancia que se le entregará al profesor.
                                            </p>
                                        </div>
                                        <img src="../assets/images/deposit-img/curso-excel.jpg" class="card-img-top img-thumbnail img-preview" alt="img del curso" id="preview">
                                        <div class="card-body">
                                            <h6 class="card-title"><strong>Plantilla de la Constancia</strong></h6>
                                            <p class="card-text py-1">Debe tener una resolución de 600px por 300px</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="file" class="custom-file-input" id="preview" accept="image/*">
                                                    <label class="custom-file-label" for="preview" data-browse="Elegir">Seleccione una imagen</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#"><button type="button" class="btn btn-warning btn-sec btn-block">Quitar</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                    <!-- Constancias alumno section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="../assets/images/icons/constancia2.svg" class="card-img-top img-config" alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Constancias de los Alumnos</h2>
                                            <p>
                                                Modifique el estilo de la constancia que se le entregará al alumno.
                                            </p>
                                        </div>
                                        <img src="../assets/images/deposit-img/curso-excel.jpg" class="card-img-top img-thumbnail img-preview" alt="img del curso" id="preview">
                                        <div class="card-body">
                                            <h6 class="card-title"><strong>Plantilla de la Constancia</strong></h6>
                                            <p class="card-text py-1">Debe tener una resolución de 600px por 300px</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="file" class="custom-file-input" id="preview" accept="image/*">
                                                    <label class="custom-file-label" for="preview" data-browse="Elegir">Seleccione una imagen</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#"><button type="button" class="btn btn-warning btn-sec btn-block">Quitar</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1>Tabla de preferencias</h1>
                    </div>
                </div>
            </section>

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-preferencias.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<!-- -- INCLUDE SERIVES AJAX --> 
<script src="./service/preferencias-ajax.js"></script>

<script>
    $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });
</script>
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
    
        // Add the following code if you want the name of the file appear on select
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
</body>

</html>