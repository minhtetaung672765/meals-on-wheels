<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Admin extends Model
{

    protected $fillable = [
        'email',
        'password',
        'role',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
