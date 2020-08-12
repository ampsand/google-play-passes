<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourceType = 'Walletobjects\Google_Service_Walletobjects_LoyaltyObject';
    protected $resourceDataType = '';


    public function setResource(Walletobjects\Google_Service_Walletobjects_LoyaltyObject $resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }
}