<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_AirportInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $airportIataCode;
    protected $airportNameOverrideType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $airportNameOverrideDataType = '';
    public $gate;
    public $kind;
    public $terminal;


    public function setAirportIataCode($airportIataCode)
    {
        $this->airportIataCode = $airportIataCode;
    }

    public function getAirportIataCode()
    {
        return $this->airportIataCode;
    }

    public function setAirportNameOverride(Google_Service_Walletobjects_LocalizedString $airportNameOverride)
    {
        $this->airportNameOverride = $airportNameOverride;
    }

    public function getAirportNameOverride()
    {
        return $this->airportNameOverride;
    }

    public function setGate($gate)
    {
        $this->gate = $gate;
    }

    public function getGate()
    {
        return $this->gate;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;
    }

    public function getTerminal()
    {
        return $this->terminal;
    }
}