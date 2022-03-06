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
            $lista = getListaAlumnosAsignacion($idAsig);
            if ($lista['OficList']>0){
                $listaOficial = $lista['OficList'];
                echo json_encode($listaOficial);
                $spread = new Spreadsheet();
                $spread
                    ->getProperties()
                    ->setCreator("Nombre del autor")
                    ->setLastModifiedBy('Juan Perez')
                    ->setTitle('Excel creado con PhpSpreadSheet')
                    ->setSubject('Excel de prueba')
                    ->setDescription('Excel generado como prueba')
                    ->setKeywords('PHPSpreadsheet')
                    ->setCategory('Categoría de prueba');

                $sheet = $spread->getActiveSheet();
                $sheet->setTitle("Hoja 1");
                    //TUTILOS DEL EXCEL
                $sheet->setCellValueByColumnAndRow(1, 1, "NO");
                $sheet->setCellValueByColumnAndRow(2, 1, "NO CUENTA");
                $sheet->setCellValueByColumnAndRow(3, 1, "PRIMER APELLIDO");
                $sheet->setCellValueByColumnAndRow(4, 1, "SEGUNDO APELLIDO");
                $sheet->setCellValueByColumnAndRow(5, 1, "NOMBRE");
                $sheet->setCellValueByColumnAndRow(6, 1, "CORREO");
                $sheet->setCellValueByColumnAndRow(7, 1, "TELEFONO");
                $sheet->setCellValueByColumnAndRow(8, 1, "CARRERA");
                $contadorArray = 0;
                for ($i = 2; $i < count($listaOficial)+2; $i++){
                    $sheet->setCellValueByColumnAndRow(1,$i, ($contadorArray+1));
                    $sheet->setCellValueByColumnAndRow(2,$i,$listaOficial[$contadorArray]['matricula']);
                    $sheet->setCellValueByColumnAndRow(3,$i,$listaOficial[$contadorArray]['app']);
                    $sheet->setCellValueByColumnAndRow(4,$i,$listaOficial[$contadorArray]['apm']);
                    $sheet->setCellValueByColumnAndRow(5,$i,$listaOficial[$contadorArray]['nombre']);
                    $sheet->setCellValueByColumnAndRow(6,$i,$listaOficial[$contadorArray]['email']);
                    $sheet->setCellValueByColumnAndRow(7,$i,$listaOficial[$contadorArray]['telefono']);
                    $sheet->setCellValueByColumnAndRow(8,$i,$listaOficial[$contadorArray]['carrera_especialidad']);
                    $contadorArray++;
                }

               // $sheet->setCellValue("B2", "Valor en celda B2");
                $writer = new Xlsx($spread);
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
