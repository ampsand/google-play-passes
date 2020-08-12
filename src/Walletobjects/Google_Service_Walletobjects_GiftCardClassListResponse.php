<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_GiftCardClassListResponse extends \Google_Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = array();
    protected $paginationType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Pagination';
    protected $paginationDataType = '';
    protected $resourcesType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_GiftCardClass';
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