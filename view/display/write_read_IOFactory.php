<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet=new Spreadsheet();
$spreadsheet->getActiveSheet()->getCell("A1")->setValue("mithu");
//write from scratch
$writer= IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/write_read_IOFactory.xlsx");
//read which on write just
$reader= IOFactory::createReader("Xlsx");
$show=$reader->load("xlsx/write_read_IOFactory.xlsx");
$result=$show->getActiveSheet()->toArray();
print_r($result);
