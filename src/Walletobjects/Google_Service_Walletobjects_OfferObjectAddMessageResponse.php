<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_OfferObjectAddMessageResponse extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_OfferObject';
    protected $resourceDataType = '';


    public function setResource(Google_Service_Walletobjects_OfferObject $resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }
}