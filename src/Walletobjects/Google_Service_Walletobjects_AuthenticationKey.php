<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_AuthenticationKey extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $publicKeyPem;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPublicKeyPem($publicKeyPem)
    {
        $this->publicKeyPem = $publicKeyPem;
    }

    public function getPublicKeyPem()
    {
        return $this->publicKeyPem;
    }
}