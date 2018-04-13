<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$reader= IOFactory::createReader("Xlsx");
$spreadsheet=$reader->load("xlsx/retriveSpecificWorksheet.xlsx");
//get all sheet counts
$allSheetCount=$spreadsheet->getSheetCount();
echo $allSheetCount;
echo "<br/>";
//get all sheet names in array
$allSheetName=$spreadsheet->getSheetNames();
print_r($allSheetName);
echo "<br/>";
//get specific sheet by index
$getSheet=$spreadsheet->getSheet(1)->getCell("A1")->getValue();
echo $getSheet;
echo "<br/>";
//get specific sheet by name
$getSheetByName=$spreadsheet->getSheetByName("Sheet3")->getCell("A1")->getValue();
echo $getSheetByName;
echo "<br/>";
//get active sheet
$getActiveSheet=$spreadsheet->getActiveSheet()->getCell("A1")->getValue();
echo $getActiveSheet;
echo "<br/>";
//change active sheet by index
$changeActiveSheetIndex=$spreadsheet->setActiveSheetIndex(5)->getCell("A1")->getValue();
echo $changeActiveSheetIndex;
echo "<br/>";
//change active sheet by name
$changeActiveSheetName=$spreadsheet->setActiveSheetIndexByName("Sheet5")->getCell("A1")->getValue();
echo $changeActiveSheetName;
echo "<br/>";

