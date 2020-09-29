<?php

namespace App;

use App\Models\Like;
use App\Models\Question;
use App\Models\Reply;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Database Relations
     */

    // User has many questions
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    // User has many replies
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    // User has many likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Convert password field of user table to encrypted form
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }
}
