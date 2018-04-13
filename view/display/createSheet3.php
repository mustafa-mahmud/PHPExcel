<?php

include '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$arr2D = array(0 => array("a", "b"), 1 => array("c", "d"), 2 => array("e", "f"));
$spreadsheet = new Spreadsheet();
$spreadsheet->createSheet();

$j = 0;
for ($i = 0; $i < count($arr2D); $i++) {
    $j++;
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("A" . $j, $arr2D[$i][0]);
    $spreadsheet->setActiveSheetIndex(1)->setCellValue("A" . $j, $arr2D[$i][1]);
}

$writer= IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/createSheet3.xlsx");

