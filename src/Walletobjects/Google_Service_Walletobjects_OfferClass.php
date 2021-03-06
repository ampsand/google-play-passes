<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_OfferClass extends \Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_CallbackOptions';
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_ClassTemplateInfo';
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    public $details;
    public $enableSmartTap;
    public $finePrint;
    protected $helpUriType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Uri';
    protected $helpUriDataType = '';
    protected $heroImageType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Image';
    protected $heroImageDataType = '';
    public $hexBackgroundColor;
    protected $homepageUriType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Uri';
    protected $homepageUriDataType = '';
    public $id;
    protected $imageModulesDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_ImageModuleData';
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_InfoModuleData';
    protected $infoModuleDataDataType = '';
    public $issuerName;
    public $kind;
    protected $linksModuleDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $localizedDetailsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedDetailsDataType = '';
    protected $localizedFinePrintType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedFinePrintDataType = '';
    protected $localizedIssuerNameType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedIssuerNameDataType = '';
    protected $localizedProviderType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedProviderDataType = '';
    protected $localizedShortTitleType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedShortTitleDataType = '';
    protected $localizedTitleType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedTitleDataType = '';
    protected $locationsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $messagesType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Message';
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    public $provider;
    public $redemptionChannel;
    public $redemptionIssuers;
    protected $reviewType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Review';
    protected $reviewDataType = '';
    public $reviewStatus;
    public $shortTitle;
    protected $textModulesDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    public $title;
    protected $titleImageType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Image';
    protected $titleImageDataType = '';
    public $version;
    protected $wordMarkType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Image';
    protected $wordMarkDataType = '';


    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }

    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
    }

    public function setCallbackOptions(Google_Service_Walletobjects_CallbackOptions $callbackOptions)
    {
        $this->callbackOptions = $callbackOptions;
    }

    public function getCallbackOptions()
    {
        return $this->callbackOptions;
    }

    public function setClassTemplateInfo(Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
    {
        $this->classTemplateInfo = $classTemplateInfo;
    }

    public function getClassTemplateInfo()
    {
        return $this->classTemplateInfo;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }

    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }

    public function setFinePrint($finePrint)
    {
        $this->finePrint = $finePrint;
    }

    public function getFinePrint()
    {
        return $this->finePrint;
    }

    public function setHelpUri(Google_Service_Walletobjects_Uri $helpUri)
    {
        $this->helpUri = $helpUri;
    }

    public function getHelpUri()
    {
        return $this->helpUri;
    }

    public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
    {
        $this->heroImage = $heroImage;
    }

    public function getHeroImage()
    {
        return $this->heroImage;
    }

    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }

    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
    }

    public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
    {
        $this->homepageUri = $homepageUri;
    }

    public function getHomepageUri()
    {
        return $this->homepageUri;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setImageModulesData($imageModulesData)
    {
        $this->imageModulesData = $imageModulesData;
    }

    public function getImageModulesData()
    {
        return $this->imageModulesData;
    }

    public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
    {
        $this->infoModuleData = $infoModuleData;
    }

    public function getInfoModuleData()
    {
        return $this->infoModuleData;
    }

    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }

    public function getIssuerName()
    {
        return $this->issuerName;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }

    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }

    public function setLocalizedDetails(Google_Service_Walletobjects_LocalizedString $localizedDetails)
    {
        $this->localizedDetails = $localizedDetails;
    }

    public function getLocalizedDetails()
    {
        return $this->localizedDetails;
    }

    public function setLocalizedFinePrint(Google_Service_Walletobjects_LocalizedString $localizedFinePrint)
    {
        $this->localizedFinePrint = $localizedFinePrint;
    }

    public function getLocalizedFinePrint()
    {
        return $this->localizedFinePrint;
    }

    public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }

    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }

    public function setLocalizedProvider(Google_Service_Walletobjects_LocalizedString $localizedProvider)
    {
        $this->localizedProvider = $localizedProvider;
    }

    public function getLocalizedProvider()
    {
        return $this->localizedProvider;
    }

    public function setLocalizedShortTitle(Google_Service_Walletobjects_LocalizedString $localizedShortTitle)
    {
        $this->localizedShortTitle = $localizedShortTitle;
    }

    public function getLocalizedShortTitle()
    {
        return $this->localizedShortTitle;
    }

    public function setLocalizedTitle(Google_Service_Walletobjects_LocalizedString $localizedTitle)
    {
        $this->localizedTitle = $localizedTitle;
    }

    public function getLocalizedTitle()
    {
        return $this->localizedTitle;
    }

    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    public function getLocations()
    {
        return $this->locations;
    }

    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
    }

    public function getMultipleDevicesAndHoldersAllowedStatus()
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }

    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function setRedemptionChannel($redemptionChannel)
    {
        $this->redemptionChannel = $redemptionChannel;
    }

    public function getRedemptionChannel()
    {
        return $this->redemptionChannel;
    }

    public function setRedemptionIssuers($redemptionIssuers)
    {
        $this->redemptionIssuers = $redemptionIssuers;
    }

    public function getRedemptionIssuers()
    {
        return $this->redemptionIssuers;
    }

    public function setReview(Google_Service_Walletobjects_Review $review)
    {
        $this->review = $review;
    }

    public function getReview()
    {
        return $this->review;
    }

    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }

    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }

    public function setShortTitle($shortTitle)
    {
        $this->shortTitle = $shortTitle;
    }

    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }

    public function getTextModulesData()
    {
        return $this->textModulesData;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitleImage(Google_Service_Walletobjects_Image $titleImage)
    {
        $this->titleImage = $titleImage;
    }

    public function getTitleImage()
    {
        return $this->titleImage;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
    {
        $this->wordMark = $wordMark;
    }

    public function getWordMark()
    {
        return $this->wordMark;
    }
}
