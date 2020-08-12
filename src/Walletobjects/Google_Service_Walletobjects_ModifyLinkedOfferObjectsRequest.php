<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_ModifyLinkedOfferObjectsRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $linkedOfferObjectIdsType = 'Walletobjects\Google_Service_Walletobjects_ModifyLinkedOfferObjects';
    protected $linkedOfferObjectIdsDataType = '';


    public function setLinkedOfferObjectIds(Walletobjects\Google_Service_Walletobjects_ModifyLinkedOfferObjects $linkedOfferObjectIds)
    {
        $this->linkedOfferObjectIds = $linkedOfferObjectIds;
    }

    public function getLinkedOfferObjectIds()
    {
        return $this->linkedOfferObjectIds;
    }
}