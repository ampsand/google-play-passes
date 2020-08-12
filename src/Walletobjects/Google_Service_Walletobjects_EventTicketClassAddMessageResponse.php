<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_EventTicketClassAddMessageResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourceType = 'Walletobjects\Google_Service_Walletobjects_EventTicketClass';
    protected $resourceDataType = '';


    public function setResource(Walletobjects\Google_Service_Walletobjects_EventTicketClass $resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }
}