<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_DiscoverableProgram extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $merchantSigninInfoType = 'Walletobjects\Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo';
    protected $merchantSigninInfoDataType = '';
    protected $merchantSignupInfoType = 'Walletobjects\Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo';
    protected $merchantSignupInfoDataType = '';
    public $state;


    public function setMerchantSigninInfo(Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo $merchantSigninInfo)
    {
        $this->merchantSigninInfo = $merchantSigninInfo;
    }

    public function getMerchantSigninInfo()
    {
        return $this->merchantSigninInfo;
    }

    public function setMerchantSignupInfo(Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo $merchantSignupInfo)
    {
        $this->merchantSignupInfo = $merchantSignupInfo;
    }

    public function getMerchantSignupInfo()
    {
        return $this->merchantSignupInfo;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}