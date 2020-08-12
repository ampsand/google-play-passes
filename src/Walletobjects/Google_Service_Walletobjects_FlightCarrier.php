<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FlightCarrier extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $airlineAllianceLogoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Image';
    protected $airlineAllianceLogoDataType = '';
    protected $airlineLogoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Image';
    protected $airlineLogoDataType = '';
    protected $airlineNameType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $airlineNameDataType = '';
    public $carrierIataCode;
    public $carrierIcaoCode;
    public $kind;


    public function setAirlineAllianceLogo(Google_Service_Walletobjects_Image $airlineAllianceLogo)
    {
        $this->airlineAllianceLogo = $airlineAllianceLogo;
    }

    public function getAirlineAllianceLogo()
    {
        return $this->airlineAllianceLogo;
    }

    public function setAirlineLogo(Google_Service_Walletobjects_Image $airlineLogo)
    {
        $this->airlineLogo = $airlineLogo;
    }

    public function getAirlineLogo()
    {
        return $this->airlineLogo;
    }

    public function setAirlineName(Google_Service_Walletobjects_LocalizedString $airlineName)
    {
        $this->airlineName = $airlineName;
    }

    public function getAirlineName()
    {
        return $this->airlineName;
    }

    public function setCarrierIataCode($carrierIataCode)
    {
        $this->carrierIataCode = $carrierIataCode;
    }

    public function getCarrierIataCode()
    {
        return $this->carrierIataCode;
    }

    public function setCarrierIcaoCode($carrierIcaoCode)
    {
        $this->carrierIcaoCode = $carrierIcaoCode;
    }

    public function getCarrierIcaoCode()
    {
        return $this->carrierIcaoCode;
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