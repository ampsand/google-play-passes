<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_DetailsItemInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $itemType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TemplateItem';
    protected $itemDataType = '';


    public function setItem(Google_Service_Walletobjects_TemplateItem $item)
    {
        $this->item = $item;
    }

    public function getItem()
    {
        return $this->item;
    }
}