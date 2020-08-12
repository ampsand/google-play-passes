<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LoyaltyClass extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    public $accountIdLabel;
    public $accountNameLabel;
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = 'Walletobjects\Google_Service_Walletobjects_CallbackOptions';
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = 'Walletobjects\Google_Service_Walletobjects_ClassTemplateInfo';
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    protected $discoverableProgramType = 'Walletobjects\Google_Service_Walletobjects_DiscoverableProgram';
    protected $discoverableProgramDataType = '';
    public $enableSmartTap;
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
    protected $localizedAccountIdLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedAccountIdLabelDataType = '';
    protected $localizedAccountNameLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedAccountNameLabelDataType = '';
    protected $localizedIssuerNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedIssuerNameDataType = '';
    protected $localizedProgramNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedProgramNameDataType = '';
    protected $localizedRewardsTierType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedRewardsTierDataType = '';
    protected $localizedRewardsTierLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedRewardsTierLabelDataType = '';
    protected $localizedSecondaryRewardsTierType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedSecondaryRewardsTierDataType = '';
    protected $localizedSecondaryRewardsTierLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedSecondaryRewardsTierLabelDataType = '';
    protected $locationsType = 'Walletobjects\Google_Service_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $messagesType = 'Walletobjects\Google_Service_Walletobjects_Message';
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    protected $programLogoType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $programLogoDataType = '';
    public $programName;
    public $redemptionIssuers;
    protected $reviewType = 'Walletobjects\Google_Service_Walletobjects_Review';
    protected $reviewDataType = '';
    public $reviewStatus;
    public $rewardsTier;
    public $rewardsTierLabel;
    public $secondaryRewardsTier;
    public $secondaryRewardsTierLabel;
    protected $textModulesDataType = 'Walletobjects\Google_Service_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    public $version;
    protected $wordMarkType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $wordMarkDataType = '';


    public function setAccountIdLabel($accountIdLabel)
    {
        $this->accountIdLabel = $accountIdLabel;
    }

    public function getAccountIdLabel()
    {
        return $this->accountIdLabel;
    }

    public function setAccountNameLabel($accountNameLabel)
    {
        $this->accountNameLabel = $accountNameLabel;
    }

    public function getAccountNameLabel()
    {
        return $this->accountNameLabel;
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

    public function setDiscoverableProgram(Walletobjects\Google_Service_Walletobjects_DiscoverableProgram $discoverableProgram)
    {
        $this->discoverableProgram = $discoverableProgram;
    }

    public function getDiscoverableProgram()
    {
        return $this->discoverableProgram;
    }

    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }

    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }

    public function setHeroImage(Walletobjects\Google_Service_Walletobjects_Image $heroImage)
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

    public function setInfoModuleData(Walletobjects\Google_Service_Walletobjects_InfoModuleData $infoModuleData)
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

    public function setLinksModuleData(Walletobjects\Google_Service_Walletobjects_LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }

    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }

    public function setLocalizedAccountIdLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedAccountIdLabel)
    {
        $this->localizedAccountIdLabel = $localizedAccountIdLabel;
    }

    public function getLocalizedAccountIdLabel()
    {
        return $this->localizedAccountIdLabel;
    }

    public function setLocalizedAccountNameLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedAccountNameLabel)
    {
        $this->localizedAccountNameLabel = $localizedAccountNameLabel;
    }

    public function getLocalizedAccountNameLabel()
    {
        return $this->localizedAccountNameLabel;
    }

    public function setLocalizedIssuerName(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }

    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }

    public function setLocalizedProgramName(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedProgramName)
    {
        $this->localizedProgramName = $localizedProgramName;
    }

    public function getLocalizedProgramName()
    {
        return $this->localizedProgramName;
    }

    public function setLocalizedRewardsTier(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedRewardsTier)
    {
        $this->localizedRewardsTier = $localizedRewardsTier;
    }

    public function getLocalizedRewardsTier()
    {
        return $this->localizedRewardsTier;
    }

    public function setLocalizedRewardsTierLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedRewardsTierLabel)
    {
        $this->localizedRewardsTierLabel = $localizedRewardsTierLabel;
    }

    public function getLocalizedRewardsTierLabel()
    {
        return $this->localizedRewardsTierLabel;
    }

    public function setLocalizedSecondaryRewardsTier(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedSecondaryRewardsTier)
    {
        $this->localizedSecondaryRewardsTier = $localizedSecondaryRewardsTier;
    }

    public function getLocalizedSecondaryRewardsTier()
    {
        return $this->localizedSecondaryRewardsTier;
    }

    public function setLocalizedSecondaryRewardsTierLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedSecondaryRewardsTierLabel)
    {
        $this->localizedSecondaryRewardsTierLabel = $localizedSecondaryRewardsTierLabel;
    }

    public function getLocalizedSecondaryRewardsTierLabel()
    {
        return $this->localizedSecondaryRewardsTierLabel;
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

    public function setProgramLogo(Walletobjects\Google_Service_Walletobjects_Image $programLogo)
    {
        $this->programLogo = $programLogo;
    }

    public function getProgramLogo()
    {
        return $this->programLogo;
    }

    public function setProgramName($programName)
    {
        $this->programName = $programName;
    }

    public function getProgramName()
    {
        return $this->programName;
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

    public function setRewardsTier($rewardsTier)
    {
        $this->rewardsTier = $rewardsTier;
    }

    public function getRewardsTier()
    {
        return $this->rewardsTier;
    }

    public function setRewardsTierLabel($rewardsTierLabel)
    {
        $this->rewardsTierLabel = $rewardsTierLabel;
    }

    public function getRewardsTierLabel()
    {
        return $this->rewardsTierLabel;
    }

    public function setSecondaryRewardsTier($secondaryRewardsTier)
    {
        $this->secondaryRewardsTier = $secondaryRewardsTier;
    }

    public function getSecondaryRewardsTier()
    {
        return $this->secondaryRewardsTier;
    }

    public function setSecondaryRewardsTierLabel($secondaryRewardsTierLabel)
    {
        $this->secondaryRewardsTierLabel = $secondaryRewardsTierLabel;
    }

    public function getSecondaryRewardsTierLabel()
    {
        return $this->secondaryRewardsTierLabel;
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

    public function setWordMark(Walletobjects\Google_Service_Walletobjects_Image $wordMark)
    {
        $this->wordMark = $wordMark;
    }

    public function getWordMark()
    {
        return $this->wordMark;
    }
}