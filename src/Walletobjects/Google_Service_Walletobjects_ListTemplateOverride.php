<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_ListTemplateOverride extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $firstRowOptionType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FirstRowOption';
    protected $firstRowOptionDataType = '';
    protected $secondRowOptionType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FieldSelector';
    protected $secondRowOptionDataType = '';
    protected $thirdRowOptionType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_FieldSelector';
    protected $thirdRowOptionDataType = '';


    public function setFirstRowOption(Google_Service_Walletobjects_FirstRowOption $firstRowOption)
    {
        $this->firstRowOption = $firstRowOption;
    }

    public function getFirstRowOption()
    {
        return $this->firstRowOption;
    }

    public function setSecondRowOption(Google_Service_Walletobjects_FieldSelector $secondRowOption)
    {
        $this->secondRowOption = $secondRowOption;
    }

    public function getSecondRowOption()
    {
        return $this->secondRowOption;
    }

    public function setThirdRowOption(Google_Service_Walletobjects_FieldSelector $thirdRowOption)
    {
        $this->thirdRowOption = $thirdRowOption;
    }

    public function getThirdRowOption()
    {
        return $this->thirdRowOption;
    }
}