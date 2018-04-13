<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Csv;

$reader=new Csv();

$spreadsheet=$reader->load("xlsx/readCSV.csv");

$highestRow=$spreadsheet->getActiveSheet()->getHighestRow();

for($row=1;$row<=$highestRow;$row++){
    echo $spreadsheet->getActiveSheet()->getCell("A".$row)->getValue()."<br/>";
}

