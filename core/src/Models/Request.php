<?php

namespace MMX\Dating\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $event_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $age
 * @property bool $sex
 * @property bool $active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read Event $event
 */
class Request extends Model
{
    protected $table = 'mmx_dating_requests';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'sex' => 'bool',
        'active' => 'bool',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}