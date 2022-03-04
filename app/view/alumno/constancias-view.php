<?php $titulo = "Constancias" ?>
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
                <h3>Mis constancias</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="./mis-cursos">Mis Cursos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mis Constancias</li>
                        </ol>
                    </nav>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>CONSTANCIAS DISPONIBLES</h4>
                                </div>
                                <div class="card-body px-1">
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <strong>Sin constancias dispoibles</strong>
                                        <p>
                                            Si terminaste tu curso, y aun no aparece tu <strong>constancia</strong>,
                                            es posible que siga en trámite, una vez generada y verificada, aparecerá aqui.
                                        </p>
                                        <p>
                                            Para cualquier duda que tengas puedes comunicarte directamente al centro de computo.
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/js.php'; ?>
<?php include 'includes/serivices-js.php'; ?>
<!-- Files JS -->

</body>
</html>