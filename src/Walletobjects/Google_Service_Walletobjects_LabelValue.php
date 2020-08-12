<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LabelValue extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $label;
    protected $localizedLabelType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedLabelDataType = '';
    protected $localizedValueType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $localizedValueDataType = '';
    public $value;


    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLocalizedLabel(Google_Service_Walletobjects_LocalizedString $localizedLabel)
    {
        $this->localizedLabel = $localizedLabel;
    }

    public function getLocalizedLabel()
    {
        return $this->localizedLabel;
    }

    public function setLocalizedValue(Google_Service_Walletobjects_LocalizedString $localizedValue)
    {
        $this->localizedValue = $localizedValue;
    }

    public function getLocalizedValue()
    {
        return $this->localizedValue;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}