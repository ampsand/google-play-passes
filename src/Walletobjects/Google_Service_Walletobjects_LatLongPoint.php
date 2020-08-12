<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LatLongPoint extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $kind;
    public $latitude;
    public $longitude;


    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }
}