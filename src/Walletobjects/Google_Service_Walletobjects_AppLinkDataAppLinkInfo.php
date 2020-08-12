<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_AppLinkDataAppLinkInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $appLogoImageType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Image';
    protected $appLogoImageDataType = '';
    protected $appTargetType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_AppLinkDataAppLinkInfoAppTarget';
    protected $appTargetDataType = '';
    protected $descriptionType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $descriptionDataType = '';
    protected $titleType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $titleDataType = '';


    public function setAppLogoImage(Google_Service_Walletobjects_Image $appLogoImage)
    {
        $this->appLogoImage = $appLogoImage;
    }

    public function getAppLogoImage()
    {
        return $this->appLogoImage;
    }

    public function setAppTarget(Google_Service_Walletobjects_AppLinkDataAppLinkInfoAppTarget $appTarget)
    {
        $this->appTarget = $appTarget;
    }

    public function getAppTarget()
    {
        return $this->appTarget;
    }

    public function setDescription(Google_Service_Walletobjects_LocalizedString $description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setTitle(Google_Service_Walletobjects_LocalizedString $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}