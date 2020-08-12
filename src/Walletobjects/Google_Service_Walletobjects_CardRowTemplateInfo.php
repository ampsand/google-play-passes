<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_CardRowTemplateInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $oneItemType = 'Walletobjects\Google_Service_Walletobjects_CardRowOneItem';
    protected $oneItemDataType = '';
    protected $threeItemsType = 'Walletobjects\Google_Service_Walletobjects_CardRowThreeItems';
    protected $threeItemsDataType = '';
    protected $twoItemsType = 'Walletobjects\Google_Service_Walletobjects_CardRowTwoItems';
    protected $twoItemsDataType = '';


    public function setOneItem(Walletobjects\Google_Service_Walletobjects_CardRowOneItem $oneItem)
    {
        $this->oneItem = $oneItem;
    }

    public function getOneItem()
    {
        return $this->oneItem;
    }

    public function setThreeItems(Google_Service_Walletobjects_CardRowThreeItems $threeItems)
    {
        $this->threeItems = $threeItems;
    }

    public function getThreeItems()
    {
        return $this->threeItems;
    }

    public function setTwoItems(Google_Service_Walletobjects_CardRowTwoItems $twoItems)
    {
        $this->twoItems = $twoItems;
    }

    public function getTwoItems()
    {
        return $this->twoItems;
    }
}