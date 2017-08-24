<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application ID
    |--------------------------------------------------------------------------
    |
    | Use the FLIGHTSTATS_APP_ID env variable to enter your application ID from
    | your account on the FlightStats developer center.
    */
    'appId' => env('FLIGHTSTATS_APP_ID'),

    /*
    |--------------------------------------------------------------------------
    | Application Key
    |--------------------------------------------------------------------------
    |
    | Use the FLIGHTSTATS_APP_KEY env variable to enter your application key
    | from your account on the FlightStats developer center.
    */
    'appKey' => env('FLIGHTSTATS_APP_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Use UTC time
    |--------------------------------------------------------------------------
    |
    | Tell the FlightStats API that the dates and times you send are in UTC
    | time. Set this to false if you send dates and times in a local timezone.
    */
    'use_utc_time' => true,

];
