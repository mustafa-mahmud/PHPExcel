<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader=new Xlsx();
$spreadsheet=$reader->load("xlsx/read2.xlsx");

$highestRow=$spreadsheet->getActiveSheet()->getHighestRow();

for($row=1;$row<=$highestRow;$row++){
    echo $spreadsheet->getActiveSheet()->getCell("A".$row)->getValue()."<br/>";
}