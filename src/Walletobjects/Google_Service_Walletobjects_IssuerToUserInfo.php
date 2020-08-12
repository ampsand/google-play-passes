<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_IssuerToUserInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $action;
    protected $signUpInfoType = 'Walletobjects\Google_Service_Walletobjects_SignUpInfo';
    protected $signUpInfoDataType = '';
    public $url;
    public $value;


    public function setAction($action)
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setSignUpInfo(Google_Service_Walletobjects_SignUpInfo $signUpInfo)
    {
        $this->signUpInfo = $signUpInfo;
    }

    public function getSignUpInfo()
    {
        return $this->signUpInfo;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}