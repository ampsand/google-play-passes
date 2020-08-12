<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_Message extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $body;
    protected $displayIntervalType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TimeInterval';
    protected $displayIntervalDataType = '';
    public $header;
    public $id;
    public $kind;
    protected $localizedBodyType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedBodyDataType = '';
    protected $localizedHeaderType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedHeaderDataType = '';
    public $messageType;


    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setDisplayInterval(Google_Service_Walletobjects_TimeInterval $displayInterval)
    {
        $this->displayInterval = $displayInterval;
    }

    public function getDisplayInterval()
    {
        return $this->displayInterval;
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

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLocalizedBody(Google_Service_Walletobjects_LocalizedString $localizedBody)
    {
        $this->localizedBody = $localizedBody;
    }

    public function getLocalizedBody()
    {
        return $this->localizedBody;
    }

    public function setLocalizedHeader(Google_Service_Walletobjects_LocalizedString $localizedHeader)
    {
        $this->localizedHeader = $localizedHeader;
    }

    public function getLocalizedHeader()
    {
        return $this->localizedHeader;
    }

    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
    }

    public function getMessageType()
    {
        return $this->messageType;
    }
}