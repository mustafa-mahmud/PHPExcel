<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet=new Spreadsheet();
$spreadsheet->createSheet();

$writer= IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/createSheet.xlsx");

