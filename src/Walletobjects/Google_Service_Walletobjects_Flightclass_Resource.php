<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

/**
 * The "flightclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $flightclass = $walletobjectsService->flightclass;
 *  </code>
 */
class Google_Service_Walletobjects_Flightclass_Resource extends \Google_Service_Resource
{

    /**
     * Adds a message to the flight class referenced by the given class ID.
     * (flightclass.addmessage)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightClassAddMessageResponse
     */
    public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), "Ampsand\GooglePlayPasses\Walletobjects\Google_Service_Walletobjects_FlightClassAddMessageResponse");
    }

    /**
     * Returns the flight class with the given class ID. (flightclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightClass
     */
    public function get($resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Ampsand\GooglePlayPasses\Walletobjects\Google_Service_Walletobjects_FlightClass");
    }

    /**
     * Inserts an flight class with the given ID and properties.
     * (flightclass.insert)
     *
     * @param Google_FlightClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightClass
     */
    public function insert(Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Ampsand\GooglePlayPasses\Walletobjects\Google_Service_Walletobjects_FlightClass");
    }

    /**
     * Returns a list of all flight classes for a given issuer ID.
     * (flightclass.listFlightclass)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string issuerId The ID of the issuer authorized to list classes.
     * @opt_param string token Used to get the next set of results if `maxResults`
     * is specified, but more than `maxResults` classes are available in a list. For
     * example, if you have a list of 200 classes and you call list with
     * `maxResults` set to 20, list will return the first 20 classes and a token.
     * Call list again with `maxResults` set to 20 and the token to get the next 20
     * classes.
     * @opt_param int maxResults Identifies the max number of results returned by a
     * list. All results are returned if `maxResults` isn't defined.
     * @return Google_Service_Walletobjects_FlightClassListResponse
     */
    public function listFlightclass($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Ampsand\GooglePlayPasses\Walletobjects\Google_Service_Walletobjects_FlightClassListResponse");
    }

    /**
     * Updates the flight class referenced by the given class ID. This method
     * supports patch semantics. (flightclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_FlightClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightClass
     */
    public function patch($resourceId, Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Ampsand\GooglePlayPasses\Walletobjects\Google_Service_Walletobjects_FlightClass");
    }

    /**
     * Updates the flight class referenced by the given class ID.
     * (flightclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_FlightClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightClass
     */
    public function update($resourceId, Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Ampsand\GooglePlayPasses\Walletobjects\Google_Service_Walletobjects_FlightClass");
    }
}