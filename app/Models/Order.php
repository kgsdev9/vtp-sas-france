<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'adresse_delivry',
        'country_delivry',
        'city_delivry',
        'phone',
        'user_id',
        'seller_id',
        'amount',
        'codeCommande',
        ''
    ];

    public function user() {
        return $this->belongsTo(User::class);
     }


}
