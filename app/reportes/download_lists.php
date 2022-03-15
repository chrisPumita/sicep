<?php
require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../../');
} else
{
    if($_SESSION['typeCount'] == 'admin'){
        if (isset($_POST['id'])){
            $idAsig = $_POST['id'];
            include_once "../control/controlInscripciones.php";
            include_once "../control/controlAsignaciones.php";
            $data = consultaAsignacionesHistoricasCurso(0,1,$idAsig);
            $lista = getListaAlumnosAsignacion($idAsig);
            $ASIG = $data[0];
     //       echo("<pre>".print_r($ASIG,true)."</pre>");
            if ($lista['OficList']>0){

                $listaOficial = $lista['OficList'];
                //echo json_encode($listaOficial);
                $documento = new Spreadsheet();
                $documento
                    ->getProperties()
                    ->setCreator("Nombre del autor")
                    ->setLastModifiedBy(($_SESSION['usuario']))
                    ->setTitle('Excel creado con SICEP')
                    ->setSubject('Lista de Alumnos')
                    ->setDescription('generado con en elsistema de SISEP @Dev: ChrisRCSG')
                    ->setKeywords('SICEP')
                    ->setCategory('UNAM, FESC');
                $sheet = $documento->getActiveSheet();
                $sheet->setTitle("Hoja 1");


                $sheet->setCellValue("E1","Lista Oficial");
                $sheet->getStyle('E1')->getFont()->setBold(true)->setSize(18)->setUnderline(true);
                $sheet->getStyle('D2')->getFont()->setBold(true)->setSize(16);

                $sheet->getStyle('D4:D6')->getFont()->setBold(true)->setSize(14);
                $sheet->getStyle('D5')->getFont()->setBold(true)->setSize(12);
                $sheet->getStyle('C7')->getFont()->setBold(true)->setSize(12);
                $sheet->getStyle('E7')->getFont()->setBold(true)->setSize(12);
                $sheet->getStyle('G7')->getFont()->setBold(true)->setSize(12);
                $sheet->getStyle('I7')->getFont()->setBold(true)->setSize(12);

                $documento->getActiveSheet()->mergeCells('D5:E5')->setTopLeftCell(true);
                $documento->getActiveSheet()->mergeCells('D4:I4')->setTopLeftCell(true);
                $documento->getActiveSheet()->mergeCells('D6:I6')->setTopLeftCell(true);

                $sheet->setCellValue("D2","SICEP - Centro de Computo");


                $sheet->setCellValue("B4", "PROFESOR:");
                $sheet->setCellValue("D4",$ASIG['nombre_completo']);

                $sheet->setCellValue("B5", "No TRABAJADOR:");
                $sheet->setCellValue("D5",$ASIG['no_trabajador']);

                $sheet->setCellValue("B6",  strtoupper(getTipoCurso($ASIG['tipo_curso'])));
                $sheet->setCellValue("D6",$ASIG['codigo'].' '.$ASIG['nombre_curso']);

                $sheet->setCellValue("B7", "GRUPO:");
                $sheet->setCellValue("C7",$ASIG['grupo']);

                $sheet->setCellValue("D7", "SEMESTRE:");
                $sheet->setCellValue("E7",$ASIG['semestre']);

                $sheet->setCellValue("F7", "GENERACION:");
                $sheet->setCellValue("G7",$ASIG['generacion']);

                $sheet->setCellValue("H7", "MODALIDAD:");
                $sheet->setCellValue("I7",getModalidad($ASIG['modalidad']) );

                $row = 10;

                //TUTILOS DEL EXCEL
                $sheet->setCellValueByColumnAndRow(1, $row, "NO");
                $sheet->setCellValueByColumnAndRow(2, $row, "NO CUENTA");
                $sheet->setCellValueByColumnAndRow(3, $row, "PRIMER APELLIDO");
                $sheet->setCellValueByColumnAndRow(4, $row, "SEGUNDO APELLIDO");
                $sheet->setCellValueByColumnAndRow(7, $row, "TELEFONO");
                $sheet->setCellValueByColumnAndRow(8, $row, "CARRERA");
                $contadorArray = 0;
                for ($i = $row; $i < count($listaOficial)+$row; $i++){
                    $sheet->setCellValueByColumnAndRow(1,$i, ($contadorArray+1));
                    $sheet->setCellValueByColumnAndRow(2,$i,$listaOficial[$contadorArray]['matricula']);
                    $sheet->setCellValueByColumnAndRow(3,$i,$listaOficial[$contadorArray]['app']);
                    $sheet->setCellValueByColumnAndRow(4,$i,$listaOficial[$contadorArray]['apm']);
                    $sheet->setCellValueByColumnAndRow(5,$i,$listaOficial[$contadorArray]['nombre']);
                    $sheet->setCellValueByColumnAndRow(6,$i,$listaOficial[$contadorArray]['email']);
                    $sheet->setCellValueByColumnAndRow(7,$i,$listaOficial[$contadorArray]['telefono']);
                    $sheet->setCellValueByColumnAndRow(8,$i,$listaOficial[$contadorArray]['carrera_especialidad']);
                    $contadorArray++;
                } // $sheet->setCellValue("B2", "Valor en celda B2");
                $writer = new Xlsx($documento);
                $writer->save('reporte.xlsx');
                unset($_POST['id']);
                echo '<meta http-equiv="refresh" content="0;url=reporte.xlsx"/>';
            }
        }
        else{
            echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
        }
    }
    else{
        header('Location: ../');
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <style>
        @media print{
            .oculto-impresion, .oculto-impresion *{
                display: none !important;
            }
        }

        .table {
            margin-bottom: 0rem;
            color: var(--primary);
            border-color: var(--primary);
        }

        tbody, td, tfoot, th, thead, tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            color: var(--primary);
        }
    </style>
    <title>Lista de Inscripción Oficial</title>
</head>
<body class="bg-light">
<div class="container-fluid p-5">
    <img src="../../assets/images/logo.png"  width="100px" alt="">
    <h3 class="text-center">Lista Oficial</h3>
    <h6 class="text-center"> SICEP - Centro de Computo</h6>
    <div class="row p-3 text-black">
        <div class="card mb-3">
            <div>
                <div class="row border-dark">
                    <div class="col-sm-2">
                        <h6 class="small">PROFESOR:</h6>
                    </div>
                    <div class="col-sm-4 text-primary" ><?php echo $ASIG['nombre_completo'] ?></div>
                    <div class="col-sm-2">
                        <h6 class="small">No TRAB.:</h6>
                    </div>
                    <div class="col-sm-4 text-primary"><?php echo $ASIG['no_trabajador'] ?></div>
                </div>
                <div class="row border">
                    <div class="col-sm-2">
                        <h6 class="small"><?php echo strtoupper(getTipoCurso($ASIG['tipo_curso'])) ?>:</h6>
                    </div>
                    <div class="col-sm-6 text-primary"><?php echo $ASIG['codigo'].' '.$ASIG['nombre_curso'] ?></div>
                    <div class="col-sm-2"> <h6 class="small">GRUPO:</h6></div>
                    <div class="col-sm-2 text-primary"><?php echo $ASIG['grupo'] ?></div>
                </div>
                <div class="row border">
                    <div class="col-sm-2"> <h6 class="small">SEMESTRE:</h6></div>
                    <div class="col-sm-2 text-primary"><?php echo $ASIG['semestre'] ?></div>
                    <div class="col-sm-2"> <h6 class="small">GENERACIÓN:</h6></div>
                    <div class="col-sm-2 text-primary"><?php echo $ASIG['generacion'] ?></div>
                    <div class="col-sm-2 small"> <h6 class="small">MODALIDAD:</h6></div>
                    <div class="col-sm-2 text-primary"><?php echo getModalidad($ASIG['modalidad']) ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-3">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">No de Cuenta</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Carrera</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ($lista['OficList']>0)
            {
                $listaOficial = $lista['OficList'];
                for($i = 0; $i<count($listaOficial); $i++)
                {
                    echo '<tr>
                                <th scope="row">'.($i+1).'</th>
                                <td>'.$listaOficial[$i]['matricula'].'</td>
                                <td>'.$listaOficial[$i]['nombre_completo'].'</td>
                                <td>'.$listaOficial[$i]['email'].'</td>
                                <td>'.$listaOficial[$i]['carrera_especialidad'].'</td>
                            </tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </div>
<div class="row">
    <div class="col">
        <button class="btn btn-primary oculto-impresion" onclick="javascript:window.print()">Imprimir</button>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


<?php
function getModalidad($modalidad){
    switch($modalidad){
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

function getTipoCurso($tipo){
    switch($tipo){
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
?>