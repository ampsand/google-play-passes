<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_PurchaseDetails extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    public $accountId;
    public $confirmationCode;
    public $purchaseDateTime;
    public $purchaseReceiptNumber;
    protected $ticketCostType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_TicketCost';
    protected $ticketCostDataType = '';


    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    }

    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }

    public function setPurchaseDateTime($purchaseDateTime)
    {
        $this->purchaseDateTime = $purchaseDateTime;
    }

    public function getPurchaseDateTime()
    {
        return $this->purchaseDateTime;
    }

    public function setPurchaseReceiptNumber($purchaseReceiptNumber)
    {
        $this->purchaseReceiptNumber = $purchaseReceiptNumber;
    }

    public function getPurchaseReceiptNumber()
    {
        return $this->purchaseReceiptNumber;
    }

    public function setTicketCost(Google_Service_Walletobjects_TicketCost $ticketCost)
    {
        $this->ticketCost = $ticketCost;
    }

    public function getTicketCost()
    {
        return $this->ticketCost;
    }
}