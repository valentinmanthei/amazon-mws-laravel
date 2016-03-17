<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Amazon MWS API keys
    |--------------------------------------------------------------------------
    */

    'amazon-mws' => [
        'merchant_id'   =>  env("MWS_MERCHANT_ID"),
        'marketplac_id' =>  env("MWS_MARKETPLACE_ID"),
        'access_key'    =>  env("MWS_ACCESS_KEY"),
        'secret_key'    =>  env("MWS_SECRET_KEY"),
        'service_url'   =>  env("MWS_SERVICE_URL"),
        'debug'         =>  env("APP_DEBUG"),
    ],


];
