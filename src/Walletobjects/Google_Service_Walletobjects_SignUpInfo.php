<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_SignUpInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $classId;


    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    public function getClassId()
    {
        return $this->classId;
    }
}