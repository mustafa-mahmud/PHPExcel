<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader=new Xlsx();

$reader->setLoadSheetsOnly(["Sheet2","This Sheet 2"]);
$spreadsheet=$reader->load("xlsx/loadSpecificSheet.xlsx");
$show=$spreadsheet->getActiveSheet()->getCell("A1")->getValue();
echo($show);

