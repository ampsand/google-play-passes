<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_ImageModuleData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $mainImageType = 'Walletobjects\Google_Service_Walletobjects_Image';
    protected $mainImageDataType = '';


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setMainImage(Walletobjects\Google_Service_Walletobjects_Image $mainImage)
    {
        $this->mainImage = $mainImage;
    }

    public function getMainImage()
    {
        return $this->mainImage;
    }
}