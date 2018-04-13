<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();
$fromArray=["Chunk Array","value1","value2","value3","value4"];
$chunkArray= array_chunk($fromArray, 1);
$spreadsheet->getActiveSheet()->fromArray($chunkArray,NULL,"D1");

$writer=new Xlsx($spreadsheet);
$writer->save("xlsx/create_fromArray2.xlsx");

