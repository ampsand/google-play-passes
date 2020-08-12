<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_ClassTemplateInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $cardBarcodeSectionDetailsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_CardBarcodeSectionDetails';
    protected $cardBarcodeSectionDetailsDataType = '';
    protected $cardTemplateOverrideType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_CardTemplateOverride';
    protected $cardTemplateOverrideDataType = '';
    protected $detailsTemplateOverrideType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_DetailsTemplateOverride';
    protected $detailsTemplateOverrideDataType = '';
    protected $listTemplateOverrideType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_ListTemplateOverride';
    protected $listTemplateOverrideDataType = '';


    public function setCardBarcodeSectionDetails(Google_Service_Walletobjects_CardBarcodeSectionDetails $cardBarcodeSectionDetails)
    {
        $this->cardBarcodeSectionDetails = $cardBarcodeSectionDetails;
    }

    public function getCardBarcodeSectionDetails()
    {
        return $this->cardBarcodeSectionDetails;
    }

    public function setCardTemplateOverride(Google_Service_Walletobjects_CardTemplateOverride $cardTemplateOverride)
    {
        $this->cardTemplateOverride = $cardTemplateOverride;
    }

    public function getCardTemplateOverride()
    {
        return $this->cardTemplateOverride;
    }

    public function setDetailsTemplateOverride(Google_Service_Walletobjects_DetailsTemplateOverride $detailsTemplateOverride)
    {
        $this->detailsTemplateOverride = $detailsTemplateOverride;
    }

    public function getDetailsTemplateOverride()
    {
        return $this->detailsTemplateOverride;
    }

    public function setListTemplateOverride(Google_Service_Walletobjects_ListTemplateOverride $listTemplateOverride)
    {
        $this->listTemplateOverride = $listTemplateOverride;
    }

    public function getListTemplateOverride()
    {
        return $this->listTemplateOverride;
    }
}