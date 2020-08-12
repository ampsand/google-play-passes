<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_IssuerListResponse extends \Google_Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = array();
    protected $resourcesType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Issuer';
    protected $resourcesDataType = 'array';


    public function setResources($resources)
    {
        $this->resources = $resources;
    }

    public function getResources()
    {
        return $this->resources;
    }
}