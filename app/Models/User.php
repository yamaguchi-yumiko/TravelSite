<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'password',
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'gender',
        'birthday',
        'postal_code',
        'prefecture_cd',
        'city_name',
        'town_name',
        'other_address',
        'tel',
        'emergency_contact',
        'email',
        'email_verify_token',
        'email_verified',
        'ins_date',
        'ins_prg',
        'upd_date',
        'upd_prg',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'ins_date' => 'datetime',
        'upd_date' => 'datetime',
    ];
}
