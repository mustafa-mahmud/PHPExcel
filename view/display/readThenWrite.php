<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$reader= IOFactory::createReader("Xlsx");
$spreadsheet=$reader->load("xlsx/read2.xlsx");

$writer= IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save("xlsx/dataFrom_read2.xlsx");
