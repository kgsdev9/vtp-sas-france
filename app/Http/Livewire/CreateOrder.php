<?php

namespace App\Http\Livewire;

use App\Models\Offre;
use App\Models\Product;
use Livewire\Component;

class CreateOrder extends Component
{

    public $slug ;


    public function mount($slug) {
     $this->slug ;

    }

    public function render()
    {
        return view('livewire.create-order', [
            'ressource' => Product::where('slug', $this->slug)->first(),
        ])->extends('layout.app')->section('content');
    }
}
