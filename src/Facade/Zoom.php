<?php
namespace vaporic\Zoom\Facade;

use Illuminate\Support\Facades\Facade;


class Zoom extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Zoom';
    }
}