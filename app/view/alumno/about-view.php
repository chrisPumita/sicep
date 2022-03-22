<?php $titulo = "Acerca de" ?>
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
                <h3>Acerca de</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./home-teach">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Equipo</li>
                    </ol>
                </nav>
            </div>
            <div class="page-content">
                <?php include("./view/credits.php") ?>
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