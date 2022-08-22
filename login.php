<?php $titulo = "Iniciar Sesión" ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php require "./includes/head.php"?>
</head>

<body>
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="./"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                </div>
                <h1>Bienvenido</h1>
                <p class="auth-subtitle mb-sm-3">Ingresar al Sistema de Inscripción de Cursos </p>

                <form id="frm-login">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" id="txtEmail" name="txtEmail" class="form-control form-control-xl" placeholder="Correo" required>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" id="txtPw" name="txtPw" class="form-control form-control-xl" placeholder="Contraseña">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <div class="checkbox">
                            <input type="checkbox" id="chkProf" name="chkProf" class="form-check-input" >
                            <label for="chkProf">Soy un profesor</label>
                        </div>
                    </div>
                    <button class="btn btn-primary mr-3 mt-3 mb-3" type="submit">
                        <i class="fas fa-check-circle"></i> Iniciar</button>
                    <span id="loading" class=" d-none">
                        <img src="https://xn--paalesdetelapuebla-o0b.com/pdf/ajax-loader-bco.gif" width="60" alt="">
                    </span>
                    <span id="loginMje">

                    </span>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <hr>
                    <p class="text-gray-600">
                        ¿No tienes una cuenta? <a href="./register.php" data-bs-toggle="modal"
                                                  data-bs-target="#inlineForm">Regístrate</a>
                    </p>
                    <!--
                    <p><a  href="./forgot-password.php">Olvidé mi contraseña</a> .</p>
                    -->
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>

</div>
<?php include "./modals/modal-add-alumno.php" ?>
</body>
<?php include "./includes/js.php" ?>
</html>