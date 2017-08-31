<?php

namespace Willemo\LaravelFlightStats;

use Illuminate\Support\Facades\Facade;
use Willemo\FlightStats\FlexClient;
use Willemo\FlightStats\Api\FlightStatus;
use Willemo\FlightStats\Api\Schedules;

/**
 * Class FlexFacade
 *
 * @package Willemo\LaravelFlightStats
 * @method FlightStatus flightStatus()
 * @method Schedules schedules()
 */
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
