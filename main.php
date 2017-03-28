<?php

require_once "vendor/autoload.php";

// načtení konfiguračního souboru
$ds         = DIRECTORY_SEPARATOR;
$dataDir    = getenv("KBC_DATADIR");

//$temp = new Temp();
//$temp->initRunFolder();
//$filename = $temp->createFile("table.csv");
//$csv = new CsvFile($filename->getPathname());

$file = "test";
$csv = new \Keboola\Csv\CsvFile($dataDir."out".$ds."tables".$ds."out_".$file.".csv");
   
$csv->writeRow(["Id", "Name"]);
$csv->writeRow(["1", "test"]);
    
$client->createTable("out.c-daktela-reports", "test", $csv);