<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_BoardingAndSeatingInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $boardingDoor;
    public $boardingGroup;
    public $boardingPosition;
    protected $boardingPrivilegeImageType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $boardingPrivilegeImageDataType = '';
    public $kind;
    protected $seatAssignmentType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $seatAssignmentDataType = '';
    public $seatClass;
    public $seatNumber;
    public $sequenceNumber;


    public function setBoardingDoor($boardingDoor)
    {
        $this->boardingDoor = $boardingDoor;
    }

    public function getBoardingDoor()
    {
        return $this->boardingDoor;
    }

    public function setBoardingGroup($boardingGroup)
    {
        $this->boardingGroup = $boardingGroup;
    }

    public function getBoardingGroup()
    {
        return $this->boardingGroup;
    }

    public function setBoardingPosition($boardingPosition)
    {
        $this->boardingPosition = $boardingPosition;
    }

    public function getBoardingPosition()
    {
        return $this->boardingPosition;
    }

    public function setBoardingPrivilegeImage(Google_Service_Walletobjects_Image $boardingPrivilegeImage)
    {
        $this->boardingPrivilegeImage = $boardingPrivilegeImage;
    }

    public function getBoardingPrivilegeImage()
    {
        return $this->boardingPrivilegeImage;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setSeatAssignment(Google_Service_Walletobjects_LocalizedString $seatAssignment)
    {
        $this->seatAssignment = $seatAssignment;
    }

    public function getSeatAssignment()
    {
        return $this->seatAssignment;
    }

    public function setSeatClass($seatClass)
    {
        $this->seatClass = $seatClass;
    }

    public function getSeatClass()
    {
        return $this->seatClass;
    }

    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }

    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }
}