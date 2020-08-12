<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_GiftCardObjectAddMessageResponse extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_GiftCardObject';
    protected $resourceDataType = '';


    public function setResource(Google_Service_Walletobjects_GiftCardObject $resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }
}