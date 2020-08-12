<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TimeInterval extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $endType = 'Walletobjects\Google_Service_Walletobjects_DateTime';
    protected $endDataType = '';
    public $kind;
    protected $startType = 'Walletobjects\Google_Service_Walletobjects_DateTime';
    protected $startDataType = '';


    public function setEnd(Walletobjects\Google_Service_Walletobjects_DateTime $end)
    {
        $this->end = $end;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setStart(Walletobjects\Google_Service_Walletobjects_DateTime $start)
    {
        $this->start = $start;
    }

    public function getStart()
    {
        return $this->start;
    }
}