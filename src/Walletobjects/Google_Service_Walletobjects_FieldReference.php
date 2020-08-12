<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FieldReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $dateFormat;
    public $fieldPath;


    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
    }

    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    public function setFieldPath($fieldPath)
    {
        $this->fieldPath = $fieldPath;
    }

    public function getFieldPath()
    {
        return $this->fieldPath;
    }
}