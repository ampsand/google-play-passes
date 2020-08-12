<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_Permissions extends \Google_Collection
{
    protected $collection_key = 'permissions';
    protected $internal_gapi_mappings = array();
    public $issuerId;
    protected $permissionsType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Permission';
    protected $permissionsDataType = 'array';


    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }

    public function getIssuerId()
    {
        return $this->issuerId;
    }

    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }
}