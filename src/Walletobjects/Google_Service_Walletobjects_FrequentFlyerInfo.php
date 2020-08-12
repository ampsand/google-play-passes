<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FrequentFlyerInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $frequentFlyerNumber;
    protected $frequentFlyerProgramNameType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $frequentFlyerProgramNameDataType = '';
    public $kind;


    public function setFrequentFlyerNumber($frequentFlyerNumber)
    {
        $this->frequentFlyerNumber = $frequentFlyerNumber;
    }

    public function getFrequentFlyerNumber()
    {
        return $this->frequentFlyerNumber;
    }

    public function setFrequentFlyerProgramName(Google_Service_Walletobjects_LocalizedString $frequentFlyerProgramName)
    {
        $this->frequentFlyerProgramName = $frequentFlyerProgramName;
    }

    public function getFrequentFlyerProgramName()
    {
        return $this->frequentFlyerProgramName;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }
}