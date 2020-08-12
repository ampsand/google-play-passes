<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_EventSeat extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $gateType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $gateDataType = '';
    public $kind;
    protected $rowType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $rowDataType = '';
    protected $seatType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $seatDataType = '';
    protected $sectionType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $sectionDataType = '';


    public function setGate(Google_Service_Walletobjects_LocalizedString $gate)
    {
        $this->gate = $gate;
    }

    public function getGate()
    {
        return $this->gate;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setRow(Google_Service_Walletobjects_LocalizedString $row)
    {
        $this->row = $row;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function setSeat(Google_Service_Walletobjects_LocalizedString $seat)
    {
        $this->seat = $seat;
    }

    public function getSeat()
    {
        return $this->seat;
    }

    public function setSection(Google_Service_Walletobjects_LocalizedString $section)
    {
        $this->section = $section;
    }

    public function getSection()
    {
        return $this->section;
    }
}