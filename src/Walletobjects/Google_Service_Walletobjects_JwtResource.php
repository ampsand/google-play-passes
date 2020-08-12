<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_JwtResource extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $jwt;


    public function setJwt($jwt)
    {
        $this->jwt = $jwt;
    }

    public function getJwt()
    {
        return $this->jwt;
    }
}