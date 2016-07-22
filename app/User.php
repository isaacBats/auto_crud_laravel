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
        'name','username', 'email', 'password', 'first_name', 'last_name', 'about', 'avatar_id', 'address1', 'address2', 'city', 'postal_code', 'country', 'state', 'gender', 'email_verified', 'verification_code', 'remember_token',
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
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function avatar()
    {
        return $this->belongsTo('App\Media','avatar_id');
    }
}
