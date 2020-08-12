<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FlightHeader extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $carrierType = 'Walletobjects\Google_Service_Walletobjects_FlightCarrier';
    protected $carrierDataType = '';
    public $flightNumber;
    public $kind;
    protected $operatingCarrierType = 'Walletobjects\Google_Service_Walletobjects_FlightCarrier';
    protected $operatingCarrierDataType = '';
    public $operatingFlightNumber;


    public function setCarrier(Walletobjects\Google_Service_Walletobjects_FlightCarrier $carrier)
    {
        $this->carrier = $carrier;
    }

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setOperatingCarrier(Walletobjects\Google_Service_Walletobjects_FlightCarrier $operatingCarrier)
    {
        $this->operatingCarrier = $operatingCarrier;
    }

    public function getOperatingCarrier()
    {
        return $this->operatingCarrier;
    }

    public function setOperatingFlightNumber($operatingFlightNumber)
    {
        $this->operatingFlightNumber = $operatingFlightNumber;
    }

    public function getOperatingFlightNumber()
    {
        return $this->operatingFlightNumber;
    }
}