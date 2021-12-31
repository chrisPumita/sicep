<?php $titulo = "Grupos Activos" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <style>
        .card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgb(0 35 71 / 10%);
        }

        .card h2.name {
            text-align: center;
            padding: 0 2rem 0.5rem;
            margin: 0;
            color: black;
        }
        .card .title {
            color: #232323;
            font-size: 0.85rem;
            text-align: center;
            padding: 0 2rem 1.2rem;
        }
        .card .actions {
            padding: 0 2rem 1.2rem;
            display: flex;
            flex-direction: column;
            order: 99;
        }
        .card .actions .follow-info {
            padding: 0 0 1rem;
            display: flex;
        }
        .card .actions .follow-info h2 {
            text-align: center;
            width: 50%;
            margin: 0;
            box-sizing: border-box;
        }
        .card .actions .follow-info h2 a {
            text-decoration: none;
            padding: 0.8rem;
            flex-direction: column;
            border-radius: 0.8rem;
            transition: background-color 100ms ease-in-out;
        }
        .card .actions .follow-info h2 a span {
            color: #1c9eff;
            font-weight: bold;
            transform-origin: bottom;
            transition: color 100ms ease-in-out;
        }
        .card .actions .follow-info h2 a small {
            color: #afafaf;
            font-size: 0.85rem;
            font-weight: normal;
        }
        .card .actions .follow-info h2 a:hover {
            background-color: #f2f2f2;
        }
        .card .actions .follow-info h2 a:hover span {
            color: #007ad6;
        }
        .card .actions .follow-btn button {
            color: inherit;
            font: inherit;
            font-weight: bold;
            background-color: #242424;
            width: 100%;
            border: none;
            padding: 1rem;
            outline: none;
            box-sizing: border-box;
            border-radius: 1.5rem/50%;
            transition: background-color 100ms ease-in-out, transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
        }
        .card .actions .follow-btn button:hover {
            background-color: #000000;
            transform: scale(1.1);
        }
        .card .actions .follow-btn button:active {
            background-color: #242424;
            transform: scale(1);
        }
        .card .desc {
            text-align: center;
            padding: 0 2rem 2.5rem;
            order: 100;
            color: black;
            font-size: 15px;
        }
        .hidden {
            overflow: hidden;
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

        <div class="container-fluid">
            <div class="page-content">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Grupos Activos Actualmente</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Grupos Activos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Grupos Activos</h1>
                        <p class="col-md-12 fs-4">Los grupos presentados con<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span> indican
                        que estan listos para ser publicados pero no estan visibles al publico. Los cursos mostrados con<span class="badge  position-relative">
                                <span class="blob yellow" style="position: absolute; top: 0px; left: 10px; right: 0; bottom: 0;"></span></span>
                            significa que requieren acciones.</p>
                        <button class="btn btn-primary btn-lg" type="button">Example button</button>
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filtrar Grupos
                                    </button>
                                    <div class="dropdown-menu" style="margin: 0px;">
                                        <a class="dropdown-item" href="#">En Curso</a>
                                        <a class="dropdown-item" href="#">Disponibles</a>
                                        <a class="dropdown-item" href="#">Ver todos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around flex-wrap py-3" id="containerCardsAsig">
                            <!-- AJAX RESPONSE DINAMIC-->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<script src="./service/general/tipos.js"></script>
<script src="./service/grupos-actuales.js"></script>
<script src="./service/general/tools.js"></script>
</body>

</html>