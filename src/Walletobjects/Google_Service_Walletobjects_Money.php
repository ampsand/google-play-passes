<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_Money extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $currencyCode;
    public $kind;
    public $micros;


    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setMicros($micros)
    {
        $this->micros = $micros;
    }

    public function getMicros()
    {
        return $this->micros;
    }
}