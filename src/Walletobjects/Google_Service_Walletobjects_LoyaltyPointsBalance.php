<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_LoyaltyPointsBalance extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $double;
    public $int;
    protected $moneyType = 'Walletobjects\Google_Service_Walletobjects_Money';
    protected $moneyDataType = '';
    public $string;


    public function setDouble($double)
    {
        $this->double = $double;
    }

    public function getDouble()
    {
        return $this->double;
    }

    public function setInt($int)
    {
        $this->int = $int;
    }

    public function getInt()
    {
        return $this->int;
    }

    public function setMoney(Google_Service_Walletobjects_Money $money)
    {
        $this->money = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function setString($string)
    {
        $this->string = $string;
    }

    public function getString()
    {
        return $this->string;
    }
}