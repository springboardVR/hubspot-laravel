<?php

namespace SpringboardVR\HubspotLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use SevenShores\Hubspot\Factory;

class Hubspot extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
