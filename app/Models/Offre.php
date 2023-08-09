<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'statut',
        'description',
        'price',
        'carriere_id'
    ];

    public function carriere() {

        return $this->belongsTo(Carrier::class, 'carriere_id');
    }

}
