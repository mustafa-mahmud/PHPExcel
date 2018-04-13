<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;


class MyReadFilter implements IReadFilter{
    public $arrCol=[];
    public function readCell($column, $row="", $worksheetName = '') {
        if($column==="ABM"){
            array_push($this->arrCol, $column.$row);
        }
    }
}

$reader= IOFactory::createReader("Xlsx");
$filter=new MyReadFilter();
$reader->setReadFilter($filter);
$spreadsheet=$reader->load("xlsx/==AAA===.xlsx");
print_r($filter->arrCol);
