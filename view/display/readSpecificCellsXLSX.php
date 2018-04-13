<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class MyReadFilter implements PhpOffice\PhpSpreadsheet\Reader\IReadFilter {
    public $blankArr=[];
    public function readCell($column, $row, $worksheetName = '') {
        if ($row == 4 || ($row >= 10 && $row <= 15)) {
            return array_push($this->blankArr, $row);
        }
        return FALSE;
    }

}

$reader = new Xlsx();
$filter=new MyReadFilter();
$reader->setReadFilter($filter);
$spreadsheet=$reader->load("xlsx/readSpecificCellsXLSX.xlsx");

foreach ($filter->blankArr as $list){
    echo $spreadsheet->getActiveSheet()->getCell("C".$list)->getValue()."<br/>";
}