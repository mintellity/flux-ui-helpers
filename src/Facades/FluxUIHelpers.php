<?php

namespace Mintellity\FluxUIHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mintellity\FluxUIHelpers\FluxUIHelpers
 */
class FluxUIHelpers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mintellity\FluxUIHelpers\FluxUIHelpers::class;
    }
}
