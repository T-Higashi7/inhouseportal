<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
      * 2021.5.18 emailをlogin_idに変更
     */
    protected $fillable = [
        'name', 'login_id', 'password',
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
     /**2021.5.18 'email_verified_at'→login_id_verified_at'に変更
     */
    protected $casts = [
        'login_id_verified_at' => 'datetime',
    ];
    
    
}
