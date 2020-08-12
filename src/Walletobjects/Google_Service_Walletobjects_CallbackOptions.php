<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_CallbackOptions extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $updateRequestUrl;
    public $url;


    public function setUpdateRequestUrl($updateRequestUrl)
    {
        $this->updateRequestUrl = $updateRequestUrl;
    }

    public function getUpdateRequestUrl()
    {
        return $this->updateRequestUrl;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}