<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email', 'age', 'birth_date', 'gender', 'country_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts() {
        
        return $this->hasMany('App\Models\Post');
    }
    
    public function country() {
        
        return $this->belongsTo('App\Models\Country');

    }
}
