<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LocalizedString extends Google_Collection
{
    protected $collection_key = 'translatedValues';
    protected $internal_gapi_mappings = array();
    protected $defaultValueType = 'Walletobjects\Google_Service_Walletobjects_TranslatedString';
    protected $defaultValueDataType = '';
    public $kind;
    protected $translatedValuesType = 'Walletobjects\Google_Service_Walletobjects_TranslatedString';
    protected $translatedValuesDataType = 'array';


    public function setDefaultValue(Google_Service_Walletobjects_TranslatedString $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setTranslatedValues($translatedValues)
    {
        $this->translatedValues = $translatedValues;
    }

    public function getTranslatedValues()
    {
        return $this->translatedValues;
    }
}