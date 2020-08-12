<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TicketCost extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $discountMessageType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $discountMessageDataType = '';
    protected $faceValueType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Money';
    protected $faceValueDataType = '';
    protected $purchasePriceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Money';
    protected $purchasePriceDataType = '';


    public function setDiscountMessage(Google_Service_Walletobjects_LocalizedString $discountMessage)
    {
        $this->discountMessage = $discountMessage;
    }

    public function getDiscountMessage()
    {
        return $this->discountMessage;
    }

    public function setFaceValue(Google_Service_Walletobjects_Money $faceValue)
    {
        $this->faceValue = $faceValue;
    }

    public function getFaceValue()
    {
        return $this->faceValue;
    }

    public function setPurchasePrice(Google_Service_Walletobjects_Money $purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }
}