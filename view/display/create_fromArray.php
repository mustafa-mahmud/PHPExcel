<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();

$fromArray=[[NULL,2010,2011,2012],["first",20,21,23],["second",24,25,26],["third",27,28,29]];
$spreadsheet->getActiveSheet()->fromArray($fromArray, NULL, "D3");

$writer=new Xlsx($spreadsheet);
$writer->save("xlsx/create_fromArray.xlsx");

