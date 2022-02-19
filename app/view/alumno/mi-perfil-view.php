<?php $titulo = "Mi Perfil" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "includes/head.php"; ?>
        <!--css-->
    </head>
    <body>
        <div id="app">
            <div id="main" class="layout-horizontal">
                <?php include_once "includes/header.php"; ?>
                <div class="content-wrapper container">
                    <div class="page-heading">
                        <h3>Mi Perfil</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mi Perfil</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Editar información personal</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 border-right">
                                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                            <img class="rounded-circle mt-5" width="150px" id="avatarImagePerfilAlumno">
                                                            <!-- <div class="file btn btn-lg btn-primary">
                                                                <i class="fas fa-edit"></i>
                                                                <input type="file" name="file"/>
                                                            </div> -->
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateFotoPerfil"><i class="fas fa-edit"></i> Editar</button>
                                                            <span class="font-weight-bold" id="nombreAlumnoImg">${NAME}</span><span class="text-black-50" id="correoAlumnoImg">${EMAIL}</span><span> </span>
                                                        </div>
                                                        <form id="frm-update-perfil-alumno">
                                                    <div class="col-md-9 border-right">
                                                        <div class="p-3 py-5">
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                                    <input type="text" id="nombre_alumno_perfil" name="nombre_alumno_perfil" class="form-control" placeholder="Nombre(s)" aria-label="Nombres" required="">
                                                                </div>
                                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                                    <input type="text" id="app_alumno_perfil" name="app_alumno_perfil" class="form-control" placeholder="Primer Apellido" aria-label="Primer Apellido">
                                                                </div>
                                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                                    <input type="text" id="apm_alumno_perfil" name="app_alumno_perfil" class="form-control" placeholder="Segundo Apellido" aria-label="Segundo Apellido">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <input type="text" id="telefono_alumno_perfil" name="telefono_alumno_perfil" class="form-control" placeholder="Teléfono" aria-label="Telefono">
                                                                </div>
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <input type="text" id="correo_alumno_perfil" name="correo_alumno_perfil" class="form-control" placeholder="Correo Electrónico" aria-label="Correo">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <select class="form-control" id="sexo_alumno_perfil" name="sexo_alumno_perfil">
                                                                        <option value="0">Hombre</option>
                                                                        <option value="1">Mujer</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <select class="form-control" id="estado_alumno_perfil" name="estado_alumno_perfil"></select>
                                                                </div>
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <select class="form-control" id="localidad_alumno_perfil" name="localidad_alumno_perfil"></select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <select class="form-control" name="procedencia" id="procedencia"></select>
                                                                </div>
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <input type="text"  id="matricula_alumno_perfil" name="matricula_alumno_perfil" class="form-control" placeholder="Matricula" aria-label="Matricula" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                    <input type="text" id="carrera_alumno_perfil" name="carrera_alumno_perfil" class="form-control" placeholder="Carrera" aria-label="Carrera">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-end">
                                                        <button type="submit" class="btn btn-primary ">Guardar Cambios</button>
                                                    </div>

                                                </div>
                                            </div>
                                            </form>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="row">
                            <div class="col-12 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card">
                                            <div class="card-body p-3 pb-4">
                                                <h5 class="card-title font-weight-bold">Cambiar Contraseña</h5>
                                                <p class="card-text text-muted">Aqui puedes cambiar tu contraseña actual.</p>
                                                <a href="#" data-toggle="modal" data-target="#nuevoProfesor">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#CambiarPsw">Cambiar</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <h4 class="alert-heading">Recuerda...</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <p>Una vez verificado tu documento de situación academica ya no podrás cambiar tu información como la matricula, procedencia y carrera.</p>
                                            <!-- <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
                                        </div>
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body p-3 pb-2">
                                                    <h4 class="card-title">Subir Documento para Verificación</h4>
                                                    <label for="pdfFile" class="form-label">En este apartado puedes subir tu documento para verificar tu situación académica.</label>
                                                    <div class="row">
                                                        <div class="col-sm-10">
                                                            <form id="inputPDF">
                                                                <div class="mb-3">
                                                                    <input type="hidden" id="" name="">
                                                                    <div class="input-group mb-3">
                                                                        <input type="file" class="form-control" id="pdfFile" name="pdfFile" accept=".pdf">
                                                                        <button class="btn btn-secondary" type="submit" id="btnSubir">Subir</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <span id="filePDF" class="me-1 mb-1"></span>
                                                            <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-eye"></i></button>
                                                            <a href="#" class="btn btn-outline-danger me-1 mb-1"><i class="fas fa-times"></i></a>
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
                </div>
                <?php include 'includes/footer.php'; ?>
                <?php include "modals/modal-cambiar-password.php"?>
                <?php include "modals/modal-update-foto-perfil.php"?>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
        <?php include 'includes/js.php'; ?>
        <?php include 'includes/serivices-js.php'; ?>
        <!-- Files JS -->
        <script src="./service/alumnos/perfil.js"></script>
        <script src="./service/global.async.js"></script>
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