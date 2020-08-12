<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_GiftCardObject extends \Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    protected $appLinkDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_AppLinkData';
    protected $appLinkDataDataType = '';
    protected $balanceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Money';
    protected $balanceDataType = '';
    protected $balanceUpdateTimeType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_DateTime';
    protected $balanceUpdateTimeDataType = '';
    protected $barcodeType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Barcode';
    protected $barcodeDataType = '';
    public $cardNumber;
    public $classId;
    protected $classReferenceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_GiftCardClass';
    protected $classReferenceDataType = '';
    public $disableExpirationNotification;
    public $eventNumber;
    public $hasLinkedDevice;
    public $hasUsers;
    public $id;
    protected $imageModulesDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_ImageModuleData';
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_InfoModuleData';
    protected $infoModuleDataDataType = '';
    public $kind;
    protected $linksModuleDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $locationsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $messagesType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Message';
    protected $messagesDataType = 'array';
    public $pin;
    public $smartTapRedemptionValue;
    public $state;
    protected $textModulesDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    protected $validTimeIntervalType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TimeInterval';
    protected $validTimeIntervalDataType = '';
    public $version;


    public function setAppLinkData(Google_Service_Walletobjects_AppLinkData $appLinkData)
    {
        $this->appLinkData = $appLinkData;
    }

    public function getAppLinkData()
    {
        return $this->appLinkData;
    }

    public function setBalance(Google_Service_Walletobjects_Money $balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalanceUpdateTime(Google_Service_Walletobjects_DateTime $balanceUpdateTime)
    {
        $this->balanceUpdateTime = $balanceUpdateTime;
    }

    public function getBalanceUpdateTime()
    {
        return $this->balanceUpdateTime;
    }

    public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
    {
        $this->barcode = $barcode;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    public function getClassId()
    {
        return $this->classId;
    }

    public function setClassReference(Google_Service_Walletobjects_GiftCardClass $classReference)
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

    public function setEventNumber($eventNumber)
    {
        $this->eventNumber = $eventNumber;
    }

    public function getEventNumber()
    {
        return $this->eventNumber;
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

    public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
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

    public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
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

    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    public function getPin()
    {
        return $this->pin;
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