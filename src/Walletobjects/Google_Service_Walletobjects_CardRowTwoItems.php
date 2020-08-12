<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_CardRowTwoItems extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $endItemType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TemplateItem';
    protected $endItemDataType = '';
    protected $startItemType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TemplateItem';
    protected $startItemDataType = '';


    public function setEndItem(Google_Service_Walletobjects_TemplateItem $endItem)
    {
        $this->endItem = $endItem;
    }

    public function getEndItem()
    {
        return $this->endItem;
    }

    public function setStartItem(Google_Service_Walletobjects_TemplateItem $startItem)
    {
        $this->startItem = $startItem;
    }

    public function getStartItem()
    {
        return $this->startItem;
    }
}