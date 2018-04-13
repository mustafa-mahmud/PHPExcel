<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


$spreadsheet = new Spreadsheet();
$spreadsheet->createSheet();
$spreadsheet->createSheet();
$spreadsheet->createSheet();

$writer = IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/createSheet2.xlsx");