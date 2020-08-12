<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_DetailsTemplateOverride extends Google_Collection
{
    protected $collection_key = 'detailsItemInfos';
    protected $internal_gapi_mappings = array();
    protected $detailsItemInfosType = 'Walletobjects\Google_Service_Walletobjects_DetailsItemInfo';
    protected $detailsItemInfosDataType = 'array';


    public function setDetailsItemInfos($detailsItemInfos)
    {
        $this->detailsItemInfos = $detailsItemInfos;
    }

    public function getDetailsItemInfos()
    {
        return $this->detailsItemInfos;
    }
}