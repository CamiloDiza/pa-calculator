<?php

namespace App\Livewire;

use Livewire\Component;

class Workshop extends Component
{
    public $workers = 7;
    public $totalWorkHours = 8;

    public $workSaw = 0;
    public $workPress = 0;
    public $tables = 0;
    public $profits = 0;

    public function mount()
    {
        $this->calculateWorkshop();
    }

    public function calculateWorkshop()
    {
        $this->workSaw = round($this->workers / 3.3);
        $this->workPress = round($this->workSaw * 2);
        $this->tables = $this->workers;
        $this->profits = round($this->totalWorkHours * 25 * $this->workPress);
    }

    public function updated($property)
    {
        $this->calculateWorkshop();
    }

    public function render()
    {
        return view('livewire.workshop');
    }
}
