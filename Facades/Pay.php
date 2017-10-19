<?php namespace Hht\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hht\Payer\PayerManager
 */
class Pay extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'payer';
    }
}
