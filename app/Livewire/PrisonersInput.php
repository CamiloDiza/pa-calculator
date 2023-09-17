<?php

namespace App\Livewire;

use Livewire\Component;

class PrisonersInput extends Component
{
    public $prisoners = 50;

    public function render()
    {
        return view('livewire.prisoners-input');
    }

    public function updatedprisoners()
    {
        $this->dispatch('prisoners-updated', prisoners: $this->prisoners);
    }
}
