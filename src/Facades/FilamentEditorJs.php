<?php

namespace SidneySaints\FilamentEditorJs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SidneySaints\FilamentEditorJs\FilamentEditorJs
 */
class FilamentEditorJs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SidneySaints\FilamentEditorJs\FilamentEditorJs::class;
    }
}
