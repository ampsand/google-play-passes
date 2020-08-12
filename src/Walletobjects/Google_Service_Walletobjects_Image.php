<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_Image extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $sourceUriType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_ImageUri';
    protected $sourceUriDataType = '';


    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setSourceUri(Google_Service_Walletobjects_ImageUri $sourceUri)
    {
        $this->sourceUri = $sourceUri;
    }

    public function getSourceUri()
    {
        return $this->sourceUri;
    }
}
