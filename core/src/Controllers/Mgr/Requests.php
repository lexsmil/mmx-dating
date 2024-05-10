<?php

namespace MMX\Dating\Controllers\Mgr;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MMX\Dating\Models\Event;
use MMX\Dating\Models\Request;
use Psr\Http\Message\ResponseInterface;
use Vesp\Controllers\ModelController;

class Requests extends ModelController
{
    protected string $model = Request::class;

    protected function beforeCount(Builder $c): Builder
    {
        if ($query = trim($this->getProperty('query', ''))) {
            $c->where('name', 'LIKE', "%$query%");
        }

        $sex = $this->getProperty('sex', '');

        error_log($sex);
        if ($sex !== '') {
            error_log($sex);
            $c->where('sex', $sex);
        }

        if ($event_id = trim($this->getProperty('event_id', ''))) {
            $c->where('event_id', '=', $event_id);
        }

        return $c;
    }

    protected function beforeSave(Model $record): ?ResponseInterface
    {

        return null;
    }
}