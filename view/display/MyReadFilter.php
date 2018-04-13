<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class MyReadFilter implements IReadFilter{
    public function readCell($column, $row, $worksheetName = '') {
        return true;
    }
}

$filter=new MyReadFilter();
$reader= IOFactory::createReader("Xlsx");
$reader->setReadFilter($filter);
$spreadsheet=$reader->load("xlsx/MyReadFilter.xlsx");

$show=$spreadsheet->getActiveSheet()->toArray();
print_r($show);
