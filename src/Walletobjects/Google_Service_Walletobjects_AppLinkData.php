<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_AppLinkData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $androidAppLinkInfoType = 'Walletobjects\Google_Service_Walletobjects_AppLinkDataAppLinkInfo';
    protected $androidAppLinkInfoDataType = '';
    protected $iosAppLinkInfoType = 'Walletobjects\Google_Service_Walletobjects_AppLinkDataAppLinkInfo';
    protected $iosAppLinkInfoDataType = '';
    protected $webAppLinkInfoType = 'Walletobjects\Google_Service_Walletobjects_AppLinkDataAppLinkInfo';
    protected $webAppLinkInfoDataType = '';


    public function setAndroidAppLinkInfo(Google_Service_Walletobjects_AppLinkDataAppLinkInfo $androidAppLinkInfo)
    {
        $this->androidAppLinkInfo = $androidAppLinkInfo;
    }

    public function getAndroidAppLinkInfo()
    {
        return $this->androidAppLinkInfo;
    }

    public function setIosAppLinkInfo(Google_Service_Walletobjects_AppLinkDataAppLinkInfo $iosAppLinkInfo)
    {
        $this->iosAppLinkInfo = $iosAppLinkInfo;
    }

    public function getIosAppLinkInfo()
    {
        return $this->iosAppLinkInfo;
    }

    public function setWebAppLinkInfo(Google_Service_Walletobjects_AppLinkDataAppLinkInfo $webAppLinkInfo)
    {
        $this->webAppLinkInfo = $webAppLinkInfo;
    }

    public function getWebAppLinkInfo()
    {
        return $this->webAppLinkInfo;
    }
}