<?php
namespace Andrewlamers\ChargifyLaravel;
use Illuminate\Support\Facades\Facade;
class ChargifyLaravelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chargify';
    }
}