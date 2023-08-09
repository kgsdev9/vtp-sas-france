<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    
    protected $fillable =[
        'fullname',
        'slug',
        'phonenumber',
        'mobilemoney',
        'city',
        'country',
        'photo',
        'logo',
        'adresse',
        'rib',
        'cni',
        'email'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

}
