<?php $titulo = "Recueperar contraseña" ?>
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
                        <a class="" href="./"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1>Recuperar contraseña</h1>
                    <p class="auth-subtitle mb-5">Ingresa tu Email y te enviaremos un link para recuperar tu contraseña</p>

                    <form action="index.html">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Enviar</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>¿Recordaste tu contraseña? <a href="./login.php" class="font-bold">Inicia Sesión</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>