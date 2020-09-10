<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Database Relations
     */

    // Question belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Question has many replies
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    // Question belongs to category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
