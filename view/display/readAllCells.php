<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$objPHPExcel= IOFactory::load("xlsx/readAllCell.xlsx");

$highestRow=$objPHPExcel->getActiveSheet()->getHighestRow();

for($row=1;$row<=$highestRow;$row++){
    echo $objPHPExcel->getActiveSheet()->getCell("A".$row)->getValue()."<br/>";
}