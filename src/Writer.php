<?php

namespace oms\xlsxWriter;

class Writer
{
    /** @var XlsxSheetDto[] */
    private array $dtos;

    public function __construct(array $dtos)
    {
        $this->dtos = $dtos;
    }

    public function createAsFile(?string $file = null)
    {
        if (!$file) {
            $file = tempnam(sys_get_temp_dir(), uniqid());
        }
        $writer = new XlsxWriter();
        $i = 1;
        foreach ($this->dtos as $dto) {
            if (!$dto->sheetTitle) {
                $dto->sheetTitle = 'Sheet' . $i;
            }
            $writer->writeSheetHeader($dto->sheetTitle, $dto->headers);
            foreach ($dto->rows as $row) {
                $writer->writeSheetRow($dto->sheetTitle, $row);
            }
            $i++;
        }
        $writer->writeToFile($file);
        
        return $file;
    }
}