<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Track extends Model {
    protected $fillable = [
        'title',
        'cover',
        'description',
        'path',
        'user_id'
    ];

    public function user() : BelongsTo {

        return $this->belongsTo( User::class );
    }
}
