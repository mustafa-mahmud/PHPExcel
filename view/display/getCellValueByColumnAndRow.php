<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader=new Xlsx();

$spreadsheet=$reader->load("xlsx/setCellValueByColumnAndRow.xlsx");
echo $spreadsheet->getActiveSheet()->getCellByColumnAndRow(1, 5);


