<?php

namespace oms\xlsxWriter;

class XlsxSheetDto
{
    public const FORMAT_INT = 'integer';
    public const FORMAT_STRING = 'string';
    public const FORMAT_DECIMAL_TWO = '0.00';
    public const FORMAT_TEXT = '@';
    public const FORMAT_DATE_TIME = 'DD-MM-YYYY HH:MM';
    public const FORMAT_DATE = 'DD-MM-YYYY';

    public ?string $sheetTitle = null;
    public array $headers = [];
    public array $rows = [];
}