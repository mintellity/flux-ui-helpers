<?php

namespace Tobiasn\FluxUIHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tobiasn\FluxUIHelpers\FluxUIHelpers
 */
class FluxUIHelpers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tobiasn\FluxUIHelpers\FluxUIHelpers::class;
    }
}
