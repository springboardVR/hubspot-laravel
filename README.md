Hubspot for Laravel 5.5+
=========================

HubSpot API wrapper for Laravel 5.5+

## Installation

``` bash
composer require springboardVR/hubspot-laravel
```

Set HUBSPOT_API in .env file.

## Configuration

Run `php artisan vendor:publish --tag=hubspot-config` to publish config/hubspot.php.

## Usage

Package is based on https://github.com/ryanwinchester/hubspot-php, example:
``` php
$response = HubSpot::contacts()->all();
```
