<?php

namespace Meftahi\Analytics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Meftahi\Analytics\Analytics
 */
class AnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-analytics';
    }
}
