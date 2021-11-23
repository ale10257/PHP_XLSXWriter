<?php
include_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use oms\xlsxWriter\Writer;
use oms\xlsxWriter\XlsxSheetDto;

$dto = new XlsxSheetDto();
$dto->headers = [
    'dateTime' => XlsxSheetDto::FORMAT_DATE_TIME,
    'text' => XlsxSheetDto::FORMAT_TEXT,
    'number' => XlsxSheetDto::FORMAT_INT,
    'numberTwo' => XlsxSheetDto::FORMAT_DECIMAL_TWO
];

for ($i = 0; $i < 10; $i++) {
    $date = new DateTime('now', new DateTimeZone('Europe/Moscow'));
    echo $date->getTimezone()->getName() . PHP_EOL;
    $dto->rows[$i] = [
        $date->format('Y-m-d H:i:s'),
        "jgjhgj jhgjg \n jhgj jhgj mkjhjk kjh jgjkj",
        rand(0, 1000),
        rand(2000, 4000),
    ];
}

$writer = new Writer([$dto]);

$writer->createAsFile(__DIR__ . '/tmp.xlsx');