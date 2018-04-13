<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//create 'spreadsheet'
$spreadsheet=new Spreadsheet();

//set 'spreadsheet' value
$spreadsheet->getActiveSheet()->getCell("A1")->setValue("mithu");
$spreadsheet->getActiveSheet()->getCell("A2")->setValue("khan");

//write 'Xlsx' object
$objPHPExcel=new Xlsx($spreadsheet);
//save 'Xlsx'
$objPHPExcel->save("xlsx/writeXLSX.xlsx");



