<?php
include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$arr=array("a","b","c");

$spreadsheet = new Spreadsheet();
$spreadsheet->createSheet();

$j=0;
for($i=0;$i<count($arr);$i++){
    $j++;
    $spreadsheet->setActiveSheetIndex(1)->setCellValue("A".$j, $arr[$i]);
}

$writer = IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/createSheetBySpreadsheet.xlsx");



