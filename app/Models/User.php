<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ,  TwoFactorAuthenticatable , Billable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
        'two_factor_expires_at',
    ];

    protected $fillable = [
        'name',
        'role_id',
        'email',
        'telephone',
        'adresse',
        'fullname',
        'role_id',
        'owner_id',
        'password',
        'two_factor_code',
        'two_factor_expires_at',
        'code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function  seller() {
        return $this->belongsTo(Seller::class, 'owner_id');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function role(){
        return$this->belongsTo(Role::class);
    }


public function wishlist(){
    return $this->hasMany(Wishlist::class);
 }

 public function orders() {
    return $this->hasMany(Order::class);
 }




}
