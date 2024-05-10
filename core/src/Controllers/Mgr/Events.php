<?php

namespace MMX\Dating\Controllers\Mgr;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MMX\Dating\Models\Event;
use Psr\Http\Message\ResponseInterface;
use Vesp\Controllers\ModelController;

class Events extends ModelController
{
    protected string $model = Event::class;

    protected function beforeCount(Builder $c): Builder
    {
        if ($query = trim($this->getProperty('query', ''))) {
            $c->where('title', 'LIKE', "%$query%");
        }

        return $c;
    }

    protected function beforeSave(Model $record): ?ResponseInterface
    {
        /** @var Event $record */
        if ($record->newQuery()->where('title', $record->title)->where('id', '!=', $record->id)->exists()) {
            return $this->failure('errors.event.title_unique');
        }

        return null;
    }
}