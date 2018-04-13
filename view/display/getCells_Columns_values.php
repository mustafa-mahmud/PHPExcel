<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader=new Xlsx();
$spreadsheet=$reader->load("xlsx/getCells_Columns_values.xlsx");

$spreadsheet->getActiveSheet()->toArray(NULL,TRUE,TRUE,TRUE);
$highestRow=$spreadsheet->getActiveSheet()->getHighestRow();
$highestColumn=$spreadsheet->getActiveSheet()->getHighestColumn();
$highestColumnIndex= PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);

echo "<table>";
for($row=1;$row<=$highestRow;$row++){
    echo "<tr>";
    for($col=1;$col<=$highestColumnIndex;$col++){
        echo "<td>";
        $value=$spreadsheet->getActiveSheet()->getCellByColumnAndRow($col, $row)->getValue();
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";