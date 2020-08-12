<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_Uri extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $description;
    public $id;
    public $kind;
    protected $localizedDescriptionType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedDescriptionDataType = '';
    public $uri;


    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
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

    public function setLocalizedDescription(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;
    }

    public function getLocalizedDescription()
    {
        return $this->localizedDescription;
    }

    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    public function getUri()
    {
        return $this->uri;
    }
}
