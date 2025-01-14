<?php
include_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use oms\xlsxWriter\XlsxWriter;

$writer = new XlsxWriter();
$writer->writeSheetHeader('Sheet1', $rowdata = array(300,234,456,789), $col_options = ['widths'=>[10,20,30,40]] );
$writer->writeSheetRow('Sheet1', $rowdata = array(300,234,456,789), $row_options = ['height'=>20] );
$writer->writeSheetRow('Sheet1', $rowdata = array(300,234,456,789), $row_options = ['height'=>30] );
$writer->writeSheetRow('Sheet1', $rowdata = array(300,234,456,789), $row_options = ['height'=>40] );
$writer->writeToFile('xlsx-widths.xlsx');


