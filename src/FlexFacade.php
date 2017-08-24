<?php

namespace Willemo\LaravelFlightStats;

use Illuminate\Support\Facades\Facade;
use Willemo\FlightStats\FlexClient;

class FlexFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return FlexClient::class;
    }
}
