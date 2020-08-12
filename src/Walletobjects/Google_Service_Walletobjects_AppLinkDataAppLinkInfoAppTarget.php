<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_AppLinkDataAppLinkInfoAppTarget extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $targetUriType = 'Walletobjects\Google_Service_Walletobjects_Uri';
    protected $targetUriDataType = '';


    public function setTargetUri(Google_Service_Walletobjects_Uri $targetUri)
    {
        $this->targetUri = $targetUri;
    }

    public function getTargetUri()
    {
        return $this->targetUri;
    }
}