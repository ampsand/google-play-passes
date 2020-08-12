<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_BarcodeSectionDetail extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $fieldSelectorType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FieldSelector';
    protected $fieldSelectorDataType = '';


    public function setFieldSelector(Google_Service_Walletobjects_FieldSelector $fieldSelector)
    {
        $this->fieldSelector = $fieldSelector;
    }

    public function getFieldSelector()
    {
        return $this->fieldSelector;
    }
}