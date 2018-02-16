<?php

return [

    /*
    |-------------------------------------------------------------
    | STP provided parameters
    |-------------------------------------------------------------
    |
    | These are the parameters that STP provides us
    |
    |
    */

    'pem-file' => env('STP_PRIVATE_KEY'),
    'pem-password' => env('STP_KEY_PASSWORD'),
    'company-name' => env('STP_COMPANY'),

    /*
    |-------------------------------------------------------------
    | Connection info
    |-------------------------------------------------------------
    |
    | Where all the API calls will be done to.
    |
    */

    'ip_address' => env('STP_DOMAIN'),
    'port' => env('STP_PORT'),
    'path' => env('STP_PATH')

];