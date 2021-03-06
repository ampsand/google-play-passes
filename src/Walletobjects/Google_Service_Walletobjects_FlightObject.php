<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FlightObject extends \Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    protected $appLinkDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_AppLinkData';
    protected $appLinkDataDataType = '';
    protected $barcodeType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Barcode';
    protected $barcodeDataType = '';
    protected $boardingAndSeatingInfoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_BoardingAndSeatingInfo';
    protected $boardingAndSeatingInfoDataType = '';
    public $classId;
    protected $classReferenceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FlightClass';
    protected $classReferenceDataType = '';
    public $disableExpirationNotification;
    public $hasLinkedDevice;
    public $hasUsers;
    public $hexBackgroundColor;
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
    public $passengerName;
    protected $reservationInfoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_ReservationInfo';
    protected $reservationInfoDataType = '';
    protected $securityProgramLogoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Image';
    protected $securityProgramLogoDataType = '';
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

    public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
    {
        $this->barcode = $barcode;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function setBoardingAndSeatingInfo(Google_Service_Walletobjects_BoardingAndSeatingInfo $boardingAndSeatingInfo)
    {
        $this->boardingAndSeatingInfo = $boardingAndSeatingInfo;
    }

    public function getBoardingAndSeatingInfo()
    {
        return $this->boardingAndSeatingInfo;
    }

    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    public function getClassId()
    {
        return $this->classId;
    }

    public function setClassReference(Google_Service_Walletobjects_FlightClass $classReference)
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

    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }

    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
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

    public function setPassengerName($passengerName)
    {
        $this->passengerName = $passengerName;
    }

    public function getPassengerName()
    {
        return $this->passengerName;
    }

    public function setReservationInfo(Google_Service_Walletobjects_ReservationInfo $reservationInfo)
    {
        $this->reservationInfo = $reservationInfo;
    }

    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }

    public function setSecurityProgramLogo(Google_Service_Walletobjects_Image $securityProgramLogo)
    {
        $this->securityProgramLogo = $securityProgramLogo;
    }

    public function getSecurityProgramLogo()
    {
        return $this->securityProgramLogo;
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