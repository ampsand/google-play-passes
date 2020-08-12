<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_ReservationInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $confirmationCode;
    public $eticketNumber;
    protected $frequentFlyerInfoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FrequentFlyerInfo';
    protected $frequentFlyerInfoDataType = '';
    public $kind;


    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    }

    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }

    public function setEticketNumber($eticketNumber)
    {
        $this->eticketNumber = $eticketNumber;
    }

    public function getEticketNumber()
    {
        return $this->eticketNumber;
    }

    public function setFrequentFlyerInfo(Google_Service_Walletobjects_FrequentFlyerInfo $frequentFlyerInfo)
    {
        $this->frequentFlyerInfo = $frequentFlyerInfo;
    }

    public function getFrequentFlyerInfo()
    {
        return $this->frequentFlyerInfo;
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