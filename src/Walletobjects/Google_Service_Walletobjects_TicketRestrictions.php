<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TicketRestrictions extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $otherRestrictionsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $otherRestrictionsDataType = '';
    protected $routeRestrictionsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $routeRestrictionsDataType = '';
    protected $routeRestrictionsDetailsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $routeRestrictionsDetailsDataType = '';
    protected $timeRestrictionsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $timeRestrictionsDataType = '';


    public function setOtherRestrictions(Google_Service_Walletobjects_LocalizedString $otherRestrictions)
    {
        $this->otherRestrictions = $otherRestrictions;
    }

    public function getOtherRestrictions()
    {
        return $this->otherRestrictions;
    }

    public function setRouteRestrictions(Google_Service_Walletobjects_LocalizedString $routeRestrictions)
    {
        $this->routeRestrictions = $routeRestrictions;
    }

    public function getRouteRestrictions()
    {
        return $this->routeRestrictions;
    }

    public function setRouteRestrictionsDetails(Google_Service_Walletobjects_LocalizedString $routeRestrictionsDetails)
    {
        $this->routeRestrictionsDetails = $routeRestrictionsDetails;
    }

    public function getRouteRestrictionsDetails()
    {
        return $this->routeRestrictionsDetails;
    }

    public function setTimeRestrictions(Google_Service_Walletobjects_LocalizedString $timeRestrictions)
    {
        $this->timeRestrictions = $timeRestrictions;
    }

    public function getTimeRestrictions()
    {
        return $this->timeRestrictions;
    }
}