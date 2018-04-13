<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Html;

$spreadsheet=new Spreadsheet();

$spreadsheet->getActiveSheet()->getCell("A1")->setValue("mithu");
$spreadsheet->getActiveSheet()->getCell("A2")->setValue("khan");

$writer=new Html($spreadsheet);
$writer->save("xlsx/writeHTM.htm");

