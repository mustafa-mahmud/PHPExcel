<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Html;

$reader=new Html();
$spreadsheet=$reader->load("xlsx/writeHTM.htm");

$highestRow=$spreadsheet->getActiveSheet()->getHighestRow();

for($row=1;$row<=$highestRow;$row++){
    echo $spreadsheet->getActiveSheet()->getCell("A".$row)->getValue()."<br/>";
}
