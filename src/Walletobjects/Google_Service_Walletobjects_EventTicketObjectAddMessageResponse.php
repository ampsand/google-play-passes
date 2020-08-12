<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_EventTicketObjectAddMessageResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourceType = 'Walletobjects\Google_Service_Walletobjects_EventTicketObject';
    protected $resourceDataType = '';


    public function setResource(Walletobjects\Google_Service_Walletobjects_EventTicketObject $resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }
}