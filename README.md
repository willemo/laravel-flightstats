# Laravel FlightStats

Laravel service provider for the FlightStats API.

## Installation

Install the package using Composer:

```
composer.phar require willemo/laravel-flightstats
```

Then add the service provider and facade (optional) to your `config/app.php` file:

```php
return [

    // Other config

    'providers' => [
        // Other providers
        Willemo\LaravelFlightStats\FlexServiceProvider::class,
    ],

    'aliases' => [
        // Other aliases
        'FlexClient' => Willemo\LaravelFlightStats\FlexFacade::class,
    ],

];
```

After this you'll have to run the command below to publish the config file:

```
php artisan vendor:publish --provider="Willemo\LaravelFlightStats\FlexServiceProvider"
```

## Configuration

You can use the `config/flightstats.php` file to configure the FlexClient, but you can also store the application ID and key into your env variables. The latter is recommended.

```
FLIGHTSTATS_APP_ID=yourAppID
FLIGHTSTATS_APP_KEY=yourAppKey
```

## Usage

You can use the facade to get the FlexClient and make requests to the FlightStats API:

```php
$response = FlexClient::schedules()->getFlightByDepartureDate('AA', 100, Carbon\Carbon::parse('2017-09-05'), [
    // Optional query parameters
    'extendedOptions' => [
        'includeDeltas',
    ],
]);

$data = json_decode($response->getBody(), true);
```

## Note

Copyright of the name FlightStats and its API belong to FlightStats.

