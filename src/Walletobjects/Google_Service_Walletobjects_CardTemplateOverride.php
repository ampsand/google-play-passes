<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_CardTemplateOverride extends \Google_Collection
{
    protected $collection_key = 'cardRowTemplateInfos';
    protected $internal_gapi_mappings = array();
    protected $cardRowTemplateInfosType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_CardRowTemplateInfo';
    protected $cardRowTemplateInfosDataType = 'array';


    public function setCardRowTemplateInfos($cardRowTemplateInfos)
    {
        $this->cardRowTemplateInfos = $cardRowTemplateInfos;
    }

    public function getCardRowTemplateInfos()
    {
        return $this->cardRowTemplateInfos;
    }
}