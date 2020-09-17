<?php

declare(strict_types=1);
namespace Genericmilk\Kaboom\Facades;
use Illuminate\Support\Facades\Facade;

class Kaboom extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Kaboom';
    }
}
