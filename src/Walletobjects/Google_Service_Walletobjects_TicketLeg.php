<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TicketLeg extends Google_Collection
{
    protected $collection_key = 'ticketSeats';
    protected $internal_gapi_mappings = array();
    public $arrivalDateTime;
    public $carriage;
    public $departureDateTime;
    protected $destinationNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $destinationNameDataType = '';
    public $destinationStationCode;
    protected $fareNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $fareNameDataType = '';
    protected $originNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $originNameDataType = '';
    public $originStationCode;
    public $platform;
    protected $ticketSeatType = 'Walletobjects\Google_Service_Walletobjects_TicketSeat';
    protected $ticketSeatDataType = '';
    protected $ticketSeatsType = 'Walletobjects\Google_Service_Walletobjects_TicketSeat';
    protected $ticketSeatsDataType = 'array';
    protected $transitOperatorNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $transitOperatorNameDataType = '';
    protected $transitTerminusNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $transitTerminusNameDataType = '';
    public $zone;


    public function setArrivalDateTime($arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;
    }

    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    public function setCarriage($carriage)
    {
        $this->carriage = $carriage;
    }

    public function getCarriage()
    {
        return $this->carriage;
    }

    public function setDepartureDateTime($departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;
    }

    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    public function setDestinationName(Walletobjects\Google_Service_Walletobjects_LocalizedString $destinationName)
    {
        $this->destinationName = $destinationName;
    }

    public function getDestinationName()
    {
        return $this->destinationName;
    }

    public function setDestinationStationCode($destinationStationCode)
    {
        $this->destinationStationCode = $destinationStationCode;
    }

    public function getDestinationStationCode()
    {
        return $this->destinationStationCode;
    }

    public function setFareName(Walletobjects\Google_Service_Walletobjects_LocalizedString $fareName)
    {
        $this->fareName = $fareName;
    }

    public function getFareName()
    {
        return $this->fareName;
    }

    public function setOriginName(Walletobjects\Google_Service_Walletobjects_LocalizedString $originName)
    {
        $this->originName = $originName;
    }

    public function getOriginName()
    {
        return $this->originName;
    }

    public function setOriginStationCode($originStationCode)
    {
        $this->originStationCode = $originStationCode;
    }

    public function getOriginStationCode()
    {
        return $this->originStationCode;
    }

    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setTicketSeat(Google_Service_Walletobjects_TicketSeat $ticketSeat)
    {
        $this->ticketSeat = $ticketSeat;
    }

    public function getTicketSeat()
    {
        return $this->ticketSeat;
    }

    public function setTicketSeats($ticketSeats)
    {
        $this->ticketSeats = $ticketSeats;
    }

    public function getTicketSeats()
    {
        return $this->ticketSeats;
    }

    public function setTransitOperatorName(Walletobjects\Google_Service_Walletobjects_LocalizedString $transitOperatorName)
    {
        $this->transitOperatorName = $transitOperatorName;
    }

    public function getTransitOperatorName()
    {
        return $this->transitOperatorName;
    }

    public function setTransitTerminusName(Walletobjects\Google_Service_Walletobjects_LocalizedString $transitTerminusName)
    {
        $this->transitTerminusName = $transitTerminusName;
    }

    public function getTransitTerminusName()
    {
        return $this->transitTerminusName;
    }

    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    public function getZone()
    {
        return $this->zone;
    }
}