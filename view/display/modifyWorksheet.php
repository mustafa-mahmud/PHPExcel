<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$reader= IOFactory::createReader("Xlsx");
$spreadsheet=$reader->load("xlsx/modifySheet.xlsx");

//show specific sheet data
echo $spreadsheet->setActiveSheetIndex(1)->getCell("A1")->getValue();
//use setActiveSheetIndex() for insert data in specific sheet
$spreadsheet->setActiveSheetIndex(0)->setCellValue("B3", "khan");
$writer= IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/modifySheet.xlsx");