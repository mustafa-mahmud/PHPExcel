<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\AdvancedValueBinder;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//set Value Binder
Cell::setValueBinder(new AdvancedValueBinder());

//create new spreadsheet object
$spreadsheet=new Spreadsheet();

$spreadsheet->getActiveSheet()->setCellValue("A1", "Percentage Value :");
$spreadsheet->getActiveSheet()->setCellValue("B1", "10%");
$spreadsheet->getActiveSheet()->setCellValue("A2", "Date/Time Value :");
$spreadsheet->getActiveSheet()->setCellValue("B2", "6 April 2018");

$writer=new Xlsx($spreadsheet);
$writer->save("xlsx/valueBinder.xlsx");


