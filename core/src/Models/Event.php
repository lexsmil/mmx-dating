<?php

namespace MMX\Dating\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property int $rank
 * @property bool $active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read Request[] $requests
 */
class Event extends Model
{
    protected $table = 'mmx_dating_events';
    protected $guarded = ['id', 'created_at', 'updated_at'];
//    protected $dateFormat = 'Y-m-d H:i:s';
    protected $dates = ['date_start', 'date_end'];

    protected $casts = [
        'active' => 'bool',
    ];

    public function requests(): HasMany {
        return $this->hasMany(Request::class);
    }

}