<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TransitObject extends Google_Collection
{
    protected $collection_key = 'ticketLegs';
    protected $internal_gapi_mappings = array();
    protected $appLinkDataType = 'Walletobjects\Google_Service_Walletobjects_AppLinkData';
    protected $appLinkDataDataType = '';
    protected $barcodeType = 'Walletobjects\Google_Service_Walletobjects_Barcode';
    protected $barcodeDataType = '';
    public $classId;
    protected $classReferenceType = 'Walletobjects\Google_Service_Walletobjects_TransitClass';
    protected $classReferenceDataType = '';
    public $concessionCategory;
    protected $customConcessionCategoryType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customConcessionCategoryDataType = '';
    protected $customTicketStatusType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $customTicketStatusDataType = '';
    public $disableExpirationNotification;
    public $hasLinkedDevice;
    public $hasUsers;
    public $hexBackgroundColor;
    public $id;
    protected $imageModulesDataType = 'Walletobjects\Google_Service_Walletobjects_ImageModuleData';
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = 'Walletobjects\Google_Service_Walletobjects_InfoModuleData';
    protected $infoModuleDataDataType = '';
    protected $linksModuleDataType = 'Walletobjects\Google_Service_Walletobjects_LinksModuleData';
    protected $linksModuleDataDataType = '';
    protected $locationsType = 'Walletobjects\Google_Service_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $messagesType = 'Walletobjects\Google_Service_Walletobjects_Message';
    protected $messagesDataType = 'array';
    public $passengerNames;
    public $passengerType;
    protected $purchaseDetailsType = 'Walletobjects\Google_Service_Walletobjects_PurchaseDetails';
    protected $purchaseDetailsDataType = '';
    public $smartTapRedemptionValue;
    public $state;
    protected $textModulesDataType = 'Walletobjects\Google_Service_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
    protected $ticketLegType = 'Walletobjects\Google_Service_Walletobjects_TicketLeg';
    protected $ticketLegDataType = '';
    protected $ticketLegsType = 'Walletobjects\Google_Service_Walletobjects_TicketLeg';
    protected $ticketLegsDataType = 'array';
    public $ticketNumber;
    protected $ticketRestrictionsType = 'Walletobjects\Google_Service_Walletobjects_TicketRestrictions';
    protected $ticketRestrictionsDataType = '';
    public $ticketStatus;
    public $tripId;
    public $tripType;
    protected $validTimeIntervalType = 'Walletobjects\Google_Service_Walletobjects_TimeInterval';
    protected $validTimeIntervalDataType = '';
    public $version;


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

    public function setClassReference(Walletobjects\Google_Service_Walletobjects_TransitClass $classReference)
    {
        $this->classReference = $classReference;
    }

    public function getClassReference()
    {
        return $this->classReference;
    }

    public function setConcessionCategory($concessionCategory)
    {
        $this->concessionCategory = $concessionCategory;
    }

    public function getConcessionCategory()
    {
        return $this->concessionCategory;
    }

    public function setCustomConcessionCategory(Walletobjects\Google_Service_Walletobjects_LocalizedString $customConcessionCategory)
    {
        $this->customConcessionCategory = $customConcessionCategory;
    }

    public function getCustomConcessionCategory()
    {
        return $this->customConcessionCategory;
    }

    public function setCustomTicketStatus(Walletobjects\Google_Service_Walletobjects_LocalizedString $customTicketStatus)
    {
        $this->customTicketStatus = $customTicketStatus;
    }

    public function getCustomTicketStatus()
    {
        return $this->customTicketStatus;
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

    public function setInfoModuleData(Walletobjects\Google_Service_Walletobjects_InfoModuleData $infoModuleData)
    {
        $this->infoModuleData = $infoModuleData;
    }

    public function getInfoModuleData()
    {
        return $this->infoModuleData;
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

    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setPassengerNames($passengerNames)
    {
        $this->passengerNames = $passengerNames;
    }

    public function getPassengerNames()
    {
        return $this->passengerNames;
    }

    public function setPassengerType($passengerType)
    {
        $this->passengerType = $passengerType;
    }

    public function getPassengerType()
    {
        return $this->passengerType;
    }

    public function setPurchaseDetails(Walletobjects\Google_Service_Walletobjects_PurchaseDetails $purchaseDetails)
    {
        $this->purchaseDetails = $purchaseDetails;
    }

    public function getPurchaseDetails()
    {
        return $this->purchaseDetails;
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

    public function setTicketLeg(Walletobjects\Google_Service_Walletobjects_TicketLeg $ticketLeg)
    {
        $this->ticketLeg = $ticketLeg;
    }

    public function getTicketLeg()
    {
        return $this->ticketLeg;
    }

    public function setTicketLegs($ticketLegs)
    {
        $this->ticketLegs = $ticketLegs;
    }

    public function getTicketLegs()
    {
        return $this->ticketLegs;
    }

    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
    }

    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    public function setTicketRestrictions(Walletobjects\Google_Service_Walletobjects_TicketRestrictions $ticketRestrictions)
    {
        $this->ticketRestrictions = $ticketRestrictions;
    }

    public function getTicketRestrictions()
    {
        return $this->ticketRestrictions;
    }

    public function setTicketStatus($ticketStatus)
    {
        $this->ticketStatus = $ticketStatus;
    }

    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }

    public function setTripId($tripId)
    {
        $this->tripId = $tripId;
    }

    public function getTripId()
    {
        return $this->tripId;
    }

    public function setTripType($tripType)
    {
        $this->tripType = $tripType;
    }

    public function getTripType()
    {
        return $this->tripType;
    }

    public function setValidTimeInterval(Walletobjects\Google_Service_Walletobjects_TimeInterval $validTimeInterval)
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