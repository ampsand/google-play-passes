<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_FieldSelector extends \Google_Collection
{
    protected $collection_key = 'fields';
    protected $internal_gapi_mappings = array();
    protected $fieldsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FieldReference';
    protected $fieldsDataType = 'array';


    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }
}