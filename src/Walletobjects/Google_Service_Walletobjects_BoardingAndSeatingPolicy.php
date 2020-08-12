<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_BoardingAndSeatingPolicy extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $boardingPolicy;
    public $kind;
    public $seatClassPolicy;


    public function setBoardingPolicy($boardingPolicy)
    {
        $this->boardingPolicy = $boardingPolicy;
    }

    public function getBoardingPolicy()
    {
        return $this->boardingPolicy;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setSeatClassPolicy($seatClassPolicy)
    {
        $this->seatClassPolicy = $seatClassPolicy;
    }

    public function getSeatClassPolicy()
    {
        return $this->seatClassPolicy;
    }
}