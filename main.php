<?php

require_once "vendor/autoload.php";

$mdText = require_once "/data/README.md";

echo $mdText;

/*
use Keboola\Csv\CsvFile;
use Keboola\StorageApi\Client;

$client = new Client([
    'token' => '432-13435-260a8737d0edd4d9b435b53bc30cb14b0b75cb57',
]);

// načtení konfiguračního souboru
$ds         = DIRECTORY_SEPARATOR;
$dataDir    = getenv("KBC_DATADIR");

//$temp = new Temp();
//$temp->initRunFolder();
//$filename = $temp->createFile("table.csv");
//$csv = new CsvFile($filename->getPathname());

$file = "test";
$csv = new \Keboola\Csv\CsvFile($dataDir."out".$ds."tables".$ds."out_".$file.".csv");

//$csvFile = new CsvFile('./new-table.csv');
   
$csv->writeRow(["Id", "Name"]);
$csv->writeRow(["1", "test"]);
    
$client->createTableAsync("out.c-daktela-reports", "test", $csv);