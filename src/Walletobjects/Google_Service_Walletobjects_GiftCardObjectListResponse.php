<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_GiftCardObjectListResponse extends Google_Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = array();
    protected $paginationType = 'Walletobjects\Google_Service_Walletobjects_Pagination';
    protected $paginationDataType = '';
    protected $resourcesType = 'Walletobjects\Google_Service_Walletobjects_GiftCardObject';
    protected $resourcesDataType = 'array';


    public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
    {
        $this->pagination = $pagination;
    }

    public function getPagination()
    {
        return $this->pagination;
    }

    public function setResources($resources)
    {
        $this->resources = $resources;
    }

    public function getResources()
    {
        return $this->resources;
    }
}