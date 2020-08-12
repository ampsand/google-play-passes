<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_TicketCost extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $discountMessageType = 'Walletobjects\Google_Service_Walletobjects_LocalizedString';
    protected $discountMessageDataType = '';
    protected $faceValueType = 'Walletobjects\Google_Service_Walletobjects_Money';
    protected $faceValueDataType = '';
    protected $purchasePriceType = 'Walletobjects\Google_Service_Walletobjects_Money';
    protected $purchasePriceDataType = '';


    public function setDiscountMessage(Walletobjects\Google_Service_Walletobjects_LocalizedString $discountMessage)
    {
        $this->discountMessage = $discountMessage;
    }

    public function getDiscountMessage()
    {
        return $this->discountMessage;
    }

    public function setFaceValue(Walletobjects\Google_Service_Walletobjects_Money $faceValue)
    {
        $this->faceValue = $faceValue;
    }

    public function getFaceValue()
    {
        return $this->faceValue;
    }

    public function setPurchasePrice(Walletobjects\Google_Service_Walletobjects_Money $purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }
}