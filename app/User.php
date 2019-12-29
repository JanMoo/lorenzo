<?php

namespace NxTMateriaalbeheer;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

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

    //user has many rental records
    public function rental_records()
    {
        return $this->hasMany(Rental_record::class);
    }

    //user has many personal sets
    public function personal_sets()
    {
        return $this->hasMany(Personal_set::class);
    }

    //user has many incidents
    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }


}
