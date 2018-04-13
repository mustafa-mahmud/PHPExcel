<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$reader= IOFactory::createReader("Xlsx");
$spreadsheet=$reader->load("xlsx/copy.xlsx");
$spreadsheet->getActiveSheet()->toArray();

$writer= IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/past.xlsx");

