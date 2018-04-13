<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

//set spreadsheet
$spreadsheet=new Spreadsheet();

//set spreadsheet value
$spreadsheet->getActiveSheet()->getCell("A1")->setValue("mustafa");
$spreadsheet->getActiveSheet()->getCell("A2")->setValue("mahmud");

//create spreadsheet
$writer= IOFactory::createWriter($spreadsheet, "Xlsx");//this 'X' must be capitalized
//save spreadsheet
$writer->save("xlsx/setValue.xlsx");
