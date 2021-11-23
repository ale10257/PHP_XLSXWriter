<?php
include_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use oms\xlsxWriter\XlsxWriter;

$writer = new XlsxWriter();

$header = array(
  'c1-text'=>'string',//text
  'c2-text'=>'@',//text
);
$rows = array(
  array('abcdefg','hijklmnop'),
);

$writer->setRightToLeft(true);

$writer->writeSheetHeader('Sheet1', $header);
foreach($rows as $row)
	$writer->writeSheetRow('Sheet1', $row);
$writer->writeToFile('xlsx-right-to-left.xlsx');

