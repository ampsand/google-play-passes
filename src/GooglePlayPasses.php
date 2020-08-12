<?php

namespace Ampsand\GooglePlayPasses;

class GPPass
{
    public function __construct($serviceAccountEmailAddress, $serviceAccountFile, $applicationName, $issuerId, $origins)
    {
        // Identifiers of Service account
        define('SERVICE_ACCOUNT_EMAIL_ADDRESS', $serviceAccountEmailAddress);
        define('SERVICE_ACCOUNT_FILE', $serviceAccountFile);

        // Used by the Google Pay API for Passes Client library
        define('APPLICATION_NAME', $applicationName);

        // Identifier of Google Pay API for Passes Merchant Center
        define('ISSUER_ID', $issuerId);

        // List of origins for save to phone button. Used for JWT
        //// See https://developers.google.com/pay/passes/reference/s2w-reference
        $ORIGINS = $origins;

        // Constants that are application agnostic. Used for JWT
        define('AUDIENCE', 'google');
        define('JWT_TYPE', 'savetoandroidpay');
        define('SCOPES', 'https://www.googleapis.com/auth/wallet_object.issuer');

        // Load the private key as String from service account file
        $jsonFile = file_get_contents(SERVICE_ACCOUNT_FILE);
        $credentialJson = json_decode($jsonFile, true);
        define('SERVICE_ACCOUNT_PRIVATE_KEY', $credentialJson['private_key']);

        // Save link that uses JWT. See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
        define("SAVE_LINK", "https://pay.google.com/gp/v/save/");
    }


    public function fatJwt($data, $verticalType, $classId, $objectId)
    {
        /* ******************
         *
         * Generates a signed fat JWT.
         * No REST calls made.
         *
         * Use fat JWT in JS web button.
         * Fat JWT is too long to be used in Android intents.
         * Possibly might break in redirects.
         *
         ********************/

        $services = new Services();
        $fatJwt = $services->makeFatJwt($data, $verticalType, $classId, $objectId);

        if ($fatJwt != NULL) {
            return SAVE_LINK . $fatJwt;
        }

        return;
    }

    function objectJwt($data, $verticalType, $classId, $objectId)
    {
        /* ******************
         *
         * Generates a signed object JWT.
         * 1 REST call is made to pre-insert class.
         *
         * This JWT can be used in JS web button.
         * If this JWT only contains 1 object, usually isn't too long; can be used in Android intents/redirects.
         *
         ********************/

        $services = new Services();
        $objectJwt = $services->makeObjectJwt($data, $verticalType, $classId, $objectId);

        if ($objectJwt != null) {
            return SAVE_LINK . $objectJwt;
        }

        return;
    }

    function skinnyJwt($data, $verticalType, $classId, $objectId)
    {
        /* ******************
         *
         * Generates a signed skinny JWT.
         * 2 REST calls are made:
         * x1 pre-insert one classes
         * x1 pre-insert one object which uses previously inserted class
         *
         * This JWT can be used in JS web button.
         * This is the shortest type of JWT; recommended for Android intents/redirects.
         *
         ********************/

        $services = new Services();
        $skinnyJwt = $services->makeSkinnyJwt($data, $verticalType, $classId, $objectId);

        if ($skinnyJwt != null) {
            return SAVE_LINK . $skinnyJwt;
        }

        return;
    }

    public function slugify($string)
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }

    public function generatePass($data, $type, $method = 'skinnyJwt')
    {
        $vertical = $type;
        $verticalType = call_user_func('VerticalType::' . $type);

        // your classUid should be a hash based off of pass metadata, for the demo we will use pass-type_class_uniqueid
        $classUid = $vertical . "_CLASS_" . uniqid($this->slugify(APPLICATION_NAME), true);

        // check Reference API for format of "id", offer example: (https://developers.google.com/pay/passes/reference/v1/offerclass/insert).
        // must be alphanumeric characters, ".", "_", or "-".
        $classId = sprintf("%s.%s", ISSUER_ID, $classUid);

        // your objectUid should be a hash based off of pass metadata, for the demo we will use pass-type_class_uniqueid
        $objectUid = $vertical . "_OBJECT_" . uniqid($this->slugify(APPLICATION_NAME), true);

        // check Reference API for format of "id", offer example: (https://developers.google.com/pay/passes/reference/v1/offerobject/insert).
        // Must be alphanumeric characters, ".", "_", or "-".
        $objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);

        $this->{$method}($data, $verticalType, $classId, $objectId);
    }
}