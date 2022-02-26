<?php
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
$sheet->setCellValueByColumnAndRow(1, 1, "Valor en la posición 1, 1");
$sheet->setCellValue("B2", "Valor en celda B2");
$writer = new Xlsx($spread);
$writer->save('reporte.xlsx');

echo '<meta http-equiv="refresh" content="0;url=reporte.xlsx"/>';