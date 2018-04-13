<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader=new Xlsx();
$spreadsheet=$reader->load("xlsx/write_Xlsx.xlsx");
echo $spreadsheet->getActiveSheet()->getCell("A1")->getValue();
