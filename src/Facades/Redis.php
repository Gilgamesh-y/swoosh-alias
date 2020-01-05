<?php

namespace Src\Alias\Facades;

class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'php_redis';
    }
}
