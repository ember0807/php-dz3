<?php
namespace base;

class AutoInfo
{
    private $originalString;
    private $foundLicensePlates = [];
     public function __construct(string $string)
    {
        $this->originalString = $string;
        //буква 3 цифры 2 буквы и возможно 2-3 цифры
        $pattern = '/([А-Я]\d{3}[А-Я]{2}(\s?\d{2,3})?)/ui';
        if (preg_match_all($pattern, $this->originalString, $matches)) 
        {
            $this->foundLicensePlates = $matches[1];
        }
    }
    public function getFoundLicensePlates(): array
    {
        return $this->foundLicensePlates;
    }
    public function getOriginalString(): string
    {
        return $this->originalString;
    }
}