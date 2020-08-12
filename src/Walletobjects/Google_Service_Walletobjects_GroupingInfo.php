<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_GroupingInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $sortIndex;


    public function setSortIndex($sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }

    public function getSortIndex()
    {
        return $this->sortIndex;
    }
}