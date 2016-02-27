<?php
require_once('autoload.php');
$i = new \levidurfee\StockData\Import();

$i->getFiles()->importFiles();