<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();

$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(1, 5, "mustafa mahmud");

$writer=new Xlsx($spreadsheet);
$writer->save("xlsx/setCellValueByColumnAndRow.xlsx");
