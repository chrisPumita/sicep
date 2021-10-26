<?php $titulo = "Registro de Curso" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>

    <style>
        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E
        }

        #msform .action-button {
            width: 150px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }



        #msform .action-button-previous {
            width: 150px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px
        }

        select.list-dt:focus {
            border-bottom: 2px solid var(--primary);
        }

        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #000000
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: relative
        }

        #progressbar #account:before {
            font-family: "Font Awesome 5 Free";
            content: "\f044"
        }

        #progressbar #personal:before {
            font-family: "Font Awesome 5 Free";
            content: "\f03e"
        }

        #progressbar #payment:before {
            font-family: "Font Awesome 5 Free";
            content: "\f15c"
        }

        #progressbar #confirm:before {
            font-family: "Font Awesome 5 Free";
            content: "\f058"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: var(--primary);
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>
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
                        <h3>Envío de solicitud de curso</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Proponer Curso</li>
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
                                    El curso será sujero a revision, para poder ser parovado debe cumplir con todos los
                                    requerimentos que se piden para los cursos, tenga en cuenta que podra realizar cambios
                                    mientras el curso no haya sido aprobado. Puede revisar sus cursos creados en la seccion Personal>Mis Cursos
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <a href="#">
                                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                                            <i class="fas fa-coffee"></i> Mis cursos</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Grupos Actuales
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <!-- MultiStep Form -->
                                    <div class="container-fluid" id="grad1">
                                        <div class="row justify-content-center mt-0">
                                            <div class="col-11 col-sm-9 col-md-7 col-lg-12 text-center p-0 mt-3 mb-2">
                                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                                    <h2><strong>Detalles de la propuesta del nuevo curso</strong></h2>
                                                    <p>Llene toda la información que se requiere.</p>
                                                    <div class="row">
                                                        <div class="col-md-12 mx-0">
                                                            <form id="msform">
                                                                <!-- progressbar -->
                                                                <ul id="progressbar">
                                                                    <li class="active" id="account"><strong>Información Básica</strong></li>
                                                                    <li id="personal"><strong>Configuración</strong></li>
                                                                    <li id="payment"><strong>Documentación</strong></li>
                                                                    <li id="confirm"><strong>Terminar</strong></li>
                                                                </ul> <!-- fieldsets -->
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <div class="row align-items-center">
                                                                                        <div class="col-12">
                                                                                            <h3 class="mb-0">INFORMACIÓN BÁSICA</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <input type="hidden" name="no_cliente" id="no_cliente" value="0">
                                                                                    <h6 class="heading-small text-muted mb-4">Determine la información necesaria que describe al curso</h6>
                                                                                    <div class="pl-lg-4">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-control-label" for="color"><span class="obliga">*</span>Nombre del curso</label>
                                                                                                    <input type="text" id="Curso" class="form-control" required="" placeholder="Nombre del curso">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <label class="form-control-label" for="transmision"><span class="obliga">*</span>Descripción del curso</label>
                                                                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <label class="form-control-label" for="transmision"><span class="obliga">*</span>Objetivo del curso</label>
                                                                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <label class="form-control-label" for="transmision"><span class="obliga">*</span>Dirigido a</label>
                                                                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <label class="form-control-label" for="transmision"><span class="obliga">*</span>Antecendentes</label>
                                                                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="editarModalidad">Modalidad</label>
                                                                                                    <select class="form-control valid" id="editarModalidad" name="editarModalidad">
                                                                                                        <option value="0">Curso</option>
                                                                                                        <option value="1">Diplomado</option>
                                                                                                        <option value="2">Seminario</option>
                                                                                                        <option value="3">Taller</option>
                                                                                                        <option value="4">Otro</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-3">
                                                                                                <div class="form-group">
                                                                                                    <label for="editarSesiones">Numero de Sesiones</label>
                                                                                                    <input class="form-control valid" type="number" value="1" id="editarSesiones" name="editarSesiones" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-3">
                                                                                                <div class="form-group">
                                                                                                    <label for="editarCosto">Costo sugerido</label>
                                                                                                    <input type="number" class="form-control valid" id="editarCosto" min="0" name="editarCosto" requere="" value="0" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr class="my-4">
                                                                                    <!-- Address -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" name="next" class="btn btn-primary next action-button" value="Siguiente" />
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <div class="row align-items-center">
                                                                                        <div class="col-12">
                                                                                            <h3 class="mb-0">VISTA Y TEMARIO</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <h6 class="heading-small text-muted mb-4">Agregue una imagen para distinguir al curso, y un PDF con el temario propuesto, podra modificarlo posteriormente</h6>
                                                                                    <div class="pl-lg-4">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <img src="../assets/images/deposit-img/curso-excel.jpg" class="card-img-top img-thumbnail img-preview" alt="img del curso"  id="preview" >
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <h6 class="card-title"><strong>Imagen del Banner</strong></h6>
                                                                                                <p class="card-text py-1">Debe tener una resolución de 600px por 300px</p>
                                                                                                <div class="form-group">
                                                                                                    <label for="formImg" class="form-label">Seleccione una imagen</label>
                                                                                                    <input class="form-control custom-file-input" type="file" id="preview" accept="image/*">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="formFilePDF" class="form-label">Temario PDF</label>
                                                                                                    <input class="form-control" type="file" id="formFilePDF" accept=".pdf">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr class="my-4">
                                                                                    <!-- Address -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" name="previous" class="btn btn-primary previous action-button-previous" value="Anterior" />
                                                                    <input type="button" name="next" class=" btn btn-primary next action-button" value="Siguiente" />
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-12">
                                                                                    <h3 class="mb-0">DOCUMENTACIÓN</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <h6 class="heading-small text-muted mb-4"> Seleccione la documentacion necesaria para cursar este curso</h6>
                                                                            <div class="pl-lg-4">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="list-group text-lg-start">
                                                                                            <label class="list-group-item">
                                                                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                                                                Comprobante de pago
                                                                                            </label>
                                                                                            <label class="list-group-item">
                                                                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                                                                Credencial Estudiante
                                                                                            </label>
                                                                                            <label class="list-group-item">
                                                                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                                                                Tira de materias
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr class="my-4">
                                                                            <!-- Address -->
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" name="previous" class="btn btn-primary previous action-button-previous " value="Anterior" />
                                                                    <button type="submit" name="make_payment" class="btn btn-primary next action-button">Confirmar</button>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-12">
                                                                                    <h3 class="mb-0">SE HA REGISTRADO UN CURSO</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="pl-lg-4">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-3">
                                                                                        <img src="../assets/images/success.gif" class="fit-image">
                                                                                    </div>
                                                                                </div> <br><br>
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-7 text-center">
                                                                                        <h5>Excelente!</h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row justify-content-center">
                                                                                    <a href="./catalogo.php">
                                                                                        <button type="button" class="btn btn-primary">
                                                                                            <i class="fas fa-coffee"></i> Ir a Mis Cursos
                                                                                        </button>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="row justify-content-center py-5" id="containerBotonesContratos">
                                                                                    <div class="col-lg-12 col-auto" id="botonesContrato">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
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

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>

<!-- scripts opcionales -->
<script src="../assets/js/pages/curso-step.js"></script>

<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {

            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
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