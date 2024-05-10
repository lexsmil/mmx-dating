<?php

namespace MMX\Dating\Controllers\Web;

use Illuminate\Database\Eloquent\Builder;
use MMX\Dating\Models\Event;
use Vesp\Controllers\ModelGetController;

class Items extends ModelGetController
{
    protected string $model = Event::class;

    protected function beforeGet(Builder $c): Builder
    {
        return $c->where('active', true);
    }

    protected function beforeCount(Builder $c): Builder
    {
        return $c->where('active', true);
    }
}