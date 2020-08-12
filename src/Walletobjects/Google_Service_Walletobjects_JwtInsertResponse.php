<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_JwtInsertResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourcesType = 'Walletobjects\Google_Service_Walletobjects_Resources';
    protected $resourcesDataType = '';
    public $saveUri;


    public function setResources(Google_Service_Walletobjects_Resources $resources)
    {
        $this->resources = $resources;
    }

    public function getResources()
    {
        return $this->resources;
    }

    public function setSaveUri($saveUri)
    {
        $this->saveUri = $saveUri;
    }

    public function getSaveUri()
    {
        return $this->saveUri;
    }
}