<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LoyaltyObject extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    public $accountId;
    public $accountName;
    protected $appLinkDataType = 'Walletobjects\Google_Service_Walletobjects_AppLinkData';
    protected $appLinkDataDataType = '';
    protected $barcodeType = 'Walletobjects\Google_Service_Walletobjects_Barcode';
    protected $barcodeDataType = '';
    public $classId;
    protected $classReferenceType = 'Walletobjects\Google_Service_Walletobjects_LoyaltyClass';
    protected $classReferenceDataType = '';
    public $disableExpirationNotification;
    public $hasLinkedDevice;
    public $hasUsers;
    public $id;
    protected $imageModulesDataType = 'Walletobjects\Google_Service_Walletobjects_ImageModuleData';
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = 'Walletobjects\Google_Service_Walletobjects_InfoModuleData';
    protected $infoModuleDataDataType = '';
    public $kind;
    public $linkedOfferIds;
    protected $linksModuleDataType = 'Walletobjects\Google_Service_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $locationsType = 'Walletobjects\Google_Service_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $loyaltyPointsType = 'Walletobjects\Google_Service_Walletobjects_LoyaltyPoints';
    protected $loyaltyPointsDataType = '';
    protected $messagesType = 'Walletobjects\Google_Service_Walletobjects_Message';
    protected $messagesDataType = 'array';
    protected $secondaryLoyaltyPointsType = 'Walletobjects\Google_Service_Walletobjects_LoyaltyPoints';
    protected $secondaryLoyaltyPointsDataType = '';
    public $smartTapRedemptionValue;
    public $state;
    protected $textModulesDataType = 'Walletobjects\Google_Service_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    protected $validTimeIntervalType = 'Walletobjects\Google_Service_Walletobjects_TimeInterval';
    protected $validTimeIntervalDataType = '';
    public $version;


    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    public function getAccountName()
    {
        return $this->accountName;
    }

    public function setAppLinkData(Walletobjects\Google_Service_Walletobjects_AppLinkData $appLinkData)
    {
        $this->appLinkData = $appLinkData;
    }

    public function getAppLinkData()
    {
        return $this->appLinkData;
    }

    public function setBarcode(Walletobjects\Google_Service_Walletobjects_Barcode $barcode)
    {
        $this->barcode = $barcode;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    public function getClassId()
    {
        return $this->classId;
    }

    public function setClassReference(Walletobjects\Google_Service_Walletobjects_LoyaltyClass $classReference)
    {
        $this->classReference = $classReference;
    }

    public function getClassReference()
    {
        return $this->classReference;
    }

    public function setDisableExpirationNotification($disableExpirationNotification)
    {
        $this->disableExpirationNotification = $disableExpirationNotification;
    }

    public function getDisableExpirationNotification()
    {
        return $this->disableExpirationNotification;
    }

    public function setHasLinkedDevice($hasLinkedDevice)
    {
        $this->hasLinkedDevice = $hasLinkedDevice;
    }

    public function getHasLinkedDevice()
    {
        return $this->hasLinkedDevice;
    }

    public function setHasUsers($hasUsers)
    {
        $this->hasUsers = $hasUsers;
    }

    public function getHasUsers()
    {
        return $this->hasUsers;
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

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLinkedOfferIds($linkedOfferIds)
    {
        $this->linkedOfferIds = $linkedOfferIds;
    }

    public function getLinkedOfferIds()
    {
        return $this->linkedOfferIds;
    }

    public function setLinksModuleData(Walletobjects\Google_Service_Walletobjects_LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }

    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }

    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    public function getLocations()
    {
        return $this->locations;
    }

    public function setLoyaltyPoints(Google_Service_Walletobjects_LoyaltyPoints $loyaltyPoints)
    {
        $this->loyaltyPoints = $loyaltyPoints;
    }

    public function getLoyaltyPoints()
    {
        return $this->loyaltyPoints;
    }

    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setSecondaryLoyaltyPoints(Google_Service_Walletobjects_LoyaltyPoints $secondaryLoyaltyPoints)
    {
        $this->secondaryLoyaltyPoints = $secondaryLoyaltyPoints;
    }

    public function getSecondaryLoyaltyPoints()
    {
        return $this->secondaryLoyaltyPoints;
    }

    public function setSmartTapRedemptionValue($smartTapRedemptionValue)
    {
        $this->smartTapRedemptionValue = $smartTapRedemptionValue;
    }

    public function getSmartTapRedemptionValue()
    {
        return $this->smartTapRedemptionValue;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }

    public function getTextModulesData()
    {
        return $this->textModulesData;
    }

    public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
    {
        $this->validTimeInterval = $validTimeInterval;
    }

    public function getValidTimeInterval()
    {
        return $this->validTimeInterval;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
}