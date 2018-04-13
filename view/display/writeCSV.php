<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

//creat 'spreadsheet'
$spreadsheet=new Spreadsheet();

//set 'spreadsheet' value
$spreadsheet->getActiveSheet()->getCell("B1")->setValue("mithu");
$spreadsheet->getActiveSheet()->getCell("B2")->setValue("khan");

//write 'csv' object
$objPHPExcel=new Csv($spreadsheet);
//save 'csv'
$objPHPExcel->save("xlsx/writeCSV.csv");
