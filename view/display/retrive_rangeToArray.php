<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader=new Xlsx();
$spreadsheet=$reader->load("xlsx/retrive_rangeToArray.xlsx");

$show=$spreadsheet->getActiveSheet()->rangeToArray("B3:D7",NULL,TRUE,TRUE,TRUE);
//if want specific cell to cell value then use below
//$show=$spreadsheet->getActiveSheet()->rangeToArray("D3:D7",NULL,TRUE,TRUE,TRUE);
print_r($show);
