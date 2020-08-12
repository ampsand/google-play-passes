<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FirstRowOption extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $fieldOptionType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FieldSelector';
    protected $fieldOptionDataType = '';
    public $transitOption;


    public function setFieldOption(Google_Service_Walletobjects_FieldSelector $fieldOption)
    {
        $this->fieldOption = $fieldOption;
    }

    public function getFieldOption()
    {
        return $this->fieldOption;
    }

    public function setTransitOption($transitOption)
    {
        $this->transitOption = $transitOption;
    }

    public function getTransitOption()
    {
        return $this->transitOption;
    }
}