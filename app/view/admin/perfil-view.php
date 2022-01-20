<?php $titulo = "Mi Perfil" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <style>
        .file {
            position: relative;
            overflow: hidden;
            margin-top: -10%;
            width: 50%;
            border: none;
            border-radius: 9px;
            font-size: 1rem;
            background: #212529b8;
        }
         .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
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
                        <h3>Mi Perfil</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mi Perfil</li>
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
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor ipsa,
                                    laudantium mollitia numquam odit porro quia quisquam recusandae sunt! Atque commodi
                                    dignissimos facilis ipsum maiores nisi soluta unde vel?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Editar informacion personal
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img class="rounded-circle mt-5" width="150px" id="avatarImagePerfil">
                                        <button class="btn btn-primary" type="button" id="inputGroupFileAddon04" onclick="editaFotoPerfil()"> <i class="fas fa-edit"></i></i> Editar</button>
                                    <span class="font-weight-bold" id="nombreProfesorImg">Christian</span><span class="text-black-50" id="correoProfesorImg">chris@reckreastudios.com</span><span> </span>
                                </div>
                            </div>
                            <div class="col-md-9 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Editar Perfil</h4>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3 mb-3 mb-sm-0">
                                            <form id="frm-update-perfil-profesor">
                                            <select class="form-control" id="prefijoProfesor" name="prefijoProfesor">
                                                <option value="Lic">Lic.</option>
                                                <option value="Mto">Mto.</option>
                                                <option value="Dr">Dr.</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-9 mb-3 mb-sm-0">
                                            <input type="text" id="nombre_profesor_perfil" name="nombre_profesor_perfil" class="form-control" placeholder="Nombre(s)" aria-label="Nombres" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" id="app_perfil" name="app_perfil" class="form-control" placeholder="Primer Apellido" aria-label="Primer Apellido">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" id="apm_perfil" name="apm_perfil" class="form-control" placeholder="Segundo Apellido" aria-label="Segundo Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <select class="form-control" id="sexo_perfil" name="sexo_perfil">
                                                <option value="0">Hombre</option>
                                                <option value="1">Mujer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" id="telefono_perfil" name="telefono_perfil" class="form-control" placeholder="Teléfono" aria-label="Telefono">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" id="correo_perfil" name="correo_perfil" class="form-control" placeholder="Correo Electrónico" aria-label="Correo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" id="notrabajador_perfil" name="notrabajador_perfil" disabled=""class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <select class="form-control" id="depto_perfil" name="depto_perfil"></select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit" ><i class="fas fa-sync-alt"></i> Actualizar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Cambiar Contraseña</h5>
                                    <p class="card-text text-muted">En este apartado puede cambiar su contraseña actual.</p>
                                    <a href="#">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#CambiarPsw">Cambiar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Cambiar Clave de Confirmación</h5>
                                    <p class="card-text text-muted">En este apartado puede cambiar su clave de confirmación.</p>
                                    <a href="#">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#CambiarClave">Cambiar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Generar Llave Confidencial</h5>
                                    <p class="card-text text-muted">En este apartado puede generar su llave confidencial.</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#cambiarLlave">
                                        <button type="button" class="btn btn-primary btn-sm">Generar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Cambiar Firma Digital</h5>
                                    <p class="card-text text-muted">En este apartado puede cambiar su firma digital.</p>
                                    <a href="#" data-toggle="modal" data-target="#cambiarFirma">
                                        <button type="button" class="btn btn-primary btn-sm">Cambiar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "modals/modal-cambiar-password.php"?>
            <?php include "modals/modal-cambiar-clave.php"?>
            <?php include "modals/modal-llave.php"?>
            <?php include "modals/modal-firma-digital.php"?>
            <?php include "modals/modal-update-foto-perfil.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
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
<!-- Agregar solo cuando exista una tabla para mostrar-->
<script src="./service/asyn_rest.js"></script>
<script src="./service/controlPerfil.js"></script>
</body>

</html>