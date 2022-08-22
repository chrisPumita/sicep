<?php
use Luecano\NumeroALetras\NumeroALetras;
function getBodyFicha($ficha){
    if($ficha['DESCUENTO'] == NULL){
        $descuento = 'NO APLICA';
        $totalPago = $ficha['costo_real'];
    }
    else{

        $valorDesc =($ficha['costo_real']*$ficha['DESCUENTO'])/100;
        $descuento = '-$'.$valorDesc.' MX ('.$ficha['DESCUENTO'].'%)';
        $totalPago = $ficha['costo_real'] - $valorDesc;
    }
    return '<body class="bg-light">
<header>
    <div class="container-fluid m-0">
        <div class="row d-flex">
            <div class="col-12 m-0 p-0">
                <img src="../ficha_inscripcion/img/logo.png" width="100%" height="100px" alt="">
            </div>
        </div>
    </div>
</header>
<div class="container-fluid text-center py-3 text-black-50 bg-light">
    <h4>FICHA DE INSCRIPCIÓN</h4>
    <h6><strong>86132000 Concepto: Servicios de Educación y Capacitación en Administración</strong></h6>
    <h5>CENTRO DE CÓMPUTO No. UR: 5130</h5>
</div>
<div class="container">
    <table class="tg" style="undefined;table-layout: fixed; width: 100%">
        <colgroup>
            <col style="width: 150px">
            <col style="width: auto">
            <col style="width: 25px">
            <col style="width: 170px">
        </colgroup>
        <thead>
        <tr>
            <th class="tg-2qwn" colspan="2">1.Datos Personales del alumno</th>
            <th class="tg-lh7k"></th>
            <th class="tg-2qwn">FOLIO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="tg-n50k">NOMBRE:</td>
            <td class="tg-n50k">' .$ficha['nombre'].'</td>
            <td class="tg-lh7k"></td>
            <td class="tg-387i">' .$ficha['id_inscripcion'].'</td>
        </tr>
        <tr>
            <td class="tg-n50k">PRIMER APELLIDO:</td>
            <td class="tg-n50k">' .$ficha['app'].'</td>
            <td class="tg-lh7k"></td>
            <td class="tg-lh7k"></td>
        </tr>
        <tr>
            <td class="tg-n50k">SEGUNDO APELLIDO:</td>
            <td class="tg-n50k">' .$ficha['apm'].'</td>
            <td class="tg-lh7k"></td>
            <td class="tg-2qwn">FECHA </td>
        </tr>
        <tr>
            <td class="tg-n50k">MATRICULA/NO CTA.</td>
            <td class="tg-n50k">' .$ficha['matricula'].'</td>
            <td class="tg-lh7k"></td>
            <td class="tg-387i">'.date('Y-m-d H:i:s').'</td>
        </tr>
        <tr>
            <td class="tg-n50k">CORREO:</td>
            <td class="tg-n50k">' .$ficha['email'].'</td>
            <td class="tg-lh7k"></td>
            <td class="tg-lh7k"></td>
        </tr>
        <tr>
            <td class="tg-n50k">TELEFONO:</td>
            <td class="tg-n50k">' .$ficha['telefono'].'</td>
            <td class="tg-lh7k"></td>
            <td class="tg-lh7k"></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="container bg-light d-flex py-3">
    <table class="tg">
    <thead>
      <tr>
        <th class="tg-9qp4" colspan="2">2. INFORMACION ACADEMICA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-zcwr">CARRERA:</td>
        <td class="tg-zcwr">' .$ficha['carrera_especialidad'].'</td>
      </tr>
      <tr>
        <td class="tg-zcwr">UNIVERSIDAD:</td>
        <td class="tg-zcwr">' .$ficha['nombreUni'].' (' .$ficha['siglas'].')</td>
      </tr>
      <tr>
        <td class="tg-zcwr">PROCEDENCIA:</td>
        <td class="tg-zcwr">' .$ficha['tipo_procedencia'].'</td>
      </tr>
    </tbody>
    </table>
</div>
<div class="container">
    <table class="tg" style="undefined;table-layout: fixed; width: 855px">
    <colgroup>
    <col style="width: 150px">
    <col style="width: 117px">
    <col style="width: 94px">
    <col style="width: 166px">
    <col style="width: 53px">
    <col style="width: 135px">
    <col style="width: 140px">
    </colgroup>
    <thead>
      <tr>
        <th class="tg-idar" colspan="4">Información del '.getTipoCurso($ficha['tipo_curso']).'</th>
        <th class="tg-zv4m"></th>
        <th class="tg-idar" colspan="2">Información de costo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-qldt">'.getTipoCurso($ficha['tipo_curso']).':</td>
        <td class="tg-5ufm" colspan="3">'.$ficha['codigo'].' '.$ficha['nombre_curso'].'   (Modalidad '.getModalidadCurso($ficha['modalidad']).')</td>
        <td class="tg-zv4m"></td>
        <td class="tg-qldt">Costo de curso:</td>
        <td class="tg-5ufm">$ '.$ficha['costo_real'].' MXN</td>
      </tr>
      <tr>
        <td class="tg-qldt">Grupo:</td>
        <td class="tg-5ufm">'.$ficha['grupo'].'</td>
        <td class="tg-qldt">Semestre:</td>
        <td class="tg-5ufm">'.$ficha['semestre'].'</td>
        <td class="tg-zv4m"></td>
        <td class="tg-qldt">Descuento:</td>
        <td class="tg-5ufm">'.$descuento.'</td>
      </tr>
      <tr>
        <td class="tg-qldt">Generación:</td>
        <td class="tg-5ufm">'.$ficha['semestre'].'</td>
        <td class="tg-qldt">Sede:</td>
        <td class="tg-5ufm">'.getCampusCede($ficha['campus_cede']).'</td>
        <td class="tg-zv4m"></td>
        <td class="tg-qldt">Total de pago:</td>
        <td class="tg-5ufm">$ '.$totalPago.' MXN</td>
      </tr>
      <tr>
        <td class="tg-qldt">Profesor:</td>
        <td class="tg-5ufm" colspan="3">'.$ficha['profesor'].'</td>
        <td class="tg-zv4m"></td>
        <td class="tg-5o4h" colspan="2">NOTAS</td>
      </tr>
      <tr>
        <td class="tg-qldt">Inscripción:</td>
        <td class="tg-5ufm" colspan="3">Creada el '.date("d/m/Y H:i:s", strtotime($ficha['fecha_solicitud'])).'</td>
        <td class="tg-zv4m"></td>
        <td class="tg-5ufm" colspan="2">'.$ficha['notas'].'</td>
      </tr>
    </tbody>
    </table>
</div>
<div class="container-fluid contenido">
    <div class="row">
        <div class="col p-3">
            <p class="fst-italic small text-muted lh-1">El pago sólo podrá ser realizado en cajas de la FES-Cuautitlán C-4 y C-1 de lunes a viernes de 9:00 a 18:00 hrs., una vez realizado el pago deberá acudir con
                esta solicitud previamente llena a la planta alta del edificio A7, Sala de de Cómputo en C-4 o al primer piso del Edif. A-1 en Campo 1; presentando original y
                copia de: formato de inscripción, voucher de pago y copia de credencial vigente o tira de materias para alumnos internos y copia de INE para alumnos externos
                para completar su inscripción.</p>
        </div>
    </div>
</div>
<div class="container">
<table class="tg" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 100%">
</colgroup>
<thead>
  <tr>
    <td class="tg-baqh">FIRMA DEL ALUMNO<br><br><br><br><br>
            _________________________________________
            <br>'.$ficha['nombre_completo'].'</td>
  </tr>
</thead>
</table>
</div>
</body>';
}

