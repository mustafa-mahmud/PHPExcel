<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;//write
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;//read

$spreadsheet=new Spreadsheet();
$spreadsheet->getActiveSheet()->getCell("A1")->setValue("khan");

//write from scratch
$writer= new Xlsx($spreadsheet);
$writer->save("xlsx/write_Xlsx.xlsx");

