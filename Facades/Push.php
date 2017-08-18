<?php namespace Hht\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hht\Pusher\PusherManager
 */
class Push extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pusher';
    }
}
