<?php

namespace Ampsand\GooglePlayPasses\Walletobjects;

/**
 * The "offerobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $offerobject = $walletobjectsService->offerobject;
 *  </code>
 */
class Google_Service_Walletobjects_Offerobject_Resource extends Google_Service_Resource
{

    /**
     * Adds a message to the offer object referenced by the given object ID.
     * (offerobject.addmessage)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_OfferObjectAddMessageResponse
     */
    public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), "Google_Service_Walletobjects_OfferObjectAddMessageResponse");
    }

    /**
     * Returns the offer object with the given object ID. (offerobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_OfferObject
     */
    public function get($resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Walletobjects_OfferObject");
    }

    /**
     * Inserts an offer object with the given ID and properties.
     * (offerobject.insert)
     *
     * @param Google_OfferObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_OfferObject
     */
    public function insert(Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Walletobjects_OfferObject");
    }

    /**
     * Returns a list of all offer objects for a given issuer ID.
     * (offerobject.listOfferobject)
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
     * @return Google_Service_Walletobjects_OfferObjectListResponse
     */
    public function listOfferobject($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Walletobjects_OfferObjectListResponse");
    }

    /**
     * Updates the offer object referenced by the given object ID. This method
     * supports patch semantics. (offerobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_OfferObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_OfferObject
     */
    public function patch($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Walletobjects_OfferObject");
    }

    /**
     * Updates the offer object referenced by the given object ID.
     * (offerobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_OfferObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Walletobjects_OfferObject
     */
    public function update($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Walletobjects_OfferObject");
    }
}