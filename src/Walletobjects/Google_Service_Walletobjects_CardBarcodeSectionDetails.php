<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_CardBarcodeSectionDetails extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $firstBottomDetailType = 'Walletobjects\Google_Service_Walletobjects_BarcodeSectionDetail';
    protected $firstBottomDetailDataType = '';
    protected $firstTopDetailType = 'Walletobjects\Google_Service_Walletobjects_BarcodeSectionDetail';
    protected $firstTopDetailDataType = '';
    protected $secondTopDetailType = 'Walletobjects\Google_Service_Walletobjects_BarcodeSectionDetail';
    protected $secondTopDetailDataType = '';


    public function setFirstBottomDetail(Walletobjects\Google_Service_Walletobjects_BarcodeSectionDetail $firstBottomDetail)
    {
        $this->firstBottomDetail = $firstBottomDetail;
    }

    public function getFirstBottomDetail()
    {
        return $this->firstBottomDetail;
    }

    public function setFirstTopDetail(Walletobjects\Google_Service_Walletobjects_BarcodeSectionDetail $firstTopDetail)
    {
        $this->firstTopDetail = $firstTopDetail;
    }

    public function getFirstTopDetail()
    {
        return $this->firstTopDetail;
    }

    public function setSecondTopDetail(Walletobjects\Google_Service_Walletobjects_BarcodeSectionDetail $secondTopDetail)
    {
        $this->secondTopDetail = $secondTopDetail;
    }

    public function getSecondTopDetail()
    {
        return $this->secondTopDetail;
    }
}