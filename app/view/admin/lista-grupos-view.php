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
            border-radius: 20px;
        }
        .card .banner {
            background-repeat: no-repeat;
            background-size: cover;
            height: 11rem;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            box-sizing: border-box;
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
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10">
                                    Estos son los grupos abiertos actualmente, si desea ver grupos anteriores, porfavor de clic
                                    al boton de "Ver Histórico". Si desea ver mas informacion del grupo abierto, asi como descargar
                                    la lista de alumnos, de clic en "Mas Detalles".
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <a href="./historial-grupos">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                                        <i class="fas fa-history"></i> Ver Histórico</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="container-fluid">
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
                <div class="container py-2">
                    <div class="row">
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                       <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                            <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card Grupo Actual 1-->
                        <div class="col-sm-4 col-md-4 py-3">
                            <div class="card bg-light">
                                <span class="badge bg-success position-absolute my-3 mx-3 end-0"><div class="blob green positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO</span>
                                <div class="banner" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                                </div>
                                <span class="badge bg-info ">14 Lugares Disponibles</span>
                                <h5 class="name text-center pt-lg-3">Introdcción al copmputo I</h5>
                                <h6 class="name text-center text-secondary">Prof. Juan Perez Sanchez</h6>
                                <div class="title">
                                    <button type="button" class="btn btn-primary btn-icon icon-left ">
                                        <i class="fas fa-clipboard-check"></i> Solicitudes <span class="badge bg-danger">4</span>
                                    </button></div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>GRUPO:</strong> 1501
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>TIPO:</strong> SEMINARIO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>MODALIDAD:</strong> MIXTO
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong> Cupo: </strong><span> 30 Lugares</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> INSCRIPCIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> INICIO: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> CALIFICACIONES: 23 de enero de 2022 al 14 julio de 2022</strong>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Mas detalles...</button>
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
<?php include "includes/services-js.php"?>

</body>

</html>