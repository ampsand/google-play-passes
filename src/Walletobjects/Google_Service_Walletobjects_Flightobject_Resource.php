<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

/**
 * The "flightobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $flightobject = $walletobjectsService->flightobject;
 *  </code>
 */
class Google_Service_Walletobjects_Flightobject_Resource extends Google_Service_Resource
{

    /**
     * Adds a message to the flight object referenced by the given object ID.
     * (flightobject.addmessage)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightObjectAddMessageResponse
     */
    public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), "Google_Service_Walletobjects_FlightObjectAddMessageResponse");
    }

    /**
     * Returns the flight object with the given object ID. (flightobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightObject
     */
    public function get($resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Walletobjects_FlightObject");
    }

    /**
     * Inserts an flight object with the given ID and properties.
     * (flightobject.insert)
     *
     * @param Google_FlightObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightObject
     */
    public function insert(Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Walletobjects_FlightObject");
    }

    /**
     * Returns a list of all flight objects for a given issuer ID.
     * (flightobject.listFlightobject)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string classId The ID of the class whose objects will be listed.
     * @opt_param string token Used to get the next set of results if `maxResults`
     * is specified, but more than `maxResults` objects are available in a list. For
     * example, if you have a list of 200 objects and you call list with
     * `maxResults` set to 20, list will return the first 20 objects and a token.
     * Call list again with `maxResults` set to 20 and the token to get the next 20
     * objects.
     * @opt_param int maxResults Identifies the max number of results returned by a
     * list. All results are returned if `maxResults` isn't defined.
     * @return Google_Service_Walletobjects_FlightObjectListResponse
     */
    public function listFlightobject($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Walletobjects_FlightObjectListResponse");
    }

    /**
     * Updates the flight object referenced by the given object ID. This method
     * supports patch semantics. (flightobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_FlightObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightObject
     */
    public function patch($resourceId, Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Walletobjects_FlightObject");
    }

    /**
     * Updates the flight object referenced by the given object ID.
     * (flightobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_FlightObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_FlightObject
     */
    public function update($resourceId, Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Walletobjects_FlightObject");
    }
}