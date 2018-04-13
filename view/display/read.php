<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

//load setValue.xlsx file
$objPHPExcel= IOFactory::load("xlsx/setValue.xlsx");

//read specific cell value;
$read=$objPHPExcel->getActiveSheet()->getCell("A1")->getValue();
print_r($read);