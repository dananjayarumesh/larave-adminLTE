<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    // 
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
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
     * The attributes that should be valid for create.
     *
     * @var array
     */
    public static $rules = [
        'name'=> 'required',
        'email'     => 'required|string|email|max:191|unique:users',
        'password'  => 'required|between:6,50',
    ];

    /**
     * The attributes that should be valid for create.
     *
     * @var array
     */
    public static $message = [
        'mobile' => 'The mobile field must be 10 characters.',
        'telephone' => 'The telephone field must be 10 characters.',
    ];
}
