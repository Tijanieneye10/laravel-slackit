<?php

namespace Tijaneneye10\LaravelSlackit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tijaneneye10\LaravelSlackit\LaravelSlackit
 */
class LaravelSlackit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tijaneneye10\LaravelSlackit\LaravelSlackit::class;
    }
}
