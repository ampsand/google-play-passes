<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $signinWebsiteType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Uri';
    protected $signinWebsiteDataType = '';


    public function setSigninWebsite(Google_Service_Walletobjects_Uri $signinWebsite)
    {
        $this->signinWebsite = $signinWebsite;
    }

    public function getSigninWebsite()
    {
        return $this->signinWebsite;
    }
}