function getBodyFichaPago($ficha){
    $formatter = new NumeroALetras();
    $formatter->conector = ' PESOS ';
    $sexo = $ficha['sexo'] == 1? "ALUMNA":'ALUMNO';

    if($ficha['DESCUENTO'] == NULL){
        $descuento = 'NO APLICA';
        $totalPago = $ficha['costo_real'];
        $descPago = "";
    }
    else{

        $valorDesc =($ficha['costo_real']*$ficha['DESCUENTO'])/100;
        $descuento = '-$'.$valorDesc.' MX ('.$ficha['DESCUENTO'].'%)';
        $totalPago = $ficha['costo_real'] - $valorDesc;
        $descPago = "Costo del Curso $".$ficha['costo_real'].', aplicando un '.$ficha['DESCUENTO'].'% de descuento';
    }

    $costoFinal =  $formatter->toInvoice($totalPago, 2, "MXN");

    $accounts = '';
    $places_pay = '';


    include("../../config/BANK_KEYS.php");
    foreach ($ACCOUNTS_BANK as $ACCOUNT){
        $accounts .= '<tr>
        <td class="tg-fd96">'.$ACCOUNT[0].'</td>
        <td class="tg-c3ow">'.$ACCOUNT[1].'</td>
      </tr>';
    }


    foreach($PAY_PLACES as $PLACE){
        $places_pay .= $PLACE[0].', ';
    }


    return '<body class="bg-light">
<header>
    <div class="container-fluid m-0">
        <div class="row d-flex">
            <div class="col-12 m-0 p-0">
                <img src="../ficha_inscripcion/img/logo.png" width="100%" height="100px" alt="">
            </div>
        </div>
    </div>
</header>
<div class="container-fluid text-center py-3 text-black-50 bg-light">
    <h4>FICHA DE PAGO DE INSCRIPCIÓN</h4>
    <h6><strong>86132000 Concepto: Servicios de Educación y Capacitación en Administración</strong></h6>
    <h5>CENTRO DE CÓMPUTO No. UR: 5130</h5>
</div>
<div class="container">
    <table class="tg" style="undefined;table-layout: fixed; width: 883px">
    <colgroup>
    <col style="width: 191px">
    <col style="width: 341px">
    <col style="width: 351px">
    </colgroup>
    <thead>
      <tr>
        <th class="tg-6dcg" colspan="2">DATOS DEL ALUMNO</th>
        <th class="tg-zj0t"><span style="font-weight:bold">REFERENCIA</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-5ufm">MATRICULA / NO CTA.:</td>
        <td class="tg-5ufm">'.$ficha['matricula'].'</td>
        <td class="tg-8x4y">'.$ficha['id_inscripcion'].'</td>
      </tr>
      <tr>
        <td class="tg-5ufm">'.$sexo.':</td>
        <td class="tg-5ufm">'.$ficha['nombre_completo'].'</td>
        <td class="tg-6dcg">MONTO A PAGAR</td>
      </tr>
      <tr>
        <td class="tg-5ufm">FECHA DE IMPRESIÓN</td>
        <td class="tg-5ufm">'.date('Y-m-d H:i:s').'</td>
        <td class="tg-mvkq">$'.$totalPago.' MXN</td>
      </tr>
      <tr>
        <td class="tg-6dcg" colspan="2">DETALLES DEL PAGO</td>
        <td class="tg-pr1q">('.$costoFinal.')</td>
      </tr>
      <tr>
        <td class="tg-0lax" colspan="2" rowspan="2">Pago para '.getTipoCurso($ficha['tipo_curso']).' <strong>'.$ficha['nombre_curso'].'</strong> 
        GRUPO '.$ficha['grupo'].', GENERACION '.$ficha['generacion'].', SEMESTRE '.$ficha['semestre'].'<br>'.$descPago.'</td>
        <td class="tg-gns2">CONCEPTO</td>
      </tr>
      <tr>
        <td class="tg-f1u9">PAGO 15125616</td>
      </tr>
    </tbody>
    </table>
</div>
<div class="container bg-light d-flex py-3">
    <table class="tg" style="undefined;table-layout: fixed; width: 988px">
    <colgroup>
    <col style="width: 100px">
    <col style="width: 20px">
    <col style="width: 20px">
    </colgroup>
    <thead>
      <tr>
        <td class="tg-9wq8" rowspan="8">PEGA AQUI EL COMPROBANTE</td>
        <td class="tg-tia3">BANCO</td>
        <td class="tg-tia3">NO DE CUENTA</td>
      </tr>
      '.$accounts.'
      <tr>
        <td class="tg-c6of"><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br></td>
        <td class="tg-0pky"></td>
      </tr>
      <tr>
        <td class="tg-dvpl">REFERENCIA:</td>
        <td class="tg-c3ow">'.$ficha['id_inscripcion'].'</td>
      </tr>
      <tr>
        <td class="tg-1hr0">MONTO A PAGAR:</td>
        <td class="tg-nbj5">$'.$totalPago.' MXN</td>
      </tr>
    </thead>
    </table>
</div>
<div class="container contenido">
    <div class="row">
        <div class="col p-3">
            <p class="fst-italic small text-muted lh-1">Para tu comodidad, ponemos a tu disposición, los numeros de cuenta y referencias para
            que puedas hacer tu pago en cualquiera de los siguientes establecimientos: <strong>'.$places_pay.'</strong></p>
        </div>
    </div>
</div>
</body>';
}


function getTipoCurso($estado){
    //Funcionalidades del tipo_curso
    switch($estado){
        case "0":
            return "Otro";
            break;
        case "1":
            return "Curso";
            break;
        case "2":
            return "Diplomado";
            break;
        case "3":
            return "Seminario";
            break;
        case "4":
            return "Taller";
            break;
        default:
            return "Error";
            break;
    }
}

function getModalidadCurso($tipo){
    //Funcionalidades del tipo_curso
    switch($tipo){
        case "0":
            return "Presencial";
            break;
        case "1":
            return "En Linea";
            break;
        case "2":
            return "Hídrida";
            break;
        default:
            return "No definido";
            break;
    }
}

function getCampusCede($campus) {
    if ($campus=="0")
        return "CAMPO 1";
    else if ($campus=="1")
        return "CAMPO 4";
    else
        return "OTRO";
}