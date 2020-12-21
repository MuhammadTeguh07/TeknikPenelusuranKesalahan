<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile("data/coba.xlsx");
$reader->setReadDataOnly(true);
$spreadsheet = $reader->load("data/coba.xlsx");

$data = $spreadsheet->getActiveSheet()->toArray();

//print_r($data);
//echo "<br/ >";
	
foreach ($data as $key => $value) {
    foreach ($value as $nilai) 
			echo $nilai." ";
	echo "<br/ >";
}

?>