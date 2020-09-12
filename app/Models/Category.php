<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Database Relations
     */

    // Category has many questions
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
