<?php

namespace NoiX\OTS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NoiX\OTS\OTS
 */
class OTS extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \NoiX\OTS\OTS::class;
    }
}
