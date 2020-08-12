<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TransitClass extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = 'Walletobjects\Google_Service_Walletobjects_CallbackOptions';
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = 'Walletobjects\Google_Service_Walletobjects_ClassTemplateInfo';
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    protected $customCarriageLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customCarriageLabelDataType = '';
    protected $customCoachLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customCoachLabelDataType = '';
    protected $customConcessionCategoryLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customConcessionCategoryLabelDataType = '';
    protected $customConfirmationCodeLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customConfirmationCodeLabelDataType = '';
    protected $customDiscountMessageLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customDiscountMessageLabelDataType = '';
    protected $customFareClassLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customFareClassLabelDataType = '';
    protected $customFareNameLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customFareNameLabelDataType = '';
    protected $customOtherRestrictionsLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customOtherRestrictionsLabelDataType = '';
    protected $customPlatformLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customPlatformLabelDataType = '';
    protected $customPurchaseFaceValueLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customPurchaseFaceValueLabelDataType = '';
    protected $customPurchasePriceLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customPurchasePriceLabelDataType = '';
    protected $customPurchaseReceiptNumberLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customPurchaseReceiptNumberLabelDataType = '';
    protected $customRouteRestrictionsDetailsLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customRouteRestrictionsDetailsLabelDataType = '';
    protected $customRouteRestrictionsLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customRouteRestrictionsLabelDataType = '';
    protected $customSeatLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customSeatLabelDataType = '';
    protected $customTicketNumberLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customTicketNumberLabelDataType = '';
    protected $customTimeRestrictionsLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customTimeRestrictionsLabelDataType = '';
    protected $customTransitTerminusNameLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customTransitTerminusNameLabelDataType = '';
    protected $customZoneLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customZoneLabelDataType = '';
    public $enableSingleLegItinerary;
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
    public $languageOverride;
    protected $linksModuleDataType = 'Walletobjects\Google_Service_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $localizedIssuerNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedIssuerNameDataType = '';
    protected $locationsType = 'Walletobjects\Google_Service_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $logoType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $logoDataType = '';
    protected $messagesType = 'Walletobjects\Google_Service_Walletobjects_Message';
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    public $redemptionIssuers;
    protected $reviewType = 'Walletobjects\Google_Service_Walletobjects_Review';
    protected $reviewDataType = '';
    public $reviewStatus;
    protected $textModulesDataType = 'Walletobjects\Google_Service_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    protected $transitOperatorNameType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $transitOperatorNameDataType = '';
    public $transitType;
    public $version;
    protected $watermarkType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $watermarkDataType = '';
    protected $wordMarkType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $wordMarkDataType = '';


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

    public function setCustomCarriageLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customCarriageLabel)
    {
        $this->customCarriageLabel = $customCarriageLabel;
    }

    public function getCustomCarriageLabel()
    {
        return $this->customCarriageLabel;
    }

    public function setCustomCoachLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customCoachLabel)
    {
        $this->customCoachLabel = $customCoachLabel;
    }

    public function getCustomCoachLabel()
    {
        return $this->customCoachLabel;
    }

    public function setCustomConcessionCategoryLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customConcessionCategoryLabel)
    {
        $this->customConcessionCategoryLabel = $customConcessionCategoryLabel;
    }

    public function getCustomConcessionCategoryLabel()
    {
        return $this->customConcessionCategoryLabel;
    }

    public function setCustomConfirmationCodeLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customConfirmationCodeLabel)
    {
        $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
    }

    public function getCustomConfirmationCodeLabel()
    {
        return $this->customConfirmationCodeLabel;
    }

    public function setCustomDiscountMessageLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customDiscountMessageLabel)
    {
        $this->customDiscountMessageLabel = $customDiscountMessageLabel;
    }

    public function getCustomDiscountMessageLabel()
    {
        return $this->customDiscountMessageLabel;
    }

    public function setCustomFareClassLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customFareClassLabel)
    {
        $this->customFareClassLabel = $customFareClassLabel;
    }

    public function getCustomFareClassLabel()
    {
        return $this->customFareClassLabel;
    }

    public function setCustomFareNameLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customFareNameLabel)
    {
        $this->customFareNameLabel = $customFareNameLabel;
    }

    public function getCustomFareNameLabel()
    {
        return $this->customFareNameLabel;
    }

    public function setCustomOtherRestrictionsLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customOtherRestrictionsLabel)
    {
        $this->customOtherRestrictionsLabel = $customOtherRestrictionsLabel;
    }

    public function getCustomOtherRestrictionsLabel()
    {
        return $this->customOtherRestrictionsLabel;
    }

    public function setCustomPlatformLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customPlatformLabel)
    {
        $this->customPlatformLabel = $customPlatformLabel;
    }

    public function getCustomPlatformLabel()
    {
        return $this->customPlatformLabel;
    }

    public function setCustomPurchaseFaceValueLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customPurchaseFaceValueLabel)
    {
        $this->customPurchaseFaceValueLabel = $customPurchaseFaceValueLabel;
    }

    public function getCustomPurchaseFaceValueLabel()
    {
        return $this->customPurchaseFaceValueLabel;
    }

    public function setCustomPurchasePriceLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customPurchasePriceLabel)
    {
        $this->customPurchasePriceLabel = $customPurchasePriceLabel;
    }

    public function getCustomPurchasePriceLabel()
    {
        return $this->customPurchasePriceLabel;
    }

    public function setCustomPurchaseReceiptNumberLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customPurchaseReceiptNumberLabel)
    {
        $this->customPurchaseReceiptNumberLabel = $customPurchaseReceiptNumberLabel;
    }

    public function getCustomPurchaseReceiptNumberLabel()
    {
        return $this->customPurchaseReceiptNumberLabel;
    }

    public function setCustomRouteRestrictionsDetailsLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customRouteRestrictionsDetailsLabel)
    {
        $this->customRouteRestrictionsDetailsLabel = $customRouteRestrictionsDetailsLabel;
    }

    public function getCustomRouteRestrictionsDetailsLabel()
    {
        return $this->customRouteRestrictionsDetailsLabel;
    }

    public function setCustomRouteRestrictionsLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customRouteRestrictionsLabel)
    {
        $this->customRouteRestrictionsLabel = $customRouteRestrictionsLabel;
    }

    public function getCustomRouteRestrictionsLabel()
    {
        return $this->customRouteRestrictionsLabel;
    }

    public function setCustomSeatLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customSeatLabel)
    {
        $this->customSeatLabel = $customSeatLabel;
    }

    public function getCustomSeatLabel()
    {
        return $this->customSeatLabel;
    }

    public function setCustomTicketNumberLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customTicketNumberLabel)
    {
        $this->customTicketNumberLabel = $customTicketNumberLabel;
    }

    public function getCustomTicketNumberLabel()
    {
        return $this->customTicketNumberLabel;
    }

    public function setCustomTimeRestrictionsLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customTimeRestrictionsLabel)
    {
        $this->customTimeRestrictionsLabel = $customTimeRestrictionsLabel;
    }

    public function getCustomTimeRestrictionsLabel()
    {
        return $this->customTimeRestrictionsLabel;
    }

    public function setCustomTransitTerminusNameLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customTransitTerminusNameLabel)
    {
        $this->customTransitTerminusNameLabel = $customTransitTerminusNameLabel;
    }

    public function getCustomTransitTerminusNameLabel()
    {
        return $this->customTransitTerminusNameLabel;
    }

    public function setCustomZoneLabel(Walletobjects\Google_Service_Walletobjects_LocalizedString $customZoneLabel)
    {
        $this->customZoneLabel = $customZoneLabel;
    }

    public function getCustomZoneLabel()
    {
        return $this->customZoneLabel;
    }

    public function setEnableSingleLegItinerary($enableSingleLegItinerary)
    {
        $this->enableSingleLegItinerary = $enableSingleLegItinerary;
    }

    public function getEnableSingleLegItinerary()
    {
        return $this->enableSingleLegItinerary;
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

    public function setLanguageOverride($languageOverride)
    {
        $this->languageOverride = $languageOverride;
    }

    public function getLanguageOverride()
    {
        return $this->languageOverride;
    }

    public function setLinksModuleData(Walletobjects\Google_Service_Walletobjects_LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }

    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }

    public function setLocalizedIssuerName(Walletobjects\Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }

    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }

    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    public function getLocations()
    {
        return $this->locations;
    }

    public function setLogo(Walletobjects\Google_Service_Walletobjects_Image $logo)
    {
        $this->logo = $logo;
    }

    public function getLogo()
    {
        return $this->logo;
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

    public function setRedemptionIssuers($redemptionIssuers)
    {
        $this->redemptionIssuers = $redemptionIssuers;
    }

    public function getRedemptionIssuers()
    {
        return $this->redemptionIssuers;
    }

    public function setReview(Walletobjects\Google_Service_Walletobjects_Review $review)
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

    public function setTransitOperatorName(Walletobjects\Google_Service_Walletobjects_LocalizedString $transitOperatorName)
    {
        $this->transitOperatorName = $transitOperatorName;
    }

    public function getTransitOperatorName()
    {
        return $this->transitOperatorName;
    }

    public function setTransitType($transitType)
    {
        $this->transitType = $transitType;
    }

    public function getTransitType()
    {
        return $this->transitType;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setWatermark(Walletobjects\Google_Service_Walletobjects_Image $watermark)
    {
        $this->watermark = $watermark;
    }

    public function getWatermark()
    {
        return $this->watermark;
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