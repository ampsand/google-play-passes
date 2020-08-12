<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LoyaltyClassAddMessageResponse extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LoyaltyClass';
    protected $resourceDataType = '';


    public function setResource(Google_Service_Walletobjects_LoyaltyClass $resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }
}