<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TicketSeat extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $coach;
    protected $customFareClassType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customFareClassDataType = '';
    public $fareClass;
    public $seat;
    protected $seatAssignmentType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $seatAssignmentDataType = '';


    public function setCoach($coach)
    {
        $this->coach = $coach;
    }

    public function getCoach()
    {
        return $this->coach;
    }

    public function setCustomFareClass(Walletobjects\Google_Service_Walletobjects_LocalizedString $customFareClass)
    {
        $this->customFareClass = $customFareClass;
    }

    public function getCustomFareClass()
    {
        return $this->customFareClass;
    }

    public function setFareClass($fareClass)
    {
        $this->fareClass = $fareClass;
    }

    public function getFareClass()
    {
        return $this->fareClass;
    }

    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    public function getSeat()
    {
        return $this->seat;
    }

    public function setSeatAssignment(Walletobjects\Google_Service_Walletobjects_LocalizedString $seatAssignment)
    {
        $this->seatAssignment = $seatAssignment;
    }

    public function getSeatAssignment()
    {
        return $this->seatAssignment;
    }
}