<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FlightClass extends \Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array();
    public $allowMultipleUsersPerObject;
    protected $boardingAndSeatingPolicyType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_BoardingAndSeatingPolicy';
    protected $boardingAndSeatingPolicyDataType = '';
    protected $callbackOptionsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_CallbackOptions';
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_ClassTemplateInfo';
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    protected $destinationType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_AirportInfo';
    protected $destinationDataType = '';
    public $enableSmartTap;
    protected $flightHeaderType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FlightHeader';
    protected $flightHeaderDataType = '';
    public $flightStatus;
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
    public $localBoardingDateTime;
    public $localEstimatedOrActualArrivalDateTime;
    public $localEstimatedOrActualDepartureDateTime;
    public $localGateClosingDateTime;
    public $localScheduledArrivalDateTime;
    public $localScheduledDepartureDateTime;
    protected $localizedIssuerNameType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedIssuerNameDataType = '';
    protected $locationsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LatLongPoint';
    protected $locationsDataType = 'array';
    protected $messagesType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Message';
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    protected $originType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_AirportInfo';
    protected $originDataType = '';
    public $redemptionIssuers;
    protected $reviewType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Review';
    protected $reviewDataType = '';
    public $reviewStatus;
    protected $textModulesDataType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TextModuleData';
    protected $textModulesDataDataType = 'array';
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

    public function setBoardingAndSeatingPolicy(Google_Service_Walletobjects_BoardingAndSeatingPolicy $boardingAndSeatingPolicy)
    {
        $this->boardingAndSeatingPolicy = $boardingAndSeatingPolicy;
    }

    public function getBoardingAndSeatingPolicy()
    {
        return $this->boardingAndSeatingPolicy;
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

    public function setDestination(Google_Service_Walletobjects_AirportInfo $destination)
    {
        $this->destination = $destination;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }

    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }

    public function setFlightHeader(Google_Service_Walletobjects_FlightHeader $flightHeader)
    {
        $this->flightHeader = $flightHeader;
    }

    public function getFlightHeader()
    {
        return $this->flightHeader;
    }

    public function setFlightStatus($flightStatus)
    {
        $this->flightStatus = $flightStatus;
    }

    public function getFlightStatus()
    {
        return $this->flightStatus;
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

    public function setLocalBoardingDateTime($localBoardingDateTime)
    {
        $this->localBoardingDateTime = $localBoardingDateTime;
    }

    public function getLocalBoardingDateTime()
    {
        return $this->localBoardingDateTime;
    }

    public function setLocalEstimatedOrActualArrivalDateTime($localEstimatedOrActualArrivalDateTime)
    {
        $this->localEstimatedOrActualArrivalDateTime = $localEstimatedOrActualArrivalDateTime;
    }

    public function getLocalEstimatedOrActualArrivalDateTime()
    {
        return $this->localEstimatedOrActualArrivalDateTime;
    }

    public function setLocalEstimatedOrActualDepartureDateTime($localEstimatedOrActualDepartureDateTime)
    {
        $this->localEstimatedOrActualDepartureDateTime = $localEstimatedOrActualDepartureDateTime;
    }

    public function getLocalEstimatedOrActualDepartureDateTime()
    {
        return $this->localEstimatedOrActualDepartureDateTime;
    }

    public function setLocalGateClosingDateTime($localGateClosingDateTime)
    {
        $this->localGateClosingDateTime = $localGateClosingDateTime;
    }

    public function getLocalGateClosingDateTime()
    {
        return $this->localGateClosingDateTime;
    }

    public function setLocalScheduledArrivalDateTime($localScheduledArrivalDateTime)
    {
        $this->localScheduledArrivalDateTime = $localScheduledArrivalDateTime;
    }

    public function getLocalScheduledArrivalDateTime()
    {
        return $this->localScheduledArrivalDateTime;
    }

    public function setLocalScheduledDepartureDateTime($localScheduledDepartureDateTime)
    {
        $this->localScheduledDepartureDateTime = $localScheduledDepartureDateTime;
    }

    public function getLocalScheduledDepartureDateTime()
    {
        return $this->localScheduledDepartureDateTime;
    }

    public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
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

    public function setOrigin(Google_Service_Walletobjects_AirportInfo $origin)
    {
        $this->origin = $origin;
    }

    public function getOrigin()
    {
        return $this->origin;
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