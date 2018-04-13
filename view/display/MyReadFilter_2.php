<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class MyReadFilter implements IReadFilter{
    public function readCell($column, $row, $worksheetName = '') {
        echo $row." >row"."<br/>";
        echo $column." >column"."<br/>";
        echo $worksheetName." >worksheet"."<br/>";
    }
}

$filter=new MyReadFilter();
$reader= IOFactory::createReader("Xlsx");
$reader->setReadFilter($filter);
$reader->load("xlsx/MyReadFilter_2.xlsx");
