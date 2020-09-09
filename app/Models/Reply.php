<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    /**
     * Database Relations
     */

    // Reply belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Reply belongs to question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Reply has many likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
