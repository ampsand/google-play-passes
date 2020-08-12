<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

class Google_Service_Walletobjects_AddMessageRequest extends \Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $messageType = 'Ampsand\GooglePlayPasses\Walletobjects\GoogleService_Walletobjects_Message';
    protected $messageDataType = '';


    public function setMessage(Google_Service_Walletobjects_Message $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
