<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SaveOrder extends Component
{

    public $carriere;
    public $slug ;

    public function mount() {

        $carriere = $this->carriere;
        $slug = $this->slug;

        dd($slug);
    }


    public function render()
    {
        return view('livewire.save-order');
    }
}
