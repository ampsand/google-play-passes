<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TextModuleData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $body;
    public $header;
    public $id;
    protected $localizedBodyType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedBodyDataType = '';
    protected $localizedHeaderType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedHeaderDataType = '';


    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setHeader($header)
    {
        $this->header = $header;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLocalizedBody(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedBody)
    {
        $this->localizedBody = $localizedBody;
    }

    public function getLocalizedBody()
    {
        return $this->localizedBody;
    }

    public function setLocalizedHeader(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedHeader)
    {
        $this->localizedHeader = $localizedHeader;
    }

    public function getLocalizedHeader()
    {
        return $this->localizedHeader;
    }
}