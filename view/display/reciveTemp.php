<?php

include '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

if(isset($_FILES) && !empty($_FILES)){
    $name=$_FILES["temp"]["name"];
    //process name for investigate .xlsx type only accepted
    $type= substr($name, strlen($name)-4);
    if($type==="Xlsx" || $type==="xlsx"){
        //get tmp_name for reading
        $tempName=$_FILES["temp"]["tmp_name"];
        $reader= IOFactory::createReader("Xlsx");
        $spreadsheet=$reader->load($tempName);
        $show=$spreadsheet->getActiveSheet()->toArray();
        print_r($show);
    }
    else{
       echo  "sorry this is not .xlsx file";
    }
}
