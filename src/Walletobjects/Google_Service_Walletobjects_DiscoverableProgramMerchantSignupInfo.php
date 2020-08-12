<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo extends Google_Collection
{
    protected $collection_key = 'signupSharedDatas';
    protected $internal_gapi_mappings = array();
    public $signupSharedDatas;
    protected $signupWebsiteType = 'Walletobjects\Google_Service_Walletobjects_Uri';
    protected $signupWebsiteDataType = '';


    public function setSignupSharedDatas($signupSharedDatas)
    {
        $this->signupSharedDatas = $signupSharedDatas;
    }

    public function getSignupSharedDatas()
    {
        return $this->signupSharedDatas;
    }

    public function setSignupWebsite(Google_Service_Walletobjects_Uri $signupWebsite)
    {
        $this->signupWebsite = $signupWebsite;
    }

    public function getSignupWebsite()
    {
        return $this->signupWebsite;
    }
}