<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_GiftCardClass extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    public $allowBarcodeRedemption;
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = 'Walletobjects\Google_Service_Walletobjects_CallbackOptions';
    protected $callbackOptionsDataType = '';
    public $cardNumberLabel;
    protected $classTemplateInfoType = 'Walletobjects\Google_Service_Walletobjects_ClassTemplateInfo';
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    public $enableSmartTap;
    public $eventNumberLabel;
    protected $heroImageType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $heroImageDataType = '';
    public $hexBackgroundColor;
    protected $homepageUriType = 'Walletobjects\Google_Service_Walletobjects_Uri';
    protected $homepageUriDataType = '';
    public $id;
    protected $imageModulesDataType = 'Walletobjects\Google_Service_Walletobjects_ImageModuleData';
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = 'Walletobjects\Google_Service_Walletobjects_InfoModuleData';
    protected $infoModuleDataDataType = '';
    public $issuerName;
    public $kind;
    protected $linksModuleDataType = 'Walletobjects\Google_Service_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $localizedCardNumberLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedCardNumberLabelDataType = '';
    protected $localizedEventNumberLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedEventNumberLabelDataType = '';
    protected $localizedIssuerNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedIssuerNameDataType = '';
    protected $localizedMerchantNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedMerchantNameDataType = '';
    protected $localizedPinLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedPinLabelDataType = '';
    protected $locationsType = 'Walletobjects\Google_Service_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    public $merchantName;
    protected $messagesType = 'Walletobjects\Google_Service_Walletobjects_Message';
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    public $pinLabel;
    protected $programLogoType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $programLogoDataType = '';
    public $redemptionIssuers;
    protected $reviewType = 'Walletobjects\Google_Service_Walletobjects_Review';
    protected $reviewDataType = '';
    public $reviewStatus;
    protected $textModulesDataType = 'Walletobjects\Google_Service_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    public $version;
    protected $wordMarkType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $wordMarkDataType = '';


    public function setAllowBarcodeRedemption($allowBarcodeRedemption)
    {
        $this->allowBarcodeRedemption = $allowBarcodeRedemption;
    }

    public function getAllowBarcodeRedemption()
    {
        return $this->allowBarcodeRedemption;
    }

    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }

    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
    }

    public function setCallbackOptions(Walletobjects\Google_Service_Walletobjects_CallbackOptions $callbackOptions)
    {
        $this->callbackOptions = $callbackOptions;
    }

    public function getCallbackOptions()
    {
        return $this->callbackOptions;
    }

    public function setCardNumberLabel($cardNumberLabel)
    {
        $this->cardNumberLabel = $cardNumberLabel;
    }

    public function getCardNumberLabel()
    {
        return $this->cardNumberLabel;
    }

    public function setClassTemplateInfo(Walletobjects\Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
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

    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }

    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }

    public function setEventNumberLabel($eventNumberLabel)
    {
        $this->eventNumberLabel = $eventNumberLabel;
    }

    public function getEventNumberLabel()
    {
        return $this->eventNumberLabel;
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

    public function setLocalizedCardNumberLabel(Google_Service_Walletobjects_LocalizedString $localizedCardNumberLabel)
    {
        $this->localizedCardNumberLabel = $localizedCardNumberLabel;
    }

    public function getLocalizedCardNumberLabel()
    {
        return $this->localizedCardNumberLabel;
    }

    public function setLocalizedEventNumberLabel(Google_Service_Walletobjects_LocalizedString $localizedEventNumberLabel)
    {
        $this->localizedEventNumberLabel = $localizedEventNumberLabel;
    }

    public function getLocalizedEventNumberLabel()
    {
        return $this->localizedEventNumberLabel;
    }

    public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }

    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }

    public function setLocalizedMerchantName(Google_Service_Walletobjects_LocalizedString $localizedMerchantName)
    {
        $this->localizedMerchantName = $localizedMerchantName;
    }

    public function getLocalizedMerchantName()
    {
        return $this->localizedMerchantName;
    }

    public function setLocalizedPinLabel(Google_Service_Walletobjects_LocalizedString $localizedPinLabel)
    {
        $this->localizedPinLabel = $localizedPinLabel;
    }

    public function getLocalizedPinLabel()
    {
        return $this->localizedPinLabel;
    }

    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    public function getLocations()
    {
        return $this->locations;
    }

    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
    }

    public function getMerchantName()
    {
        return $this->merchantName;
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

    public function setPinLabel($pinLabel)
    {
        $this->pinLabel = $pinLabel;
    }

    public function getPinLabel()
    {
        return $this->pinLabel;
    }

    public function setProgramLogo(Google_Service_Walletobjects_Image $programLogo)
    {
        $this->programLogo = $programLogo;
    }

    public function getProgramLogo()
    {
        return $this->programLogo;
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

    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }

    public function getTextModulesData()
    {
        return $this->textModulesData;
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