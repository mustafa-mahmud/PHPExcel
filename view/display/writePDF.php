<?php

include '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Tcpdf;

$spreadsheet=new Spreadsheet();
$spreadsheet->getActiveSheet()->getCell("A1")->setValue("mithu");
$spreadsheet->getActiveSheet()->getCell("A2")->setValue("khan");

$writer=new Tcpdf($spreadsheet);
$writer->save("xlsx/writePDF.pdf");
