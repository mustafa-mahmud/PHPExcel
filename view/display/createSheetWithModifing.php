<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$reader= IOFactory::createReader("Xlsx");
$spreadsheet=$reader->load("xlsx/createSheetWithModifing.xlsx");
//create sheet
$spreadsheet->createSheet();
//get sheet count 
$countSheet=$spreadsheet->getSheetCount();
//in getSheet($countSheet-1), because we want to get latest sheet, we have subtraction(-1)
//because we know sheet count is started form 0; but getSheetCount() start count from 1,
//so we need to less -1;
//getSheetNames() throw an array with sheet names, we add beside her [$countSheet-1] because
//we know the last sheet name
$spreadsheet->getSheet($countSheet-1)->setCellValue("A1", $spreadsheet->getSheetNames()[$countSheet-1]);

$writer= IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/createSheetWithModifing.xlsx");