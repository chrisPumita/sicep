<?php

function getBodyFicha(){
    return '<body class="bg-light">
<header>
    <div class="container-fluid m-0">
        <div class="row d-flex">
            <div class="">
                <img src="./img/logo.png" width="100%" height="100px" alt="">
            </div>
        </div>
        <div class="row">
            <img src="./img/name_tab.png" width="100%" alt="">
        </div>
    </div>
</header>
<div class="container-fluid text-center py-3 text-black-50 bg-light">
    <h4>FICHA DE INSCRIPCIÓN</h4>
    <h6><strong>86132000 Concepto: Servicios de Educación y Capacitación en Administración</strong></h6>
    <h5>CENTRO DE CÓMPUTO No. UR: 5130</h5>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4 fw-bolder"><strong>25 de Febrero de 2021</strong></div>
    </div>
</div>
<div class="container-fluid contenido">
    <h5 class="text-center fs-6">DATOS DEL CURSO</h5>
    <div class="row py-2">
        <div class="col-4 text fs-6">Nombre del Curso:</div>
        <div class="col-8 border border-3 fs-6"><strong>INICIACION AL COMPUTO I</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-4 text fs-6">Periodo/Fecha de Inicio:</div>
        <div class="col-8 border border-3 fs-6"><strong>23 de Febrero de 2022</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-2 text fs-6">Grupo:</div>
        <div class="col-4 border border-3 fs-6"><strong>XXXXX</strong></div>
        <div class="col-2 text fs-6 text-center">Sala:</div>
        <div class="col-4 border border-3 fs-6"><strong>XXXXX</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-4 text fs-6">Profesor:</div>
        <div class="col-8 border border-3 fs-6"><strong>Juan Perez Sanchez</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-2 text fs-6">Costo:</div>
        <div class="col-4 border border-3 fs-6"><strong>$XXXXX</strong></div>
        <div class="col-2 text fs-6 text-center">Horario:</div>
        <div class="col-4 border border-3 fs-6"><strong>XXXXX</strong></div>
    </div>
    <h5 class="text-center py-1">DATOS PERSONALES</h5>
    <div class="row py-2">
        <div class="col-4 text fs-6">Nombre Completo:</div>
        <div class="col-8 border border-3 fs-6"><strong>Juan Perez Sanchez</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-3 text fs-6">Correo Electrónico:</div>
        <div class="col-4 border border-3 fs-6"><strong>algo@gmail.com</strong></div>
        <div class="col-2 text fs-6 text-center">Teléfono:</div>
        <div class="col-3 border border-3 fs-6"><strong>5555555555</strong></div>
    </div>

    <div class="row py-2">
        <div class="col-2 text fs-6">Procedencia:</div>
        <div class="col-4 border border-3 fs-6"><strong>COMUNIDAD INTERNA</strong></div>
        <div class="col-2 text fs-6 text-center">Grado/Carrera:</div>
        <div class="col-4 border border-3 fs-6"><strong>Informática</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-4 text fs-6">Universidad:</div>
        <div class="col-8 border border-3 fs-6"><strong>Universidad Nacional Autónoma de México (UNAM)</strong></div>
    </div>
    <div class="row">
        <div class="col p-3">
            <p class="fst-italic small text-muted lh-1">El pago sólo podrá ser realizado en cajas de la FES-Cuautitlán C-4 y C-1 de lunes a viernes de 9:00 a 18:00 hrs., una vez realizado el pago deberá acudir con
                esta solicitud previamente llena a la planta alta del edificio A7, Sala de de Cómputo en C-4 o al primer piso del Edif. A-1 en Campo 1; presentando original y
                copia de: formato de inscripción, voucher de pago y copia de credencial vigente o tira de materias para alumnos internos y copia de INE para alumnos externos
                para completar su inscripción.</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row text-center py-4">
        <div class="col-4"></div>
        <div class="col-4 fw-normal  border-top">Firma del Solicitante</div>
        <div class="col-4"></div>
    </div>
</div>
</body>';
}
/*
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <style>
        .bg-light{
            background: #ffffff !important;
        }
        .contenido{
            padding-left: 3rem;
            padding-right: 3rem;
        }
    </style>
</head>
<body class="bg-light">
<header>
    <div class="container-flid m-0">
        <div class="row">
            <div class="col-7 m-0 p-0">
                <img src="./img/logo.png" width="100%" height="100px" alt="">
            </div>
            <div class="col-5 m-0 p-0">
                <img src="./img/computer.png" width="100%"  height="100px" alt="">
            </div>
        </div>
        <div class="row">
            <img src="./img/name_tab.png" width="100%" alt="">
        </div>
    </div>
</header>
<div class="container-fluid text-center py-3 text-black-50 bg-light">
    <h4>FICHA DE INSCRIPCIÓN</h4>
    <h6><strong>86132000 Concepto: Servicios de Educación y Capacitación en Administración</strong></h6>
    <h5>CENTRO DE CÓMPUTO No. UR: 5130</h5>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4 fw-bolder"><strong>25 de Febrero de 2021</strong></div>
    </div>
</div>
<div class="container-fluid contenido">
    <h5 class="text-center fs-6">DATOS DEL CURSO</h5>
    <div class="row py-2">
        <div class="col-4 text fs-6">Nombre del Curso:</div>
        <div class="col-8 border border-3 fs-6"><strong>INICIACION AL COMPUTO I</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-4 text fs-6">Periodo/Fecha de Inicio:</div>
        <div class="col-8 border border-3 fs-6"><strong>23 de Febrero de 2022</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-2 text fs-6">Grupo:</div>
        <div class="col-4 border border-3 fs-6"><strong>XXXXX</strong></div>
        <div class="col-2 text fs-6 text-center">Sala:</div>
        <div class="col-4 border border-3 fs-6"><strong>XXXXX</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-4 text fs-6">Profesor:</div>
        <div class="col-8 border border-3 fs-6"><strong>Juan Perez Sanchez</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-2 text fs-6">Costo:</div>
        <div class="col-4 border border-3 fs-6"><strong>$XXXXX</strong></div>
        <div class="col-2 text fs-6 text-center">Horario:</div>
        <div class="col-4 border border-3 fs-6"><strong>XXXXX</strong></div>
    </div>
    <h5 class="text-center py-1">DATOS PERSONALES</h5>
    <div class="row py-2">
        <div class="col-4 text fs-6">Nombre Completo:</div>
        <div class="col-8 border border-3 fs-6"><strong>Juan Perez Sanchez</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-3 text fs-6">Correo Electrónico:</div>
        <div class="col-4 border border-3 fs-6"><strong>algo@gmail.com</strong></div>
        <div class="col-2 text fs-6 text-center">Teléfono:</div>
        <div class="col-3 border border-3 fs-6"><strong>5555555555</strong></div>
    </div>

    <div class="row py-2">
        <div class="col-2 text fs-6">Procedencia:</div>
        <div class="col-4 border border-3 fs-6"><strong>COMUNIDAD INTERNA</strong></div>
        <div class="col-2 text fs-6 text-center">Grado/Carrera:</div>
        <div class="col-4 border border-3 fs-6"><strong>Informática</strong></div>
    </div>
    <div class="row py-2">
        <div class="col-4 text fs-6">Universidad:</div>
        <div class="col-8 border border-3 fs-6"><strong>Universidad Nacional Autónoma de México (UNAM)</strong></div>
    </div>
    <div class="row">
        <div class="col p-3">
            <p class="fst-italic small text-muted lh-1">El pago sólo podrá ser realizado en cajas de la FES-Cuautitlán C-4 y C-1 de lunes a viernes de 9:00 a 18:00 hrs., una vez realizado el pago deberá acudir con
                esta solicitud previamente llena a la planta alta del edificio A7, Sala de de Cómputo en C-4 o al primer piso del Edif. A-1 en Campo 1; presentando original y
                copia de: formato de inscripción, voucher de pago y copia de credencial vigente o tira de materias para alumnos internos y copia de INE para alumnos externos
                para completar su inscripción.</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row text-center py-4">
        <div class="col-4"></div>
        <div class="col-4 fw-normal  border-top">Firma del Solicitante</div>
        <div class="col-4"></div>
    </div>
</div>
</body>
</html>
 * */
?>

