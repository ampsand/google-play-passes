<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_EventReservationInfo extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $confirmationCode;
    public $kind;


    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    }

    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }
}