<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LoyaltyPoints extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $balanceType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LoyaltyPointsBalance';
    protected $balanceDataType = '';
    public $label;
    protected $localizedLabelType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_LocalizedString';
    protected $localizedLabelDataType = '';


    public function setBalance(Google_Service_Walletobjects_LoyaltyPointsBalance $balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLocalizedLabel(Google_Service_Walletobjects_LocalizedString $localizedLabel)
    {
        $this->localizedLabel = $localizedLabel;
    }

    public function getLocalizedLabel()
    {
        return $this->localizedLabel;
    }
}