<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

    public $table = 'students';
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
    protected $fillable = [
        'full_name', 'email', 'password', 'Phone number', 'Department','gender', 'avatar', 'id',
    ];

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
    protected $hidden = [
        'password', 'remember_token', 'email_verified_at',
    ];

/**
 * The attributes that should be cast to native types.
 *
 * @var array
 */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
