<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];

    /**
     * Database Relations
     */

    // Like belongs to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Like belongs to reply
    public function reply()
    {
        return $this->hasMany(Reply::class);
    }
}
