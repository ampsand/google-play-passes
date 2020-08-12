<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TemplateItem extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $firstValueType = 'Walletobjects\Google_Service_Walletobjects_FieldSelector';
    protected $firstValueDataType = '';
    public $predefinedItem;
    protected $secondValueType = 'Walletobjects\Google_Service_Walletobjects_FieldSelector';
    protected $secondValueDataType = '';


    public function setFirstValue(Walletobjects\Google_Service_Walletobjects_FieldSelector $firstValue)
    {
        $this->firstValue = $firstValue;
    }

    public function getFirstValue()
    {
        return $this->firstValue;
    }

    public function setPredefinedItem($predefinedItem)
    {
        $this->predefinedItem = $predefinedItem;
    }

    public function getPredefinedItem()
    {
        return $this->predefinedItem;
    }

    public function setSecondValue(Walletobjects\Google_Service_Walletobjects_FieldSelector $secondValue)
    {
        $this->secondValue = $secondValue;
    }

    public function getSecondValue()
    {
        return $this->secondValue;
    }
}