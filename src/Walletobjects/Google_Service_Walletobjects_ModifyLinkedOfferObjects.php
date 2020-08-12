<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_ModifyLinkedOfferObjects extends Google_Collection
{
    protected $collection_key = 'removeLinkedOfferObjectIds';
    protected $internal_gapi_mappings = array();
    public $addLinkedOfferObjectIds;
    public $removeLinkedOfferObjectIds;


    public function setAddLinkedOfferObjectIds($addLinkedOfferObjectIds)
    {
        $this->addLinkedOfferObjectIds = $addLinkedOfferObjectIds;
    }

    public function getAddLinkedOfferObjectIds()
    {
        return $this->addLinkedOfferObjectIds;
    }

    public function setRemoveLinkedOfferObjectIds($removeLinkedOfferObjectIds)
    {
        $this->removeLinkedOfferObjectIds = $removeLinkedOfferObjectIds;
    }

    public function getRemoveLinkedOfferObjectIds()
    {
        return $this->removeLinkedOfferObjectIds;
    }
}