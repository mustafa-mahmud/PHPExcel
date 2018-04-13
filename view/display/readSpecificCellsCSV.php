<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Csv;

class MyReadFilter implements PhpOffice\PhpSpreadsheet\Reader\IReadFilter {
    public $cell=array();
    public function readCell($column, $row, $worksheetName = '') {
        if ($row == 1 || ($row >= 5 && $row <= 10)) {
            return array_push($this->cell, $row);
        }
        return FALSE;
    }

}

$reader = new Csv();
$filter=new MyReadFilter();
$reader->setReadFilter($filter);
$spreadsheet=$reader->load("xlsx/readSpecificCellsCSV.csv");
foreach ($filter->cell as $rows){
    echo $spreadsheet->getActiveSheet()->getCell("A".$rows)->getValue()."<br/>";
}
