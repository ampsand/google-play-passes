<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LabelValueRow extends Google_Collection
{
    protected $collection_key = 'columns';
    protected $internal_gapi_mappings = array();
    protected $columnsType = 'Walletobjects\Google_Service_Walletobjects_LabelValue';
    protected $columnsDataType = 'array';


    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function getColumns()
    {
        return $this->columns;
    }
}