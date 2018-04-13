<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class MyReadFilter implements IReadFilter {

    public $columnsRows = array("colRow" => array(), "col" => array(), "row" => array());

    public function readCell($column, $row, $worksheetName = '') {
        if (($row == 1 || $row == 2 || $row == 3) || ($row >= 5 && $row <= 15)) {
            array_push($this->columnsRows["colRow"], $column . $row);
            array_push($this->columnsRows["col"], $column);
            array_push($this->columnsRows["row"], $row);
            return true;
        }
        return FALSE;
    }

}

$filter = new MyReadFilter();
$reader = IOFactory::createReader("Csv");
$reader->setReadFilter($filter);
$spreadsheet = $reader->load("xlsx/MyReadFilter_rows.csv");
//print_r($filter->columnsRows);
$processCol = array_unique($filter->columnsRows["col"]);
$processRow = array_unique($filter->columnsRows["row"]);
$arrayValuesRow = array_values($processRow);
asort($processCol);
//create table for showing excell value with nice
echo "<table border=1>";
echo "<tr>";
echo "<thead>";
echo "<th>Row</th>";
echo "<th>Column " . implode("<th>Column ", $processCol) . "</th>";
echo "</thead>";
echo "<tbody>";
for ($i = 0; $i < count($arrayValuesRow); $i++) {
    echo "<tr>";
    echo "<td>";
    echo $arrayValuesRow[$i];
    echo "</td>";
    foreach ($processCol as $colList){
        echo "<td>";
        echo $spreadsheet->getActiveSheet()->getCell($colList.$arrayValuesRow[$i])->getValue();
        echo "</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</tr>";
echo "</table>";
