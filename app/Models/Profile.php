<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model {
    protected $fillable = [
        'avatar',
        'first_name',
        'last_name',
        'phone',
        'address',
        'city',
        'province',
        'region',
        'zip',
        'country',
        'is_admin',

    ];

    public function user() : BelongsTo {
        return $this->belongsTo( User::class );
    }
}
