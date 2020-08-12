<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_ListTemplateOverride extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $firstRowOptionType = 'Walletobjects\Google_Service_Walletobjects_FirstRowOption';
    protected $firstRowOptionDataType = '';
    protected $secondRowOptionType = 'Walletobjects\Google_Service_Walletobjects_FieldSelector';
    protected $secondRowOptionDataType = '';
    protected $thirdRowOptionType = 'Walletobjects\Google_Service_Walletobjects_FieldSelector';
    protected $thirdRowOptionDataType = '';


    public function setFirstRowOption(Walletobjects\Google_Service_Walletobjects_FirstRowOption $firstRowOption)
    {
        $this->firstRowOption = $firstRowOption;
    }

    public function getFirstRowOption()
    {
        return $this->firstRowOption;
    }

    public function setSecondRowOption(Walletobjects\Google_Service_Walletobjects_FieldSelector $secondRowOption)
    {
        $this->secondRowOption = $secondRowOption;
    }

    public function getSecondRowOption()
    {
        return $this->secondRowOption;
    }

    public function setThirdRowOption(Walletobjects\Google_Service_Walletobjects_FieldSelector $thirdRowOption)
    {
        $this->thirdRowOption = $thirdRowOption;
    }

    public function getThirdRowOption()
    {
        return $this->thirdRowOption;
    }
}